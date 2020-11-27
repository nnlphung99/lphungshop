<?php
$tendangnhap = $_GET['username'];
$matkhau = $_GET['password'];

if ($tendangnhap == 'admin' && $matkhau == '123456') {
    echo'<h1>Dang nhap thanh cong</h1>';
} else {
    echo'That bai!!';
}
?>