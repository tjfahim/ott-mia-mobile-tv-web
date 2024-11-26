$(document).ready(function(){
    // tv station slide code
    $('.tv-station').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        initialSlide: 0,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }

        ]
      });



      //  month and yarly plan section
      $('#monthly_plan').show();
      $('#yearly_plan').hide();
      $('#monthly_btn').addClass('bg-stone-700');
      $('#yearly_btn').removeClass('bg-stone-700');
      $('#monthly_btn').on('click', function(){
          $('#monthly_plan').show();
          $('#yearly_plan').hide();
          $('#yearly_btn').removeClass('bg-stone-700');
          $(this).addClass('bg-stone-700');
      });
      $('#yearly_btn').on('click', function(){
          $('#yearly_plan').show();
          $('#monthly_plan').hide();
          $('#monthly_btn').removeClass('bg-stone-700');
          $(this).addClass('bg-stone-700');
      });


      // home page after login slider
      $('.slider1').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: true,
        initialSlide: 0,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }

        ]
      });




      // login popup-up show
      $(document).ready(function() {

        $('.popup-login').hide();

        $(document).on('click', '.btn-login', function() {

            $('.popup-login').slideDown("slow");

        });


        $(document).on('click', '.close-popup', function() {
            $('.popup-login').slideUp("slow");
        });
    });

    // register popup show
      $(document).ready(function() {

        $('.popup-register').hide();

        $(document).on('click', '.btn-register', function() {

            $('.popup-register').slideDown("slow");

        });


        $(document).on('click', '.close-popup', function() {
            $('.popup-register').slideUp("slow");
        });
    });


    // faq ask section
    $(document).on('click', '.faq-close', function(){
      $(this).parent().slideUp();
    });

    $('.faq').hide();
    $(document).on('click', '.btn-q', function(){
      // $('.faq').hide();
      // $('.faq').parent().removeClass('bg-black');
      // console.log($('.faq').parent().children('button').removeClass('rotate-180'));
      let content = $(this).parent().next();
      let visible = content.toggle();

      if (content.is(':visible')) {

        $(this).parent().parent().addClass('bg-black');
        $(this).addClass('rotate-180');
      } else {
          $(this).removeClass('rotate-180');
          $(this).parent().parent().removeClass('bg-black');
      }
    });


      // login home page slider
      $(document).ready(function(){
        let next_btn = $('.m_s_btn_next').on('click', function(){
            // Get the parent div of the current slide
            let current_slide = $(this).closest('.slide'); // Assuming each slide is wrapped in a div with class 'slide'

            console.log(current_slide);
            // Hide the current slide
            current_slide.hide();

            // Show the next div (slide)
            current_slide.next('.slide').show();
        });
    });
});
