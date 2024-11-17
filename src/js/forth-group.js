// TO DO: ENCAPSULATE!
(function ($) {
  // CAROUSEL
  $(function () {
    $(".forth-slider").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items: 5,
      nav: true,
      navText: [
        '<span class="fa fa-chevron-left"></span>',
        '<span class="fa fa-chevron-right"></span>',
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true,
        },
        640: {
          items: 3,
          nav: true,
        },
        769: {
          items: 5,
          nav: true,
        },
      },
      pagination: true,
    });
  });

  // TABS
  $(function () {
    $(".side-tabbed-content-wrapper").on(
      "click",
      ".tab-switch",
      function (event) {
        event.preventDefault();
        var $this = $(this),
          $target = $this.attr("data-target"),
          isSmall = $this.parent().is("li") ? false : true,
          $wrapper = $this.closest(".side-tabbed-content-wrapper");
        // turn off all navs
        $(".side-nav ul li").add(".tab-switch").removeClass("active");
        $(".side-nav ul li .tab-switch").attr("aria-selected", "false");
        $(".main-tab-content-wrapper .tab-switch").attr(
          "aria-expanded",
          "false"
        );
        // enable this nav
        $this.addClass("active");
        if ($this.hasClass("sidebar")) {
          $this.attr("aria-selected", "true");
        } else {
          $this.attr("aria-expanded", "true");
        }
        $('.tab-switch[data-target="' + $target + '"]')
          .parent("li")
          .addClass("active");

        // load content
        if ($target === "#content-all") {
          $wrapper.find(".content-item").addClass("active");
        } else {
          $wrapper.find(".content-item.active").removeClass("active");
          $($target).addClass("active");
        }
        // scroll to top of element
        if (isSmall) {
          var top = $($target).offset().top - 300;
          $("html, body").animate(
            {
              scrollTop: top,
            },
            500
          );
        } else {
          $("html, body").animate(
            {
              scrollTop: $(".side-tabbed-content-wrapper").offset().top,
            },
            500
          );
        }
      }
    );
  });

  // nav bar
  $(function () {
    var checkNavBarPosition = function () {
      var $hdr = $(".site-header");
      if ($(document).scrollTop() > $hdr.outerHeight()) {
        $hdr.addClass("faded");
      } else {
        $hdr.removeClass("faded");
      }
    };

    $(".navbar-toggle").on("click", function () {
      $(this).toggleClass("active");
      $(".site-header").add(".header-btn-mobile").toggleClass("active");
    });

    $(document).on("scroll", function () {
      checkNavBarPosition();
    });
    checkNavBarPosition();
  });

  // read more  read Less
  $(function () {
    toggleText = function ($el) {
      var currentHtml = $el.html();
      var currentLabel = currentHtml.trim();
      var thisToggleText =
        currentLabel === $el.data("toggleOn")
          ? $el.data("toggleOff")
          : $el.data("toggleOn");
      $el.html(thisToggleText);
    };

    $(".forthToggleSwapTrigger").on("click", function (event) {
      event.preventDefault();
      var $this = $(this);
      var target = $this.attr("href");
      var thatToggleText = $this.data("toggleOn");
      var mode = $this.data("mode");
      // turn others off
      $(".forthToggleSwapTrigger").not($this).html(thatToggleText);
      $(".read-more").not($(target)).hide();
      $(target).toggle();
      toggleText($this);
    });

    // hides an element and replaces its text with a data attribute value
    $(".forthHideAndSwap").on("click", function (event) {
      event.preventDefault();
      var $this = $(this);
      var $targetToHide = $($this.attr("href"));
      var $targetToSwap = $($this.data("targetToSwap"));
      $targetToHide.hide();
      toggleText($targetToSwap);
    });

    $(".readMoreLess").on("click", function (event) {
      event.preventDefault();
      var $this = $(this);
      var target = $this.attr("aria-controls");
      var state = $this.attr("aria-expanded");
      toggleText($this);
      if (target) {
        $("#" + target).toggleClass("d-none");
        $this.attr("aria-expanded", state === "true" ? "false" : "true");
      }
    });
  });

  // testimonial nav
  $(function () {
    $(".testimonial-nav button").on("click", function () {
      var $target = $(this).attr("data-target");
      $("blockquote").add(".testimonial-nav button").removeClass("active");
      $(this).add($target).addClass("active");
    });

    $(".testimonial-nav li").on("click", function () {
      $(this).find("a").trigger("click");
    });
  });
  // BG Sizes

  // Retina
  $(function () {
    if (typeof retinajs === "function") {
      retinajs($("img.retina"));
    }
  });

  // Analytics
  $(window).load(function () {
    $("a.has-gtm").on("click", function (event) {
      console.log("gtm fired");
      // fire GTM event
      var $this = $(this);
      var data = $this.data();
      var gtmID = $("body").data("gtmId");
      if (gtmID && window.gtag) {
        if (data["gtmConversion"]) {
          gtag("event", "conversion", {
            send_to: gtmID + "/" + data["gtmConversion"],
          });
        }
        if (data["gtmEventCategory"]) {
          gtag("event", "click", {
            event_category: data["gtmEventCategory"],
            event_label: data["gtmEventLabel"],
          });
        }
      }
    });
  });

  $("button.play-pause").on("click", function () {
    const $this = $(this);
    const target = $this.data("target");
    const $iconPlay = $this.find(".icon-play");
    const $iconPause = $this.find(".icon-pause");
    const $srSpan = $this.find("span");
    const $player = $("#" + target).get(0);

    if (!$player) return; // Exit if the player is not found

    var label = "Pause Video";
    if ($player.paused) {
      $player.play();
      $iconPause.removeClass("d-none");
      $iconPlay.addClass("d-none");
      label = "Pause Video";
    } else {
      $player.pause();
      $iconPlay.removeClass("d-none");
      $iconPause.addClass("d-none");
      label = "Play Video";
    }

    $this.attr("title", label);
    $this.attr("aria-label", label);
    $srSpan.html(label);
  });

  // 11/2/24: refactored tabs to be more accessible
  function setActiveTab($tab) {
    var $siblings = $tab.siblings("button");
    var target = $tab.attr("aria-controls");
    var $target = $("#" + target);
    var $wrapper = $tab.closest("[data-tab-container]");
    var $tabPanes = $wrapper.find(".tab-pane");

    if ($target) {
      $siblings.attr("aria-selected", "false");
      $wrapper.find("li").removeClass("active");
      $tabPanes.removeClass("active");

      $tab.attr("aria-selected", "true").focus();
      $tab.parent("li").addClass("active");
      $target.addClass("active");
    }
  }
  $('[data-tab-container] button[role="tab"]').on("click", function () {
    setActiveTab($(this));
  });

  $(
    '[data-tab-container] button[role="tab"],[data-tab-container] button[role="tab"]'
  ).on("keydown", function (e) {
    var $this = $(this);
    var $tabs = $this
      .closest("[data-tab-container]")
      .find('button[role="tab"]');
    var currentIndex = $tabs.index($this);
    var newIndex;

    if (e.key === "ArrowLeft") {
      newIndex = currentIndex === 0 ? $tabs.length - 1 : currentIndex - 1;
    } else if (e.key === "ArrowRight") {
      newIndex = currentIndex === $tabs.length - 1 ? 0 : currentIndex + 1;
    } else {
      return; // Exit if not left or right arrow key
    }

    e.preventDefault(); // Prevent default scroll behavior
    setActiveTab($tabs.eq(newIndex));
  });

  // Modal updates
  $(".tabbed-carousel-wrapper #modal").on("show.bs.modal", function (e) {
    var $modalTrigger = $(e.relatedTarget);
    var $modalTarget = $(e.currentTarget);
    var $modalTitle = $modalTarget.find(".modal-title");
    var $modalImg = $modalTarget.find(".modal-body img");
    $modalImg.attr("src", $modalTrigger.attr("data-img"));
    $modalTitle.html($modalTrigger.attr("data-label"));
    $triggerTabPane = $modalTrigger.closest(".tab-pane");
  });

  // end ENCAPSULATE
})(jQuery);

