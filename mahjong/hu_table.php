<?php
    $sql_hu = "SELECT * FROM hu_table;";
    $stmt_hu = $pdo -> query($sql_hu);
    $rows_hu = $stmt_hu -> fetchAll();
    echo '<h3>符計算(親)</h3>';
    echo '<table border = 1>';
    echo '<tr><th></th><th>1翻</th><th>2翻</th><th>3翻</th><th>4翻</th>';
    for($i = 0 ; $i < 9 ; $i++){
        echo '<tr>';
        for($j = 0 ; $j <5 ; $j++ ){
            echo '<td>'.$rows_hu[$i][$j].'</td>';
        };
        echo '<tr>';
    };
    echo '</table>';
    echo '<br>';
    echo '<h3>符計算(子)</h3>';
    echo '<table border = 1>';
    echo '<tr><th></th><th>1翻</th><th>2翻</th><th>3翻</th><th>4翻</th>';
    for($i = 9 ; $i < 27 ; $i++){
        echo '<tr>';
        for($j = 0 ; $j <5 ; $j++ ){
            echo '<td>'.$rows_hu[$i][$j].'</td>';
        };
        echo '<tr>';
    };
    echo '</table>';