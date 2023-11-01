

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EventCatcher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event_list.php">View</a>
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
   Create Event
 </text>
 </svg></h1>

<form method="POST" action="functions.php">
<div class="row">
<div class="col-md-3">
<label>Event Name</label>
</div>
<div class="col-md-9">
<input type="text" name="event_name" id="event_name" class="form-control" />
</div>
</div>


<div class="row mt-2">
<div class="col-md-3">
<label>Event Date/Time</label>
</div>
<div class="col-md-4">
<input type="date" name="event_date" id="event_date" class="form-control"  min="<?php echo date("Y-m-d"); ?>"  />
</div>
<div class="col-md-5">
<input type="time" name="event_time" id="event_time" class="form-control"  />
</div>
</div>



<div class="row mt-2">
<div class="col-md-3">
<label>Location</label>
</div>
<div class="col-md-9">
<input type="text" name="event_location" id="event_location" class="form-control" />
</div>
</div>



<div class="row mt-2">
<div class="col-md-3">
<label>Short Description</label>
</div>
<div class="col-md-9">
<input type="text"  name="event_short_description" id="event_short_description" class="form-control" rows="5" cols="5" />
</div>
</div>


<div class="row mt-2">
<div class="col-md-3">
<label>Long Description</label>
</div>
<div class="col-md-9">
<textarea class="form-control" name="event_long_description" id="event_long_description"></textarea>
</div>
</div>



<div class="row mt-2">
<div class="col-md-3">

</div>
<div class="col-md-9">
<button type="submit" name="add_event" id="add_event" value="add_event" class="btn btn-info text-light">Create</button>
</div>
</div>

</form>
</div>









</body>
</html>
