$(document).ready(function () {
  // --- Toggle menu responsive ---
  if ($(window).width() < 992) {
    $("#navbarNav").hide();
  }

  $(".navbar-toggler").click(function () {
    $("#navbarNav").stop().slideToggle();
  });

  $(window).resize(function () {
    if ($(window).width() >= 992) {
      $("#navbarNav").show();
    } else {
      $("#navbarNav").hide();
    }
  });

  // --- Testimonials carousel ---
  var $cards = $(".testimonial-card-col");
  var visibleCount = 3;
  var currentIndex = 0;

  function showCards() {
    $cards.addClass("d-none");
    for (let i = 0; i < visibleCount; i++) {
      var idx = currentIndex + i;
      if (idx < $cards.length) {
        $cards.eq(idx).removeClass("d-none");
      }
    }
  }

  function updateArrows() {
    $(".arrow-left").prop("disabled", currentIndex === 0);
    $(".arrow-right").prop(
      "disabled",
      currentIndex + visibleCount >= $cards.length
    );
  }

  $(".arrow-left").click(function () {
    if (currentIndex > 0) {
      currentIndex--;
      showCards();
      updateArrows();
    }
  });

  $(".arrow-right").click(function () {
    if (currentIndex + visibleCount < $cards.length) {
      currentIndex++;
      showCards();
      updateArrows();
    }
  });

  showCards();
  updateArrows();

  // --- Dropdown on hover ---
  $(".nav-item.dropdown").hover(
    function () {
      $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeIn(300);
    },
    function () {
      $(this).find(".dropdown-menu").stop(true, true).delay(200).fadeOut(300);
    }
  );
});
