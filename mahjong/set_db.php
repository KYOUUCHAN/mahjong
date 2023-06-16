<?php
    //define database`s information
    $db['host'] = 'mysql1.php.xdomain.ne.jp';
    $db['dbname'] = 'kyochan2_mahjong';
    $db['pass'] = '565mahjong';
    $db['user'] = 'kyochan2_www';
    
    //make DSN
    $dsn = sprintf('mysql:host=%s; dbname=%s; charset =utf8', $db['host'],$db['dbname']);

    //initialization error massage
    $errorMessage = "";

    //initialization flag
    $o = false;
?>