function loadTypekitWithFallback() {
  const checkInterval = 250; // Interval to check for Typekit (in milliseconds)
  const maxWaitTime = 1500; // Maximum wait time (in milliseconds)
  let elapsedTime = 0;

  // Check if Typekit is loaded
  const checkTypekit = setInterval(() => {
    if (window.Typekit) {
      clearInterval(checkTypekit);
      try {
        Typekit.load({
          active: function () {
            document
              .querySelectorAll(".tk")
              .forEach((el) => el.classList.add("on"));
          },
        });
      } catch (e) {
        console.error("Typekit load failed:", e);
      }
    } else {
      elapsedTime += checkInterval;
      if (elapsedTime >= maxWaitTime) {
        clearInterval(checkTypekit);
        console.warn(
          "Typekit failed to load within timeout. Forcing font visibility."
        );
        document
          .querySelectorAll(".tk")
          .forEach((el) => el.classList.add("on"));
      }
    }
  }, checkInterval);
}

loadTypekitWithFallback();

// map image
function displayMap() {
  var accessToken =
    "pk.eyJ1IjoiY2NiYXllciIsImEiOiJjbTNjNDJndnUxd2M1Mmlwd3B5b3FkY2hqIn0.T2-bnCgtPHl4p9OLuhWTFQ";
  var lon = "-87.626265";
  var lat = "41.855647";
  var zoom = 15;
  var width = 750;
  var height = 500;
  var pinColor = "395212"; // options: red, blue, green, etc.
  var markerLabel = "f"; // single letter or number
  var mapUrl = `https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/pin-s-${markerLabel}+${pinColor}(${lon},${lat})/${lon},${lat},${zoom}/${width}x${height}?access_token=${accessToken}`;
  // Display in an <img> element
  var imgElement = document.getElementById("mapimg");
  if (imgElement) {
    imgElement.src = mapUrl;
  }
}
displayMap();

// Mutation observer to target GTM tracking iframes and set aria-hidden if they are not visible
const observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    mutation.addedNodes.forEach((node) => {
      if (
        node.nodeType === 1 &&
        node.tagName === "IFRAME" &&
        !node.hasAttribute("title")
      ) {
        const iframeStyle = window.getComputedStyle(node);

        // Check if the iframe is hidden (display: none or visibility: hidden); if so, it can be ignored since it's likely not used for users
        if (
          iframeStyle.display === "none" ||
          iframeStyle.visibility === "hidden"
        ) {
          node.setAttribute("aria-hidden", "true");
        }
      }
    });
  });
});

// Start observing the document for child additions
observer.observe(document.body, {
  childList: true,
  subtree: true,
});
