<?php
    try
    {
        $pdo = new //PDO('mysql:host=59.18.118.179;dbname=2017_ROOT;charset=utf8','root','fnxmwlwhsrkswl'); 
        PDO('mysql:host=127.0.0.1;dbname=2017_ROOT;charset=utf8','root',''); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    } 
    catch (Exception $ex) 
    {
        echo $ex->getMessage();
        return false;
    }

?>