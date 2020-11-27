<?php
$tendangnhap = $_POST['username'];
$matkhau = $_POST['password'];
$hoten = $_POST['fullname'];
?>
<h1>Thong tin dang ky</h1>
<ul>
    <li>Ten la: <?php echo $tendangnhap;?></li>
    <li>Mat khau la: <?php echo $matkhau;?></li>
    <li>Ho ten la: <?php echo $hoten;?></li>
</ul>