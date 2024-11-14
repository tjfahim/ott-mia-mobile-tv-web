function ready() {
  // responsive slide image
  (function () {
    const slideImages = document.querySelectorAll(
      ".splide__fluid .splide__img"
    );
    let screenSize = innerWidth;

    // element swapper
    function swap(elem) {
      let temp = elem.src;
      elem.src = elem.dataset.smallSrc;
      elem.dataset.smallSrc = temp;
    }

    // change image source for small devices
    function changeForSmallDevices(elem) {
      if (!elem.src.includes("small")) {
        swap(elem);
      }
    }

    // change image source for large devices
    function changeForLargeDevices(elem) {
      if (elem.src.includes("small")) {
        swap(elem);
      }
    }

    // detect responsive window size
    function report(width) {
      slideImages.forEach(function (image) {
        if (width < 768) {
          changeForSmallDevices(image);
        } else {
          changeForLargeDevices(image);
        }
      });
    }
    report(screenSize);

    // get resized screen size
    function getScreenSize() {
      return innerWidth;
    }

    // listen window resizing
    this.addEventListener("resize", function () {
      screenSize = getScreenSize();
      report(screenSize);
    });
  })();

  // slide's social share menu toggler
  (function () {
    const shareButtons = document.querySelectorAll(
      ".splide__icons .share-icon"
    );

    const shareMenus = document.querySelectorAll(".splide__icons");

    function toggleMenu(event, self) {
      if (event.type === "click") {
        const menu = self.nextElementSibling;

        if (!menu.classList.contains("active")) {
          menu.classList.add("active");
        }
      }

      if (event.type === "mouseleave") {
        const menu = self.children[1];

        if (menu.classList.contains("active")) {
          menu.classList.remove("active");
        }
      }
    }

    shareButtons.forEach(function (elem) {
      elem.addEventListener("click", function (event) {
        toggleMenu(event, this);
      });
    });

    shareMenus.forEach(function (menu) {
      menu.addEventListener("mouseleave", function (event) {
        toggleMenu(event, this);
      });
    });
  })();
}

window.addEventListener("load", ready);
