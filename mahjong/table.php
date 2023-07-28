<?php 
    require 'radio.php' ;
    require 'set_db.php' ;
    if($_POST['number_of_people'] == YONMA){
        require_once 'make_table.php'; 
    }
    else if($_POST['number_of_people'] == SANMA){
        require_once 'make_table_sanma.php'; 
    }
    header('location: http://kyochan2.php.xdomain.jp/index.php');
    exit("error");
?>