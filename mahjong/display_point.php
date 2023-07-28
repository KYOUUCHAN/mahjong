<?php
        echo '<h4>'."四麻".'<h4>';
        echo '<table border = "1">';
        echo '<tr><th>'."順位".'</th><th>'."名前".'</th><th>'."点数".'</th></tr>';
        for($i = 0 , $rank = 0; $i < count($count_table_name) ; $i++){
            //add 1 to rank because table is wrote row of RANK.
            $rank += 1;
            echo '<tr><th>'.$rank.'位</td>';
            echo '<td>'.$count_table_name[$i].' プロ</td>';
            echo '<td>'.$count_table_point[$i].' pt</td></tr>';
        };
        echo '</table>';

        echo '<h4>'."三麻".'<h4>';
        echo '<table border = "1">';
        echo '<tr><th>'."順位".'</th><th>'."名前".'</th><th>'."点数".'</th></tr>';
        for($i = 0 , $rank = 0; $i < count($count_table_name_sanma) ; $i++){
            $rank += 1;
            echo '<tr><th>'.$rank.'位</td>';
            echo '<td>'.$count_table_name_sanma[$i].' プロ</td>';
            echo '<td>'.$count_table_point_sanma[$i].' pt</td></tr>';
        };
        echo '</table>';
    ?>