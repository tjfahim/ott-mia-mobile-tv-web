<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Stream Player</title>
    <link rel="stylesheet" href="http://cdn.plyr.io/3.6.2/plyr.css" />
</head>
<body>

<video id="player" class="plyr" controls></video>

<script src="http://cdn.plyr.io/3.6.2/plyr.js"></script>
<script src="http://cdn.jsdelivr.net/npm/hls.js@latest"></script>

<script>
  const video = document.getElementById('player');
  const videoSource = '{{ $url }}';

  const httpURL = videoSource.replace(/^https:\/\//, 'http://');
  console.log('Using HTTP URL:', httpURL);

  const player = new Plyr(video);

  if (Hls.isSupported()) {
  const video = document.getElementById('video');
  const hls = new Hls({
    loader: {
      load: (context, config, callbacks) => {
        if (context.url.startsWith('https://')) {
          context.url = context.url.replace('https://', 'http://');
        }
        const loader = new Hls.DefaultConfig.loader(context, config, callbacks);
        loader.load(context, config, callbacks);
      },
    },
  });

  hls.loadSource('http://vip.ltv1688.xyz:80/e0icv722yr/3ewut3zn5s/309553');
  hls.attachMedia(video);

  } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = httpURL;
    video.play();
  } else {
    console.error('HLS not supported in this browser');
  }
</script>

</body>
</html>
