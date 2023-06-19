<?php 
    require_once 'radio.php' ;
    require 'set_db.php' ;
    require_once 'make_table.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css">
    <title>苫小牧高専麻雀成績</title>
</head>
<body>
    <h3>苫小牧高専麻雀順位</h3>
    <?php
        require 'display_point.php';
    ?>
    <?php
        if($o == false){
            echo "error";
        }
    ?>

</body>
</html>