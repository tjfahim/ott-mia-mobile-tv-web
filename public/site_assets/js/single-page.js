// recommended shows- slider
(function () {
  function createHorizontalSlider(container) {
    const splide = new Splide(`#${container}`, {
      perPage: 6,
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

  const recommendedShowsOne = createHorizontalSlider("recommendedShows");
  recommendedShowsOne.mount();
})();

// video js
(function () {
  var options = {};
})();

// video plyr
(function () {
  const player = new Plyr("#player");
})();
