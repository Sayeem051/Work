<?php

    if(strrpos($_SERVER['REQUEST_URI'], "PHPBasics.php")){
        ;
    }
    elseif(strrpos($_SERVER['REQUEST_URI'], "date")){
        $title="Date Processing Page";
        require "header.php";
    }
        //date
    date_default_timezone_set("Asia/Dhaka");
    //print date("m/d/Y h:i:sA", time());

    $timestamp= mktime(18, 45, 47, 6, 5, 1997);
    //print date("m-d-Y h:i:sA", $timestamp);

    $newtime= strtotime("now");
    $edited_newtime= date("m/d/y h:i:sA", $newtime);
    if(strrpos($_SERVER['REQUEST_URI'], "date.php"))
        echo "this is where date is processed";
?>