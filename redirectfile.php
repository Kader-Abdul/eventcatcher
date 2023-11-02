<?php 
//echo $userAgent = $_SERVER['HTTP_USER_AGENT'];

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");


if($iPad||$iPhone||$iPod){
        echo 'ios';
    }else if($Android){
        header('https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MDhwcHBjNjJycnNoYmQ3N3Ftcms0NGtycnQga2FkZXJzb2ZmaWNpYWxAbQ&tmsrc=kadersofficial%40gmail.com');
    }else{
        echo 'pc';
    }