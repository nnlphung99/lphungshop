<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them loai san pham</title>
</head>
<body>
    <h1>Them loai san pham</h1>
    <form name="themsp" id="themsp" method="POST" action="">
        Ten: <input type="text" name="lsp_ten" id="lsp_ten" > <br>
        Mo ta: <textarea name="lsp_mota" id="lsp_mota" cols="30" rows="10"></textarea> <br>
        <button name="btnsave" id="btnsave">Luu</button>   
    </form>

    <?php
    if(isset($_POST['btnsave'])) {

        include_once(__DIR__.'/dbconnect.php');

        $lsp_ten = $_POST['lsp_ten'];
        $lsp_mota = $_POST['lsp_mota'];
        $caulenh = "INSERT INTO loaisanpham (lsp_ten, lsp_mota) VALUES (N'$lsp_ten', N'$lsp_mota');";

        mysqli_query($conn, $caulenh);

    }

    ?>
</body>
</html>