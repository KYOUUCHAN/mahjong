<?php
    require 'set_db.php';
    require 'all_point.php';
    require 'template/header.php';
?>


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
        <input type = "radio" id="sanma" name = "number_of_people" value = "SANMA" required>三麻
        <br>
        <input type = "radio" id="yonma" name = "number_of_people" value = "YONMA">四麻
        <br>
        <br>
        <input type="submit" id="button" name="button" value="送信">
        
    </form>
    <br><br>
    <h3>苫小牧高専麻雀順位</h3>
    <?php
        require 'display_point.php';
    ?>
    <br>
    <br>
    <?php
        require 'hu_table.php';
    ?>
    <br>
    <br>
    <a href = 'test.php'>test<a>
    <?php
        require 'template/fooder.php';
    ?>