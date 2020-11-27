<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dang nhap</title>
</head>
<body>
    <form name="formDangNhap" id="formDangNhap" method="GET" action="dang-nhap.php">
    Ten dang nhap: <input type="text" name="username" id="username"> <br/>
    Mat khau: <input type="text" name="password" id="password"/> <br/>
    <input type="submit" name="btnDangNhap" value="Dang Nhap"/>
    </form>

    <?php
    if (isset ($_GET['btnDangNhap'])) {
        $tendangnhap = $_GET['username'];
        $matkhau = $_GET['password'];
        
        if ($tendangnhap == 'admin' && $matkhau == '123456') {
            echo'<h1>Dang nhap thanh cong</h1>';
        } else {
            echo'That bai!!';
        }
    }
    ?>
</body>
</html>