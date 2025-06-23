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
});
