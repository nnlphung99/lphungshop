<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo'<h1 style="color: red;">Xin Chao</h1>';
        $hoten='LP';
        echo'Ten:' . $hoten .'!!';

    ?>
    <div>
        <?php echo $hoten ?>
        <?= $hoten ?>

    </div>

    <a href="pages/about.php">Gioi thieu</a><br>
    <a href="pages/contact.php">Lien he</a>
    
</body>
</html>
