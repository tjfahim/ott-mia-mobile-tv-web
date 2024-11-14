@extends('site_app')

@section('content')

<style>
  /* Existing styles */
body, html {
    margin: 0;
    height: 100%;
    overflow: hidden;
}
.wrapper {
    height: 100vh;
    overflow: hidden;
    position: relative;
}
.container {
    margin-top: 90px;
    height: 85%;
    overflow-y: scroll;
    scroll-snap-type: y mandatory;
    scroll-behavior: smooth;
    scrollbar-width: none;
}
.container::-webkit-scrollbar {
    display: none;
}
.section {
    height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    width: 400px;
    margin: 0 auto;
    scroll-snap-align: start;
    background-color: black;
}
.title-container {
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    color: #fff;
    padding: 20px 100px;
    text-align: center;
    font-size: 1.2em;
    z-index: 1;
}
video {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}
.interaction-container {
    position: absolute;
    bottom: 70px;
    right: 10px;
    color: #fff;
    text-align: center;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.interaction-container button {
    background: none;
    border: none;
    color: #fff;
    font-size: 1.5em;
    margin: 5px 0;
    cursor: pointer;
}
.interaction-container .like-count,
.interaction-container .comment-count {
    margin-bottom: 10px;
}

.modal {
    display: none; 
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 320px;
    border-radius: 10px;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #888;
    padding-bottom: 10px;
}

.close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.comment-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.comment-text {
    background-color: #f1f1f1;
    padding: 10px;
    border-radius: 5px;
    max-width: 80%;
}

.comment-input {
    width: calc(100% - 50px);
    padding: 10px;
    margin-right: 10px;
}

.submit-comment {
    padding: 10px 20px;
}

/* Adjustments for mobile view */
@media (max-width: 600px) {
    .modal-content {
        width: 90%;
    }
}

</style>
<div class="wrapper">
    <div class="container">
        @foreach ($reels as $index => $reel)
            <div class="section" data-index="{{ $index }}">
                <h3 class="title-container">
                    {{ $reel->title }}
                </h3>
                <video src="{{ asset($reel->video_url) }}" controls></video>

                <!-- Like, Comment, and Share Section -->
                <div class="interaction-container">
                <button class="like-button" data-reel-id="{{ $reel->id }}" {{ Auth::check() ? '' : 'disabled' }}>
    @if($reel->isLikedByUser())
        <i class="fas fa-heart"></i>
    @else
        <i class="far fa-heart"></i>
    @endif
</button>
                    <span class="like-count">{{ $reel->likes->count() }}</span>

                    <button class="comment-button" data-reel-id="{{ $reel->id }}">
    <i class="far fa-comment"></i>
</button>
                    <span class="comment-count">{{ $reel->comments->count() }}</span>

                    <button class="share-button" data-reel-id="{{ $reel->id }}">
                        <i class="fas fa-share"></i> <!-- Share icon -->
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Comment Modal -->
<div id="commentModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Comments</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <!-- Comments will be loaded here -->
            <div id="commentsList">
                <!-- Comments will be dynamically added here -->
            </div>
        </div>
        <div class="modal-footer">
            <input type="text" id="commentInput" class="comment-input form-control" required placeholder="Write a comment...">
            <button id="submitComment" class="submit-comment btn btn-primary"  {{ Auth::check() ? '' : 'disabled' }}>Submit</button>
        </div>
    </div>
</div>


@include("_particles.footer")

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.container');
    let currentVideo = null;
    const modal = document.getElementById("commentModal");
    const closeModal = document.querySelector(".close");
    const commentsList = document.getElementById("commentsList");
    const submitComment = document.getElementById("submitComment");
    let currentReelId = null;

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
    closeModal.addEventListener('click', () => {
        modal.style.display = "none";
    });
    document.querySelectorAll('.share-button').forEach(button => {
        button.addEventListener('click', function() {
            const reelId = this.getAttribute('data-reel-id');
            console.log(`Attempting to share reel with ID: ${reelId}`);

            // Define share URL and other parameters
            const shareUrl = `/reels/${reelId}/share`;

            // Implement share functionality, e.g., using the Web Share API if supported
            if (navigator.share) {
                navigator.share({
                    title: 'Check out this reel!',
                    url: shareUrl
                })
                .then(() => console.log('Share successful'))
                .catch(error => console.error('Error sharing:', error));
            } else {
                console.log('Web Share API not supported. Implement alternative sharing.');
                // Fallback for browsers that do not support the Web Share API
                window.open(shareUrl, '_blank');
            }
        });
    });
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const section = entry.target;
                const video = section.querySelector('video');

                if (currentVideo && currentVideo !== video) {
                    currentVideo.pause();
                    currentVideo.currentTime = 0; // Optional: Reset video to start
                }

                if (video) {
                    video.play();
                    currentVideo = video;
                }
            }
        });
    }, { threshold: 0.5 });

    const sections = document.querySelectorAll('.section');
    sections.forEach(section => observer.observe(section));

    document.querySelectorAll('.like-button').forEach(button => {
    button.addEventListener('click', function() {
        const reelId = this.getAttribute('data-reel-id');

        fetch(`/reels/${reelId}/like`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            credentials: 'include'
        })
        .then(response => {
            if (response.redirected) {
                window.location.href = response.url; // Redirect to login page
                return;
            }
            return response.json();
        })
        .then(data => {
            if (data.likeCount !== undefined) {
                const likeCount = this.nextElementSibling;
                likeCount.textContent = `${data.likeCount}`;
                const icon = this.querySelector('i');
                icon.classList.toggle('fas'); // Toggle filled heart
                icon.classList.toggle('far'); // Toggle empty heart
            } else {
                console.error('Error liking reel:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

document.querySelectorAll('.comment-button').forEach(button => {
    button.addEventListener('click', function() {
        currentReelId = this.getAttribute('data-reel-id');

        fetch(`/reels/${currentReelId}/comments`, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            credentials: 'include'
        })
        .then(response => {
            if (response.redirected) {
                window.location.href = response.url; // Redirect to login page
                return;
            }
            return response.json();
        })
        .then(data => {
            commentsList.innerHTML = ''; // Clear existing comments
            if (data.reel_comments && data.reel_comments.length > 0) {
                data.reel_comments.forEach(comment => {
                    const commentItem = document.createElement('div');
                    commentItem.classList.add('comment-item');

                    const commentTextDiv = document.createElement('div');
                    commentTextDiv.classList.add('comment-text');
                    commentTextDiv.innerHTML = `<strong>${comment.user.name}</strong><br>${comment.comment}`;

                    commentItem.appendChild(commentTextDiv);
                    commentsList.appendChild(commentItem);
                });
            } else {
                commentsList.innerHTML = '<p>No comments yet. Be the first to comment!</p>';
            }

            modal.style.display = "block";
        })
        .catch(error => console.error('Error:', error));
    });
});

submitComment.addEventListener('click', function() {
    const commentInput = document.getElementById("commentInput");
    const commentText = commentInput.value;

    if (commentText.trim() !== '') {
        fetch(`/reels/${currentReelId}/comments`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            credentials: 'include',
            body: JSON.stringify({ comment: commentText })
        })
        .then(response => {
            if (response.redirected) {
                window.location.href = response.url; // Redirect to login page
                return;
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                const commentItem = document.createElement('div');
                commentItem.classList.add('comment-item');

                const commentTextDiv = document.createElement('div');
                commentTextDiv.classList.add('comment-text');
                commentTextDiv.innerHTML = `<strong>${data.username || 'Anonymous'}</strong><br>${data.comment || 'No comment'}`;

                commentItem.appendChild(commentTextDiv);
                commentsList.appendChild(commentItem);

                commentInput.value = ''; // Clear input field

                // Update comment count
                const commentCountElement = document.querySelector(`.section[data-index="${currentReelId}"] .comment-count`);
                if (commentCountElement) {
                    commentCountElement.textContent = `${data.commentCount}`;
                }
            } else {
                console.error('Error adding comment:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
});
});
</script>

@endsection
