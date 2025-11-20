# 🌿 Spa Booking Website

> Hệ thống đặt lịch spa trực tuyến – Dự án môn Chuyền đề thực tế 2
---

## 📌 Giới thiệu

**Spa Booking Website** là một ứng dụng web cho phép khách hàng:

* Xem danh sách dịch vụ spa
* Đặt lịch trực tuyến
* Theo dõi lịch hẹn cá nhân

Đồng thời cung cấp cho **Admin**:

* Giao diện quản trị dịch vụ
* Quản lý lịch đặt
* Quản lý thông tin khách hàng

Dự án được xây dựng với mục tiêu mô phỏng quy trình triển khai một hệ thống đặt lịch thực tế, từ phân tích yêu cầu → thiết kế DB → triển khai tính năng → kiểm thử → báo cáo.

---

## 🧩 Vai trò Project Coordinator (Team Lead)

Trong dự án này, **Team Lead** đóng vai trò trọng tâm trong việc điều phối và đảm bảo chất lượng sản phẩm.
Các kỹ năng & nhiệm vụ chính:

### 1. Quản lý yêu cầu & lập kế hoạch (Planning & Requirement Management)

* Thu thập & phân tích yêu cầu chức năng: đặt lịch, quản lý dịch vụ, quản trị, phân quyền.
* Chuyển yêu cầu thành **backlog** rõ ràng (user stories, tính năng, deadline).
* Lập kế hoạch theo **milestone**, phân chia giai đoạn: thiết kế, dev, test, báo cáo.

### 2. Điều phối công việc & quản lý nhóm (Task Coordination)

* Phân công nhiệm vụ giữa các mảng: **Frontend – Backend – Database – Tài liệu**.
* Theo dõi tiến độ, nhắc việc, tháo gỡ vướng mắc kỹ thuật/logic cho từng thành viên.
* Đảm bảo các phần việc ghép lại ăn khớp về giao diện, luồng dữ liệu và DB.

### 3. Đảm bảo chất lượng (Quality Assurance)

* Xây dựng checklist kiểm thử cho: đăng nhập, đặt lịch, quản trị, xử lý form, validation.
* Kiểm tra tính nhất quán giữa code – giao diện – dữ liệu.
* Ghi nhận bug, phân công fix và verify lại trước khi chốt release/báo cáo.

### 4. Giao tiếp & báo cáo (Communication & Reporting)

* Làm cầu nối giữa nhóm và giảng viên/khách hàng mô phỏng.
* Chuẩn bị nội dung thuyết trình, demo flow hệ thống.
* Tổng hợp và chuẩn hóa tài liệu: **word báo cáo, slide, prompt, hướng dẫn cài đặt**.

### 5. Quản lý rủi ro & timeline (Risk & Timeline Management)

* Nhận diện các rủi ro: trễ tiến độ, lỗi tích hợp, thay đổi yêu cầu.
* Điều chỉnh phân bổ công việc khi có thành viên bận / phần việc phát sinh.
* Đảm bảo dự án hoàn thành đúng hạn với chất lượng tốt nhất trong phạm vi.

---
## 🎥 Demo & Hình ảnh dự án

### Trang chủ & Danh sách dịch vụ
![Trang chủ](screenshots/homepage.png)
![Danh sách dịch vụ](screenshots/services.png)

### Form đặt lịch
![Form đặt lịch](screenshots/booking-form.png)
![Xác nhận đặt lịch thành công](screenshots/booking-success.png)

### Khu vực người dùng
![Lịch sử đặt lịch](screenshots/user-bookings.png)

### Admin Dashboard
![Dashboard admin](screenshots/admin-dashboard.png)
![Quản lý dịch vụ](screenshots/admin-services.png)
![Quản lý lịch đặt](screenshots/admin-bookings.png)

---
## 🏗️ Kiến trúc & cấu trúc dự án

```bash
spa-booking/
├── index.php               # Trang chủ
├── services.php            # Trang danh sách dịch vụ
├── about.php               # Giới thiệu spa
├── booking.php             # Trang form đặt lịch
├── booking_submit.php      # Xử lý submit đặt lịch
├── includes/               # Cấu hình DB, header, footer, hàm dùng chung
├── admin/                  # Khu vực quản trị (dịch vụ, lịch hẹn, tài khoản)
├── user/                   # Khu vực người dùng (profile, lịch sử đặt lịch)
├── assets/                 # CSS, JS, hình ảnh, fonts
├── spa_booking.sql         # File cấu trúc & dữ liệu database
└── noidungbaocao/          # word_baocao, slide_baocao, prompt, link_baocao, ...
```

