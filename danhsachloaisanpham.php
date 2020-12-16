<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach loai san pham</title>
</head>
<body>
    <h1>Danh sach loai san pham</h1>
    <?php 
    include_once(__DIR__.'/dbconnect.php');
    
    $caulenh = "INSERT INTO loaisanpham (lsp_ten, lsp_mota) VALUES (N'ten moi 1', N'mo ta moi 1');";

    mysqli_query($conn, $caulenh);

    echo 'Da thuc thi xong';
    ?>
</body>
</html>