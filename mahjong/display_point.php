<?php
        echo '<table border = "1">';
        echo '<tr><th>'.順位.'</th><th>'.名前.'</th><th>'.点数.'</th></tr>';
        for($i = 0 ; $i < count($count_table_name) ; $i++){
            $rank += 1;
            echo '<tr><th>'.$rank.'位</td>';
            echo '<td>'.$count_table_name[$i].' プロ</td>';
            echo '<td>'.$count_table_point[$i].' pt</td></tr>';
        };
        echo '</table>';
    ?>