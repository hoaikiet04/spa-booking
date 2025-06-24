$(document).ready(function () {
  // Trang chủ - Toggle menu responsive
  $(document).ready(function () {
    // Ẩn menu khi tải trang nếu màn hình nhỏ
    if ($(window).width() < 992) {
      $("#navbarNav").hide();
    }

    // Toggle menu khi click nút toggle
    $(".navbar-toggler").click(function () {
      $("#navbarNav").stop().slideToggle();
    });

    // Reset hiển thị menu khi thay đổi kích thước màn hình
    $(window).resize(function () {
      if ($(window).width() >= 992) {
        $("#navbarNav").show();
      } else {
        $("#navbarNav").hide();
      }
    });
  });

  // trans feedback
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

  // Initialize
  showCards();
  updateArrows();
});