---

## 🗄️ Cơ sở dữ liệu

Cơ sở dữ liệu `spa_booking.sql` (MySQL) bao gồm một số bảng chính:

* `users` – thông tin người dùng/khách hàng
* `admins` – tài khoản quản trị
* `services` – danh sách dịch vụ spa
* `bookings` – thông tin đặt lịch (ngày, giờ, dịch vụ, khách hàng, trạng thái)

Thiết kế DB theo hướng:

* Dễ mở rộng (thêm dịch vụ, thêm trạng thái, thêm loại tài khoản)
* Đảm bảo quan hệ rõ ràng (khoá chính/khoá ngoại, ràng buộc logic dữ liệu)

---

## ✨ Tính năng chính

### 👥 Phía người dùng (User)

* Đăng ký / đăng nhập tài khoản
* Xem danh sách dịch vụ spa
* Đặt lịch theo dịch vụ, ngày, giờ
* Theo dõi lịch hẹn cá nhân (nếu có triển khai phần quản lý lịch)

### 🛠️ Phía quản trị (Admin)

* Đăng nhập admin
* Quản lý dịch vụ: thêm / sửa / xoá
* Quản lý lịch đặt: duyệt, huỷ, cập nhật trạng thái
* Xem thông tin khách hàng và lịch sử đặt lịch

---

## 🧰 Công nghệ sử dụng

* **Ngôn ngữ:** PHP
* **Cơ sở dữ liệu:** MySQL
* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Môi trường:** XAMPP / LAMP (Apache + MySQL + PHP)

---

## 🚀 Hướng dẫn cài đặt & chạy dự án

1. **Clone hoặc copy project:**

   ```bash
   git clone https://github.com/hoaikiet04/spa-booking.git
   ```

   Hoặc copy thư mục `spa-booking` vào:

   * `htdocs` (XAMPP)
   * hoặc thư mục gốc web server của bạn

2. **Tạo database & import:**

   * Tạo database, ví dụ: `spa_booking`
   * Import file `spa_booking.sql` vào MySQL (phpMyAdmin hoặc CLI)

3. **Cấu hình kết nối DB:**

   * Chỉnh sửa thông tin:

     ```php
     $host = 'localhost';
     $dbname = 'spa_booking';
     $username = 'root';
     $password = '';
     ```

4. **Chạy dự án:**

   * Mở trình duyệt và truy cập:

     ```text
     http://localhost/spa-booking
     ```

   * Khu vực admin (nếu có route riêng, ví dụ):

     ```text
     http://localhost/spa-booking/admin
     ```

---

## 🧪 Kiểm thử & quy trình phát triển

Trong quá trình phát triển, nhóm áp dụng quy trình tối giản:

1. **Phân tích & thiết kế**

   * Vẽ sơ đồ luồng đặt lịch
   * Thiết kế database (ERD, bảng, quan hệ)

2. **Phát triển tính năng**

   * Xây dựng giao diện public (trang chủ, dịch vụ, booking)
   * Xây dựng khu vực admin
   * Tích hợp logic booking, xử lý form, kết nối DB

3. **Kiểm thử (Testing)**

   * Kiểm thử thủ công các luồng chính:

     * Đăng ký/đăng nhập
     * Tạo booking
     * Duyệt/huỷ booking
   * Kiểm tra trường hợp lỗi: thiếu dữ liệu, sai định dạng, trùng lặp,…

4. **Hoàn thiện tài liệu & báo cáo**

   * Viết báo cáo (Word, PDF)
   * Chuẩn bị slide thuyết trình
   * Hoàn thiện README và hướng dẫn cài đặt

---

## 👨‍👩‍👧‍👦 Thành viên & phân công 

* **Phạm Hoài Kiệt – Team Lead / Front-end Developer**

  * Quản lý yêu cầu, phân chia task
  * Thiết kế tổng thể kiến trúc
  * Kiểm thử & đảm bảo chất lượng
  * Tổng hợp báo cáo & thuyết trình

* **Nguyễn Thanh Sơn / Huỳnh Minh Chương – Backend Developer**

* **Trần Thị Mỹ Ngân – Database Designer / Tester**
