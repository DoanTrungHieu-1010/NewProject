<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
 <link rel="stylesheet" href="../view/css/style.css">
</head>
<style>
    .menu {
  background-color: #333; /* Màu nền */
  padding: 10px; /* Khoảng cách nội dung bên trong */
  border-radius: 5px; /* Làm tròn góc */
  box-shadow: 0 2px 5px rgba(0,0,0,0.3); /* Tạo bóng */
  .menu ul {
  list-style: none; /* Ẩn dấu đầu dòng */
  padding: 0; /* Xóa khoảng cách mặc định */
}}

.menu li {
  display: inline-block; /* Hiển thị các item ngang hàng */
  margin: 0 10px; /* Khoảng cách giữa các item */
}

.menu a {
  color: #fff; /* Màu chữ */
  text-decoration: none; /* Ẩn gạch chân */
  padding: 5px 10px; /* Khoảng cách bên trong link */
}

.menu a:hover {
  background-color: #555; /* Màu nền khi hover */
}
.menu li.active a {
  background-color: #007bff; /* Màu nền khi active */
  color: #fff;
}

</style>
<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Hàng hóa</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
            </ul>
        </div>