<?php
    require 'set_db.php';
    if(isset($_POST['button'])){
        //check empty form
        if(empty($_POST['table_name'])){
            $errorMessage = '記録名が未入力です。';
        }
        else{
            $o = true;

            try{
                //if new table name and exesting table name overlap , return to test.php
                //$sql_overlap_table = "";
                
                //formd data reassignment becouse "" doesn't use mysql centense.
                $new_table_name = $_POST['table_name'];
                $visibility = $_POST['visibility'];
                $password = $_POST['password'];

                //make SQL sentence
                //if these centences put together , it happen error.
                $sql_new_table = "CREATE TABLE `kyochan2_mahjong`.`$new_table_name`
                                    (
                                        visibility tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                        pass tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci
                                    ) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
                $sql_yonma_resuluts = "CREATE TABLE `kyochan2_mahjong`.`$new_table_name-yonma-resuluts`
                                        (
                                            score_1 mediumint,
                                            score_2 mediumint,
                                            score_3 mediumint,
                                            score_4 mediumint,
                                            name_1 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_2 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_3 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_4 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            date_and_time datetime,
                                            game_length tinytext
                                        ) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
                $sql_sanma_resuluts = "CREATE TABLE `kyochan2_mahjong`.`$new_table_name-sanma-resuluts`
                                        (
                                            score_1 mediumint,
                                            score_2 mediumint,
                                            score_3 mediumint,
                                            score_4 mediumint,
                                            name_1 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_2 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_3 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            name_4 tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                            date_and_time datetime,
                                            game_length tinytext
                                        ) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
                $sql_yonma_users = "CREATE TABLE `kyochan2_mahjong`.`$new_table_name-yonma-users`
                                    (
                                        user_name tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                        highest_score mediumint,
                                        total_point double
                                    ) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
                $sql_sanma_users = "CREATE TABLE `kyochan2_mahjong`.`$new_table_name-sanma-users`
                                    (
                                        user_name tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
                                        highest_score mediumint,
                                        total_point double
                                    ) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";
                

                //execution SQL
                $stmt_new_table = $pdo -> query($sql_new_table);
                $stmt_yonma_resuluts = $pdo -> query($sql_yonma_resuluts);
                $stmt_sanma_resulutse = $pdo -> query($sql_sanma_resuluts);
                $stmt_yonma_users = $pdo -> query($sql_yonma_users);
                $stmt_sanma_users = $pdo -> query($sql_sanma_users);

                //setup data input in new table
                $sql_setup = "INSERT INTO $new_table_name(visibility , pass) VALUES('$visibility' , '$password');";
                $stmt = $pdo -> query($sql_setup);
                

            }catch(PDOException $e){
                $errorMessage = 'error database';
            }
        }
    }
    
    if($errorMessage != ""){
        /* sql_drop = "DROP TABLE `$new_table_name`;";
        $pdo -> query($sql_drop);
        $sql_drop = "DROP TABLE `$new_table_name-yonma-resuluts`;";
        $pdo -> query($sql_drop);
        $sql_drop = "DROP TABLE `$new_table_name-sanma-resuluts` ;";
        $pdo -> query($sql_drop);
        $sql_drop = "DROP TABLE `$new_table_name-yonma-users` ;";
        $pdo -> query($sql_drop);
        $sql_drop = "DROP TABLE `$new_table_name-sanma-users`;";
        $pdo -> query($sql_drop); */
        exit('<h1>'.$errorMessage.'<h1><br><a href = "test.php">再入力先<a>');
    }else{
        header('location: http://kyochan2.php.xdomain.jp/test.php');
    }
    