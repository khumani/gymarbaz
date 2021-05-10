<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
  <h2>ABOUT US</h2>
</header>

<section>
  <nav>
    <h1><b>FITNESS FREAK</h1></b>
    <img src="images/la.jpg">
  </nav>
  
  <article>
    <h1>London</h1>
    <p>Fitness Freak was founded in 2020 as a family owned and operated business. Fitness Freak founders didn’t want it to be just another gym equipment retailer - they wanted to be the best in the industry and set their minds to doing so! Since its birth, Gym and Fitness has grown into one of India's largest online fitness equipment retailers having helped over 50,000 customers live longer, happier and healthier lives</p>
    <p>In lockdown,since people were not allowed to go outside we have helped lot of people to keep track to there daily healthy routine</p>


  </article>
</section>



</body>
</html>
