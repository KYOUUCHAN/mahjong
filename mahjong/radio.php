<?php
//input number of $tonpu at radio button.
    $tonpu = 0;
    if(isset($_POST['length_of_match'])){
    $tonpuValue = $_POST['length_of_match'];
    if($tonpuValue == 'TONPU'){
      $tonpu = 2;
    }else if($tonpuValue == 'HANTYAN'){
      $tonpu = 1;
    }
}