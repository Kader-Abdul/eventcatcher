<?php 
//echo $userAgent = $_SERVER['HTTP_USER_AGENT'];

echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);