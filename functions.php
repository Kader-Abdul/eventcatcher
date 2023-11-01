<?php
include('konfig.php');
include('./phpqrcode/qrlib.php');


if(isset($_POST['add_event'])){

    $event_name=mysqli_real_escape_string($conn1,$_POST['event_name']);
    $event_date=$_POST['event_date'];
    $event_time=$_POST['event_time'];
    $event_location=mysqli_real_escape_string($conn1,$_POST['event_location']);
    $event_short_description=mysqli_real_escape_string($conn1,$_POST['event_short_description']);
    $event_long_description=mysqli_real_escape_string($conn1,$_POST['event_long_description']);



    $sql_add="insert into event_table(event_name,event_short,event_long,event_location,event_date,event_time,created_by)values('$event_name','$event_short_description','$event_long_description','$event_location','$event_date','$event_time','Admin')";
    $run_qry=$conn1->query($sql_add);


$path = 'assets/images/';
$filename="Event".date("Ymdhis");
$file = $filename.".png";

$text = "https://google.com/eventcatcher/".$filename;
QRcode::png($text);
// $ecc stores error correction capability('L')
$ecc = 'L';
$pixel_Size = 10;
$frame_Size = 10;

// Generates QR Code and Stores it in directory given
QRcode::png($text, $file, $ecc, $pixel_Size, $frame_size);

    if($run_qry){
       // header('Location:index.php?alert=added successfully');
    }

}






