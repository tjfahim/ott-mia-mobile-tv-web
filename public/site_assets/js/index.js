function ready() {
  // get scroll position
  (function () {
    function changeBackground() {
      if (this.scrollY > 150) {
        document.getElementById("navbar").classList.add("scrolled");
      }

      if (this.scrollY < 150) {
        document.getElementById("navbar").classList.remove("scrolled");
      }
    }

    window.addEventListener("scroll", changeBackground);
  })();

  // dropdown for small devices
  (function () {
    const triggers = document.querySelectorAll(
      ".navbar__sm .dropdown__trigger"
    );

    function toggleDropdown() {
      const menu = this.parentElement.nextElementSibling;

      this.classList.toggle("active");
      menu.classList.toggle("active");
    }

    triggers.forEach(function (trigger) {
      trigger.addEventListener("click", toggleDropdown);
    });
  })();

  // mobile menu
  (function () {
    const menuButton = document.querySelector(".navbar .menu__btn");
    const menuCloseButton = document.querySelector(".navbar .menu__btn__close");

    function toggleMenu() {
      if (this === menuButton) {
        this.classList.add("hide");
        menuCloseButton.classList.add("show");
      }
      if (this === menuCloseButton) {
        menuButton.classList.remove("hide");
        this.classList.remove("show");
      }

      document.getElementById("header").classList.toggle("hide");
      document.getElementById("header__sm").classList.toggle("active");
    }

    menuButton.addEventListener("click", toggleMenu);
    menuCloseButton.addEventListener("click", toggleMenu);
  })();

  // translate dropdown
  (function () {
    const triggers = document.querySelectorAll(".dropdown .translate__btn");

    function toggleDropdown() {
      const menu = this.nextElementSibling;
      const arrow = this.children[2];

      if (arrow.style.transform === "rotate(180deg)") {
        arrow.style.transform = "rotate(0)";
      } else {
        arrow.style.transform = "rotate(180deg)";
      }

      menu.classList.toggle("active");
    }

    triggers.forEach(function (trigger) {
      trigger.addEventListener("click", toggleDropdown);
    });
  })();

  // search input
  (function () {
    const searchField = document.querySelector("#search__field");
    const searchFieldClearButton = document.querySelector(
      "#search__field__clear"
    );
    const filterCloseButton = document.querySelector(
      ".filter__box .filter__btn__close"
    );
    const searchButton = document.querySelector(".header .search__btn");
    const searchButtonDesktop = document.querySelector(".header .search__icon");

    function showClearButton() {
      searchFieldClearButton.classList.add("show");
    }

    function hideClearButton() {
      searchFieldClearButton.classList.remove("show");
      searchField.value = "";
    }

    function toggleFileter() {
      const filterSection = document.querySelector(".filter__box");

      filterSection.classList.toggle("show");
    }

    searchField.addEventListener("input", showClearButton);
    searchFieldClearButton.addEventListener("click", hideClearButton);
    filterCloseButton.addEventListener("click", toggleFileter);
    searchButton.addEventListener("click", toggleFileter);
    searchButtonDesktop.addEventListener("click", toggleFileter);
  })();

  // chat box
  (function () {
    const chatSMS = document.querySelector(".chat__features .message");
    const chatTrigger = document.querySelector(
      ".chat__box .chat__trigger__btn"
    );
    const chatTriggerClose = document.querySelector(
      ".chat__box .chat__box__close__btn"
    );

    function toggleSendButton() {
      const message = this.value;
      const sendButton = document.querySelector(".chat__features .chat__send");
      const inputGroup = document.querySelector(
        ".chat__features .chat__input__group"
      );

      sendButton.classList.remove("active");
      inputGroup.classList.remove("active");

      if (message.length > 0) {
        sendButton.classList.add("active");
        inputGroup.classList.add("active");
      }
    }

    // chat input box
    chatSMS.addEventListener("input", toggleSendButton);

    function toggleEmoji(trigger, textArea) {
      const picker = new EmojiPicker({
        trigger: [
          {
            selector: [trigger],
            insertInto: [textArea],
          },
        ],
        closeButton: true,
        specialButtons: "rgb(255, 0, 85)",
      });

      return picker;
    }

    // trigger emoji panel
    const emojiPicker = toggleEmoji(".chat__emoji__trigger", ".message");

    function toggleChatBox() {
      const chatBox = document.querySelector(".chat__box .chat__box__field");

      chatTrigger.classList.toggle("hide");
      chatBox.classList.toggle("show");
    }

    // chat box toggler
    chatTrigger.addEventListener("click", toggleChatBox);
    chatTriggerClose.addEventListener("click", toggleChatBox);
  })();

  // dynamic active nav link
  (function () {
    const navLinks = document.querySelectorAll(".navbar__nav .nav__link");

    function dynamicNavLinks(event) {
      navLinks.forEach((item) => {
        item.classList.remove("active");
      });

      event.target.classList.add("active");
    }

    navLinks.forEach(function (item) {
      item.addEventListener("click", dynamicNavLinks);
    });
  })();
}

window.addEventListener("load", ready);
