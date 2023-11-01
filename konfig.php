<?php
$servername="localhost";
$username="root";
$password="";
$db="event_catcher";

$conn1=new mysqli($servername,$username,$password,$db);



if(!$conn1){
	echo "Try Again";
}




