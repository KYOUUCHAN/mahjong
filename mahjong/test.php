<?php
    require 'template/header.php';
?>
    <form action="start_recode.php" method="POST">
        <!-- user name and visibility write this form.-->
        <!--"type" is type of input text , 
            "id" and "name" is using SQL or PHP sentence , 
            "placeholder" is output text when there is not text in text box ,
            "value" is output username if user input username alredy-->
        記録名:<input type="text" id="table_name" name="table_name" placeholder="任意の名前を入力" value="<?php if(!empty($_POST["table_name"])){echo htmlspecialchars($_POST["table_name"],ENT_QUOTES);} ?>" />
        <br>
        <p>公開設定<p>
        <input type = "radio" id="private" name = "visibility" value = "PRIVATE" required>非公開
        <br>
        <input type = "radio" id="pubric" name = "visibility" value = "PUBRIC">公開
        <br>
        <br>
        パスワード(任意):<input type = "text" id = "password" name = "password" placeholder = "任意の文字,実数を入力" value="<?php if(!empty($_POST["password"])){echo htmlspecialchars($_POST["password"],ENT_QUOTES);} ?>">
        <br>
        <br>
        <!-- "type = datetime-local" is formed local date and time -->
        終了日時(任意):<input type = "datetime-local" name = "end_datetime">
        <br>
        <input type="submit" id="button" name="button" value="送信" >
        
    </form>
<?php
    require 'template/fooder.php';
?>