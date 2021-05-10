<?php
include_once('dbConnection.php');
if(isset($_POST['submit']))
{

$mob=$_POST['mob'];
$query=mysqli_query($con,"INSERT INTO contact(mob) VALUES ('$mob')");
if($query)
{
	 echo "<script>alert('Thank you !! we will get you back ASAP.');</script>";
	//header('location:user-login.php');
}
}
?>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<script>
function Form() {alert("Thank you !! we will get you back ASAP.");return false;}
</script>
<style>
.containerr {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
.carousel-inner>.item>img {
    line-height: 1;
    height: 90%;
}
.navbarh {
    position: relative;
    width:auto;
    min-height: 50px;
    margin-bottom: 5px;
    border: 1px solid transparent;
}
</style>
</head>
<body>
    <h2> <a href="#"></h2>

<div class="containerr">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="images/poster1.jpg"  style="width:100%"  "height:80vh;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="images/poster2.jpg"  style="width:100%" "height:80vh";>
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="images/poster3.jpg"  style="width:100%" "height:80vh";>
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">ABOUT US</h3>
	</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/7.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<p class="py-5">Fitness Freak was founded in 2020 as a family owned and operated business.
				 Fitness Freak founders didn’t want it to be just another gym equipment retailer 
				- they wanted to be the best in the industry and set their minds to doing so!
				 Since its birth, Gym and Fitness has grown into one of India's largest online
				  fitness equipment retailers having helped over 50,000 customers live longer,
				   happier and healthier lives</p>
				<a href="about.php" class="btn btn-sucess">KNOW MORE </a>
	</div>
	</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">OUR SERVICES</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 ">
			<div class="card" >
				<img class="card-img-top" src="images/services-1.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">PERSONAL TRAINING</h4>
					<p class="card-text">A personal trainer is someone who helps their clients achieve certain fitness goals,
           including but not limited to weight loss, strength training, toning, or overall health management. </p>
					
			</div>
			</div> 	
			</div>

				<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/services-2.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">STRENGTH TRAINING</h4>
					<p class="card-text">Strength training, also called weight training or resistance training,
           is an important part of any fitness routine. It helps make you stronger and also builds muscle endurance.</p>
					<a href="services.php" class="btn btn-primary">EXPLORE MORE
					</a>
			</div>
			</div> 	
			</div>


				<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/services-3.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">BODY BUILDING</h4>
					<p class="card-text">Bodybuilding is the use of progressive 
          resistance exercise to control and develop one's musculature by muscle hypertrophy for aesthetic purposes. </p>

			</div>
			</div> 	
			</div>


		</div>
	</div>
</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">GALLERY</h3>
	</div class="container-fluid">
<div class="row">
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/12.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/20.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/21.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/22.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/23.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/24.jpg " class="img-fluid pb-3">
	</div>

	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/25.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/26.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/27.jpg " class="img-fluid pb-10">
	</div>

 </div>

<div>
	
</div>

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">TRAINERS</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ">
            <div class="card" >
                <img class="card-img-top" src="images/rakesh.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">RAKESH</h4>
                    <p class="card-text"> </p>
                    
            </div>
            </div>  
            </div>

                <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" src="images/ashish.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">RAVI</h4>
                    <p class="card-text"></p>
                    </a>
            </div>
            </div>  
            </div>


                <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" src="images/samer.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">SAMEER</h4>
                    <p class="card-text"> </p>

            </div>
            </div>  
            </div>
            


        </div>
    </div>
</div>
</section>



<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">FIND US HERE</h3>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14009.615533886925!2d77.090288!3d28.617655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefc3fbd9b60b1722!2sFitness%20Freaks!5e0!3m2!1sen!2sin!4v1617554361719!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <div class="py-5">
	<a href="index1.php" class="btn btn-info" role="button">Admin</a>
 
</div>
</div>
</section>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>