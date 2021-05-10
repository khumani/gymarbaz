<!-- <!DOCTYPE html>
 --><html>
<head>
	<title></title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<style>
.carousel-inner img {
    width: 100%;
    height: 92%;
}
</style>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
 
</head>

<body>
<div >
<nav class="navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FITNESS FREAK</a>
    </div>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FITNESS FREAK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  




    <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="index1.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      
    </ul> -->
     <ul class="nav navbar-nav navbar-right">
      <li><a href="account.php" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<span class="title2"><b>Sign Up</b></span></a>
      <li><a href="account.php" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a></div>


<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Sign in</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>



<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
  </li>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Signin</a></li> -->
    </ul>
    <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<span class="title2"><b>Sign Up</b></span></a>
      
  </div>
  
</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Log in</button>
</div>
</fieldset>
</form>
</div>
</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->   
<!--sign in modal closed-->
<!-- ///////////////////////////////copied/////////////////////////////// -->

<!--sign up modal start-->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content title2">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Sign in</span></h4>
      </div>
      <div class="modal-body">
       <!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">


<fieldset>
<!-- Text input-->
<div class="form-group">
<label class="col-md-12 control-label" for="name"></label>  
<div class="col-md-12">
<input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
  
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-12 control-label" for="gender"></label>
<div class="col-md-12">
  <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
 <option value="Male">Select Gender</option>
<option value="M">Male</option>
<option value="F">Female</option> </select>
</div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
<label class="col-md-12 control-label" for="name"></label>  
<div class="col-md-12">
<input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
  
</div>
</div> -->


<!-- Text input-->
<div class="form-group">
<label class="col-md-12 control-label title1" for="email"></label>
<div class="col-md-12">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
  
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-12 control-label" for="mob"></label>  
<div class="col-md-12">
<input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
  
</div>
</div>


<!-- Text input-->
<div class="form-group">
<label class="col-md-12 control-label" for="password"></label>
<div class="col-md-12">
  <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
  
</div>
</div>

<div class="form-group">
<label class="col-md-12control-label" for="cpassword"></label>
<div class="col-md-12">
  <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
  
</div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <input  type="submit" class="sub" value="Sign Up" class="btn btn-default btn btn-primary btn-lg"/>
</div>
</fieldset>
</form>
</div>
</div><!-- /.modal1-content -->
  </div><!-- /.modal1-dialog -->
</div><!-- /.modal1 -->
<!--sign up modal closed-->



</div><!--header row closed-->
</div>

<!-- //////////////////////////////////////////////////////////////////////////// -->


</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators"> -->
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
  <!-- </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/wall.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>WELCOME TO OUR FITNESS FREAK</h5>
        <p>Never GiveUP.</p>
        <a href="#" class="btn btn-success btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><span  aria-hidden="true"></span>&nbsp;<span class="title1"><b>Get Sarted</b></span></a></div>

        </div>
    <!-- </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div> -->
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>
<!-- 
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="images/6.jpg"  style="width:100%" "height:80vh;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="images/2.jpg"  style="width:100%" "height:80vh";>
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="images/5.jpg"  style="width:100%" "height:80vh";>
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
			<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/services-1.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">PERSONAL TRAINING</h4>
					<p class="card-text">gggvbhjnmkl </p>
					<a href="#" class="btn btn-primary">EXPLORE MORE
					</a>
			</div>
			</div> 	
			</div>

				<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/services-2.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">STRENGTH TRAINING</h4>
					<p class="card-text">gggvbhjnmkl </p>
					<a href="#" class="btn btn-primary">EXPLORE MORE
					</a>
			</div>
			</div> 	
			</div>


				<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/services-3.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">BODY BUILDING</h4>
					<p class="card-text">gggvbhjnmkl </p>
					<a href="#" class="btn btn-primary">EXPLORE MORE
					</a>
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
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>

	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-3">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<img src="images/img_1.jpg " class="img-fluid pb-10">
	</div>

 </div>

<div>
	
</div>

</section>


<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">OUR PACKAGE</h3>
	</div>

<section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Class drop-in</h3>
                        <div class="pi-price">
                            <h2>$ 39.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>12 Month unlimited</h3>
                        <div class="pi-price">
                            <h2>$ 99.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>6 Month unlimited</h3>
                        <div class="pi-price">
                            <h2>$ 59.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
		<h3 class="text-center">CONTACT US</h3>

<div class="container">
  
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
<div>
</section>
</section> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>