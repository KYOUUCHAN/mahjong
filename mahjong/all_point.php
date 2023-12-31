<?php
    try{
        //connect MySQL to use POD
        $pdo = new PDO($dsn, $db['user'],$db['pass'],array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        

        //YONMA
        //make ranking table
        $sql_rank_table = "SELECT * FROM user_table ORDER BY total_point DESC;";
        $stmt_rank_table = $pdo -> query($sql_rank_table);
        $row_rank_table = $stmt_rank_table -> fetchAll();
        $count_table_name = array_column($row_rank_table , 'user_name');
        $count_table_point = array_column($row_rank_table , 'total_point');

        //SANMA
        //make ranking table
        $sql_rank_table_sanma = "SELECT * FROM sanma_user_table ORDER BY total_point DESC;";
        $stmt_rank_table_sanma = $pdo -> query($sql_rank_table_sanma);
        $row_rank_table_sanma = $stmt_rank_table_sanma -> fetchAll();
        $count_table_name_sanma = array_column($row_rank_table_sanma , 'user_name');
        $count_table_point_sanma = array_column($row_rank_table_sanma , 'total_point');
        }catch(PDOException $e){
            $errorMessage = 'error database';
        }
    ?>