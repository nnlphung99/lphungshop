<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sua loai san pham</title>
</head>
<body>
    <h1>Sua loai san pham</h1>
    <form name="themsp" id="themsp" method="POST" action="">
        Ma: <input type="text" name="lsp_ma" id="lsp_ma" > <br>
        Ten: <input type="text" name="lsp_ten" id="lsp_ten" > <br>
        Mo ta: <textarea name="lsp_mota" id="lsp_mota" cols="30" rows="10"></textarea> <br>
        <button name="btnsave" id="btnsave">Luu</button>   
    </form>

    <?php
    if(isset($_POST['btnsave'])) {

        include_once(__DIR__.'/dbconnect.php');
        
        $lsp_ma = $_POST['lsp_ma'];
        $lsp_ten = $_POST['lsp_ten'];
        $lsp_mota = $_POST['lsp_mota'];
        $caulenh = <<<EOT
        UPDATE loaisanpham
	    SET
		    lsp_ten='$lsp_ten',
		    lsp_mota='$lsp_mota'
	    WHERE lsp_ma=$lsp_ma;
EOT;

        mysqli_query($conn, $caulenh);

    }

    ?>
</body>
</html>