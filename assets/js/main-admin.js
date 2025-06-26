$(document).ready(function () {
  // Xử lý sidebar active
  $(".sidebar .nav-link").on("click", function (e) {
    $(".sidebar .nav-link").removeClass("active");
    $(this).addClass("active");
  });

  // Slideshow banner
  const $images = $(".slide-show");
  const total = $images.length;
  let current = 0;

  function showNext() {
    $images.removeClass("active");
    current = (current + 1) % total;
    $images.eq(current).addClass("active");
  }

  $images.eq(0).addClass("active");

  let interval = setInterval(showNext, 4000);

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) {
      clearInterval(interval);
    } else {
      interval = setInterval(showNext, 4000);
    }
  });
});
