<?php include('set_db.php') ?>
<?php include('make_table.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <title>苫小牧高専麻雀成績</title>
</head>
<body>
    <h3>苫小牧高専麻雀順位<h3>
    <table border = "1">
    <tr><th>順位</th><th>名前</th><th>点数</th></tr>
    <?php
        for($i = 0 ; $i < count($count_table_name) ; $i++){
            $rank += 1;
            echo '<tr><th>'.$rank.'位</td>';
            echo '<td>'.$count_table_name[$i].' プロ</td>';
            echo '<td>'.$count_table_point[$i].' pt</td></tr>';
        };
        echo '</table>';
        //for($i = 0 ; $i < )
        if($o == false){

            echo "error";
        }
    ?>

</body>
</html>