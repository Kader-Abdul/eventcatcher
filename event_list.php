<?php

include('konfig.php');


$sql_list="select *,AES_ENCRYPT(ids,'Developers') AS hash1,SUBSTRING_INDEX(event_time,'.',1) as etime from event_table";
$qry_list=$conn1->query($sql_list);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>EventCatcher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/datatable.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/datatable.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }




.patterns2 {
  height: 100vh;
}



svg text {
  font-family: Lora;
  letter-spacing: 10px;
  stroke:  black;
  font-size: 60px;
  stroke-width: 2;
  animation: textAnimate 5s infinite alternate;

}

@keyframes textAnimate {
  0% {
    stroke-dasharray: 0 50%;
    stroke-dashoffset:  20%;
    fill:hsl(189, 68%, 75%)

  }

  100% {
    stroke-dasharray: 50% 0;
    stroke-dashoffstet: -20%;
    fill: hsla(189, 68%, 75%,0%)
  }

}



  </style>
</head>
<body>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li>
       <a class="navbar-brand" href="http://localhost/eventcatcher/">
      <img src="assets/images/event_1.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
    </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="event_list.php">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!--<div class="p-5 bg-success text-white text-center">
  <h1>EventCatcher</h1>

</div>
-->


<div class="container">


<h1 class="text-center m-3" style="color:green">

  <svg width="100%" height="100%">
    <defs>
      <pattern id="polka-dots-one" x="0" y="0" width="100" height="100"
               patternUnits="userSpaceOnUse">
      </pattern>


    </defs>

    <rect x="0" y="0" width="100%" height="100%" fill="url(#polka-dots-one)"> </rect>



 <text x="50%" y="60%"  text-anchor="middle"   >
   All Events
 </text>
 </svg></h1>

<div class="row-md-2">
</div>
<div class="row-md-10">

<table id="etable" class="table">
  <thead>
    <th>S.No</th>
    <th>Event Name</th>
    <th>Event Date</th>
    <th>Event Time</th>
    <th>View</th>
    <th>Delete</th>

  </thead>

  <tbody>
    <?php
    $mo=1;
    while($row=$qry_list->fetch_assoc()){ ?>
    <tr>
      <td><?php echo $mo++; ?></td>
      <td><?php echo $row['event_name']; ?></td>
      <td><?php echo $row['event_date']; ?></td>
      <td><?php echo $row['etime']; ?></td>
      <td><button type="submit" name="view_qr" class="btn btn-info" id="view_qr" class="form-control" value="<?php echo $row['hash1']; ?>"><a href="functions.php?view_qr=<?php echo $row['hash1']; ?>" class=" text-white">View</a></button></td>

      <td><button type="submit" name="del_event" class="btn btn-danger" id="del_event" class="form-control" value="<?php echo $row['hash1']; ?>"><a href="functions.php?del_id=<?php echo $row['hash1']; ?>" class=" text-white">Delete</a></button></td>

    </tr>
    <?php } ?>
  </tbody>
</table>





</div>
</div>

</body>
<script>
  let table = new DataTable('#etable', {

});
</script>
</html>
