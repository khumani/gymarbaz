<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>GALLERY</h2>

<div class="row">
  <div class="column" style="background-color:black;">
   <img src="images/ww.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/qq.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/rr.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/uu.jpg " class="img-fluid pb-3">
  </div>
  
  <div class="column" style="background-color:black;">
    <img src="images/ee.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/tt.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/aa.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <<img src="images/ii.jpg " class="img-fluid pb-3">
  </div>


  <div class="column" style="background-color:black;">
    <img src="images/ss.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/2.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/5.jpg " class="img-fluid pb-3">
  </div>
  <div class="column" style="background-color:black;">
    <img src="images/dd.jpg " class="img-fluid pb-3">
  </div>
</div>

</body>
</html>
