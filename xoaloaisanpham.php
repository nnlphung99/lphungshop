<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xoa loai san pham</title>
</head>
<body>
    <h1>Xoa loai san pham</h1>
    <form name="themsp" id="themsp" method="POST" action="">
        Ma: <input type="text" name="lsp_ma" id="lsp_ma" > <br>
        <button name="btnsave" id="btnsave">Luu</button>   
    </form>

    <?php
    if(isset($_POST['btnsave'])) {

        include_once(__DIR__.'/dbconnect.php');
        
        $lsp_ma = $_POST['lsp_ma'];

        $caulenh = <<<EOT
        DELETE FROM loaisanpham WHERE lsp_ma=$lsp_ma;
EOT;

        mysqli_query($conn,$caulenh);

    }

    ?>
</body>
</html>