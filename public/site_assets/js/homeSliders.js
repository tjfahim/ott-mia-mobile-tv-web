// Splide Fluid
(function () {
  document.addEventListener("DOMContentLoaded", function () {
    // hero slider
    const heroSplide = new Splide("#heroSplide", {
      type: "loop",
      fixedHeight: "600px",
      autoplay: true,
      arrows: true,
      breakpoints: {
        575: {
          arrows: false,
          fixedHeight: "85vh",
        },
        767: {
          fixedHeight: "80vh",
        },
      },
    });
    heroSplide.mount();

    // home slider
    const homeSlider = new Splide("#homeSplide", {
      type: "loop",
      fixedHeight: "600px",
      autoplay: true,
      arrows: true,
      breakpoints: {
        575: {
          arrows: false,
          fixedHeight: "85vh",
        },
        767: {
          fixedHeight: "80vh",
        },
      },
    });
    homeSlider.mount();
  });
})();

// General Splide
(function () {
  document.addEventListener("DOMContentLoaded", function () {
    // trending shows slider
    function createHorizontalSlider(container) {
      const splide = new Splide(`#${container}`, {
        type: "loop",
        perPage: 4,
        gap: "0.75rem",
        pagination: false,
        arrows: true,
        breakpoints: {
          575: {
            perPage: 2,
            arrows: false,
          },
          767: {
            perPage: 3,
          },
        },
      });

      return splide;
    }

    const trendingShowsSplide = createHorizontalSlider("trendingShows");
    trendingShowsSplide.mount();
    const trendingShowsSplide1 = createHorizontalSlider("livetv");
    trendingShowsSplide1.mount();
    const trendingShowsSplide2 = createHorizontalSlider("trendingShows2");
    trendingShowsSplide2.mount();
    const trendingShowsSplide3 = createHorizontalSlider("trendingShows3");
    trendingShowsSplide3.mount();
    const trendingShowsSplide4 = createHorizontalSlider("trendingShows4");
    trendingShowsSplide4.mount();

    // Superhit shows slider
    function createVerticalSlider(container) {
      const splide = new Splide(`#${container}`, {
        type: "loop",
        perPage: 5,
        gap: "0.75rem",
        pagination: false,
        arrows: true,
        breakpoints: {
          575: {
            perPage: 3,
            arrows: false,
          },
          767: {
            perPage: 4,
          },
        },
      });

      return splide;
    }

    const superHitShowsSplide = createVerticalSlider("superHitShows");
    superHitShowsSplide.mount();
    const superHitShowsSplide2 = createVerticalSlider("superHitShows2");
    superHitShowsSplide2.mount();
    const superHitShowsSplide3 = createVerticalSlider("superHitShows3");
    superHitShowsSplide3.mount();
  });
})();
