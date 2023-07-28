<?php
//when user is pulling search button 
        if(isset($_POST["button"])){
            //check empty form
            if(empty($_POST["name_1"])||empty($_POST["name_2"])||empty($_POST["name_3"])||empty($_POST["name_4"])||empty($_POST["score_1"])||empty($_POST["score_2"])||empty($_POST["score_3"])||empty($_POST["score_4"])){
                $errorMessage = '名前か点数が未入力です。';
            }
            else{
                $o = true;
                //inputting userneme or score are stored in variable.
                $username_1 = $_POST["name_1"];
                $username_2 = $_POST["name_2"];
                $username_3 = $_POST["name_3"];
                $username_4 = $_POST["name_4"];
                $score_1 = $_POST["score_1"];
                $score_2 = $_POST["score_2"];
                $score_3 = $_POST["score_3"];
                $score_4 = $_POST["score_4"];
                $point_1 = ($score_1 + 20000)/1000/$tonpu;
                $point_2 = ($score_2 - 20000)/1000/$tonpu;
                $point_3 = ($score_3 - 40000)/1000/$tonpu;
                $point_4 = ($score_4 - 60000)/1000/$tonpu;

                if($score_1 + $score_2 + $score_3 + $score_4 != 100000){
                    echo '点数が合いません。';
                    return 0;
                }

                try{

                    //make SQL sentence
                    $sql_1 = "SELECT * FROM user_table WHERE user_name = '$username_1';";
                    $sql_2 = "SELECT * FROM user_table WHERE user_name = '$username_2';";
                    $sql_3 = "SELECT * FROM user_table WHERE user_name = '$username_3';";
                    $sql_4 = "SELECT * FROM user_table WHERE user_name = '$username_4';";
                    $sql_results_id = "SELECT count(*) FROM results_table;";

                    //execution SQL
                    $stmt_1 = $pdo -> query($sql_1);
                    $stmt_2 = $pdo -> query($sql_2);
                    $stmt_3 = $pdo -> query($sql_3);
                    $stmt_4 = $pdo -> query($sql_4);
                    $stmt_results_id = $pdo -> query($sql_results_id);

                    //assignment executioning SQL in array
                    $row_1 = $stmt_1 -> fetchAll();
                    $row_2 = $stmt_2 -> fetchAll();
                    $row_3 = $stmt_3 -> fetchAll();
                    $row_4 = $stmt_4 -> fetchAll();
                    $row_results_id = $stmt_results_id -> fetchAll();
                    
                    //count_id is row count at sql_2
                    $count_name_1 = array_column($row_1,'user_name');
                    $count_name_2 = array_column($row_2,'user_name');
                    $count_name_3 = array_column($row_3,'user_name');
                    $count_name_4 = array_column($row_4,'user_name');
                    $count_results_id = $row_results_id[0][0];

                    //user's input data assignment in results_table
                    $sql = "INSERT INTO results_table (score_1 , score_2 , score_3 , score_4 , name_1 , name_2 , name_3 , name_4 , results_id , game_length) VALUES('$score_1','$score_2','$score_3','$score_4','$username_1','$username_2','$username_3','$username_4','$count_results_id' , '$tonpuValue');";
                    $stmt = $pdo -> query($sql);

                    //user's ID assignment in user_id
                    /* MEMO
                        define(
                        "COUNTID",
                        "
                        $sql_user_id = "SELECT count(*) FROM user_table;";
                        $stmt_user_id = $pdo -> query($sql_user_id);
                        $row_user_id = $stmt_user_id -> fetchAll();
                        $count_user_id = $row_user_id[0][0];
                        "
                    ) */
                    if(count($count_name_1) == 0){
                        $sql_user_id = "SELECT count(*) FROM user_table;";
                        $stmt_user_id = $pdo -> query($sql_user_id);
                        $row_user_id = $stmt_user_id -> fetchAll();
                        $count_user_id = $row_user_id[0][0];
                        $sql_add_name = "INSERT INTO user_table (user_name , user_id) VALUES('$username_1','$count_user_id');";
                        $pdo->query($sql_add_name);
                    }
                    if(count($count_name_2) == 0){
                        $sql_user_id = "SELECT count(*) FROM user_table;";
                        $stmt_user_id = $pdo -> query($sql_user_id);
                        $row_user_id = $stmt_user_id -> fetchAll();
                        $count_user_id = $row_user_id[0][0];
                        $sql_add_name = "INSERT INTO user_table (user_name , user_id) VALUES('$username_2','$count_user_id');";
                        $pdo->query($sql_add_name);
                    }
                    if(count($count_name_3) == 0){
                        $sql_user_id = "SELECT count(*) FROM user_table;";
                        $stmt_user_id = $pdo -> query($sql_user_id);
                        $row_user_id = $stmt_user_id -> fetchAll();
                        $count_user_id = $row_user_id[0][0];
                        $sql_add_name = "INSERT INTO user_table (user_name , user_id) VALUES('$username_3','$count_user_id');";
                        $pdo->query($sql_add_name);
                    }
                    if(count($count_name_4) == 0){
                        $sql_user_id = "SELECT count(*) FROM user_table;";
                        $stmt_user_id = $pdo -> query($sql_user_id);
                        $row_user_id = $stmt_user_id -> fetchAll();
                        $count_user_id = $row_user_id[0][0];
                        $sql_add_name = "INSERT INTO user_table (user_name , user_id) VALUES('$username_4','$count_user_id');";
                        $pdo->query($sql_add_name);
                    }


                    //assignment point to user_table
                    $sql_addpoint_1 = "UPDATE user_table SET total_point = total_point + '$point_1' WHERE user_name = '$username_1';";
                    $stmt_addpoint_1 = $pdo -> query($sql_addpoint_1);
                    $sql_addpoint_2 = "UPDATE user_table SET total_point = total_point + '$point_2' WHERE user_name = '$username_2' ;";
                    $stmt_addpoint_2 = $pdo -> query($sql_addpoint_2);
                    $sql_addpoint_3 = "UPDATE user_table SET total_point = total_point + '$point_3' WHERE user_name = '$username_3' ;";
                    $stmt_addpoint_3 = $pdo -> query($sql_addpoint_3);
                    $sql_addpoint_4 = "UPDATE user_table SET total_point = total_point + '$point_4' WHERE user_name = '$username_4' ;";
                    $stmt_addpoint_4 = $pdo -> query($sql_addpoint_4);

                }catch(PDOException $e){
                    $errorMessage = 'error database';
                }

                

            }
        }
        
        if($errorMessage != ""){
            echo '<h1>'.$errorMessage.'<h1>';
            echo '<a href = "/.">再入力先<a>';
            return 1;
        }
?>