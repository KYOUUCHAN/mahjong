<?php
    include 'set_db.php';
    include 'all_point.php';
?>

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
    <h1 class="title">麻雀</h1>
    <h3>試合結果入力フォーム<h3>
    <form action="table.php" method="POST">
        <!-- user name and score  write this form.-->
        <p>1位</p>
        名前:<input type="text" id="name_1" name="name_1" placeholder="フルネームを入力" value="<?php if(!empty($_POST["name_1"])){echo htmlspecialchars($_POST["name_1"],ENT_QUOTES);} ?>" />
        <br>
        <!--"type" is type of input text , 
            "id" and "name" is using SQL or PHP sentence , 
            "placeholder" is output text when there is not text in text box ,
            "value" is output username if user input username alredy-->
        点数:<input type="number" name="score_1" placeholder="点数を入力" />

        <p>2位</p>
        名前:<input type="text" id="name_2" name="name_2" placeholder="フルネームを入力" value="<?php if(!empty($_POST["name_2"])){echo htmlspecialchars($_POST["name_2"],ENT_QUOTES);} ?>" />
        <br>
        点数:<input type="number" name="score_2" placeholder="点数を入力" />
    
        <p>3位</p>
        名前:<input type="text" id="name_3" name="name_3" placeholder="フルネームを入力" value="<?php if(!empty($_POST["name_3"])){echo htmlspecialchars($_POST["name_3"],ENT_QUOTES);} ?>" />
        <br>
        点数:<input type="number" name="score_3" placeholder="点数を入力" />
    
        <p>4位</p>
        名前:<input type="text" id="name_4" name="name_4" placeholder="フルネームを入力" value="<?php if(!empty($_POST["name_4"])){echo htmlspecialchars($_POST["name_4"],ENT_QUOTES);} ?>" />
        <br>
        点数:<input type="number" name="score_4" placeholder="点数を入力" />
        <br>
        <br>
        <input type = "radio" id="tonpu" name = "length_of_match" value = "TONPU" required>東風
        <br>
        <input type = "radio" id="hantyan" name = "length_of_match" value = "HANTYAN">半荘
        <br>
        <br>
        <input type="submit" id="button" name="button">
        
        <?php
            //if length of match is 半荘 , '$tonpu' is assignmented '1'.
            //if length of match is 東風 , '$tonpu' is assignmented '2'.
            $tonpu = 0;
        ?>

    </form>
    <br><br>
    <h3>苫小牧高専麻雀順位</h3>
    <?php
        include 'display_point.php';
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>