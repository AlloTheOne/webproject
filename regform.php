<?php
    session_start();
    include 'register.php'
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login | Register</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=DotGothic16&display=swap');

html {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  font-family: 'Monument Extended', Arial, Helvetica, sans-serif;
}

/* Text in The front image */
header h1 {
  /*font-family: 'DotGothic16';
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);*/
  margin: 0;
}

/* The navigation bar
the container of it all */
.navbar {
  /*overflow: hidden;*/
  /* background-color: rgba(0, 0, 0, 0);*/
  position: fixed; /* Set the navbar to fixed position */
  transition: all 0.3s ease-in-out;
  top: 0; /* Position the navbar at the top of the page */
  text-align: center;
  width: 100%; /* Full width */
  z-index: 999;
  align-content: center;
}
/* when we scroll down  */
.navbar.active {
  background-color: white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 999;
}

/* text AKA Links inside the navbar in general */
.navbar a {
  font-family: 'DotGothic16';
  /*loat: center !important;*/
  display: inline-block;
  color: white;
  text-align: center;
  padding: 16px 20px;
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}

/* the text AKA links when we scroll down  */
.navbar.active a {
  color: black;
  /*padding: 16px 20px;*/
  font-family: 'Monument Extended', Arial, Helvetica, sans-serif;
}

/* the navbar head level1 */
.navbar > ul {
  magin: 10px;
}
.navbar > ul > li {
  list-style-type: none;
  display: inline-block;
  float: center;
  /*position: relative;*/
}

/* the links inside the navbar */
.navbar ul > li > ul > li > a {
  /*padding: 12px 16px;*/
  color: rgba(255, 255, 255, 0.6);
  background: orange;
  font-family: 'Monument Extended', Arial, Helvetica, sans-serif;
}

.navbar ul > li > ul {
  list-style-type: none;
  display: none;
  position: absolute;
  background-color: #fff;
  /*min-width: 200px;*/
  top: 50px;
  margin: 0;
  padding: 0;
  z-index: -99999;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}
.navbar > ul > li:hover > ul {
  display: block;
  bottom: 0;
}

.navbar > ul > li:hover > ul > li {
  display: block;
  background-color: darkgrey;
  color: white;
  bottom: 0;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}
.navbar ul li ul li {
  float: none;
}

.navbar ul > li > ul > li > a:hover {
  color: white;
  background-color: grey;
  margin: 0;
}

#ignorant:hover {
  /*min-width: 180px;*/
  color: white;
  background-color: grey;
}
/* Change background on mouse-over */
.navbar .level1 > a:hover {
  background: rgba(0, 0, 0, 0);
  color: yellow;
}

.login {
  height: 25px;
  width: 25px;
  /*float: right;*/
  margin-left: 60px;
  
}

.navbar img{
  height: 25px;
  width: 25px;
  /*float: right;*/
  /*display: inline-block;*/
  
}
.navbar #fimg{
  display: none;
}
/*
#secimg {
  display: none;
}*/
.navbar.active #secimg{
  display: inline;
}




/* Main content

The body stuff only!!
 */
.main {
  margin-top: 0px !important; /* Add a top margin to avoid content overlay */
  align-content: center;
  padding: 50px 2px 10px 2px;
}

body {
  color: white;
  margin: 0;
  padding: 0;
  /* perspective: 1px; */
  transform-style: preserve-3d;
  height: 100%;
  width: 100%;
  overflow-y: scroll;
  /* so there's no right or left scrolling */
  overflow-x: hidden;
}
body{
  color: white;
  /* The image used 
  background-image: url(photos/earth/Earth1.jpg);
*/
  /* Set a specific height */
  min-height: 90vh;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.firstpart {
  background-color: grey;
  text-align: left;
  padding: 10px 0 0 0;
}
.items > a > img {
  margin: 20px 20px 0px 20px;
  padding: 20px 10px 0 10px;
  width: 350px;
  height: 500px;
}
.items > a > h3,
.items > a > p {
  text-decoration: none;
  color: black;
  margin: 0 0 0 30px;
}
.items {
  /*  width: 450px;
  height: 600px; */
  color: black;
  padding: 5px;
  margin: 5px;
  display: inline-block;
}
.items > a > h3 {
  width: 300px;
}
.items > a > h4 {
  text-decoration: none;
  color: black;
  margin: 2px 0 0 30px;
  width: 200px;
}
.items > a {
  display: inline-block;
  margin: 0 0 0 40px;
}
.items > a:hover {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  background: white;
}
.product > img > h3 > h4:hover {
  color: grey;
}
.regform{
  font-family: 'DotGothic16';
  border-radius: 25px;
    background-color: rgba(0,0,0,0.5);
    width:300px;
    color:white;
    padding:40px 50px 30px;
    margin: 30px auto;
    margin-top:10px;
   top:1000px;
   margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.regform ::placeholder{
  color: white;
}
header .back{
    index-z: -999;
}

input[type=text],input[type=password] {
  border: none;
  border-bottom: 2px solid white;
  background-color: rgba(255,255,255,0);
  color: White;
  width: 200px;
}
input[type=submit]{
  /*background-color: #e7e7e7;*/
  background-color:rgba(255,255,255,0);
  color: white;
  border:2px solid white;
  padding: 15px 32px;
  font-size: 16px;
  border-radius: 10px;
  transition-duration: 0.4s;
  cursor:allowed;
}
input[type=submit]:focus{
  background-color: white;
  color:grey;
}
input[type=submit]:hover{
  background-color: white;
  color:grey;
}

    </style>
        </head>
        <body class"back" style="background-image: url(photos/modern-neon-sign.jpg)">

<!-- menu -->
<div class="navbar">
<!-- starting of the list -->
<ul class="clearfix" style="
    margin-bottom: 0px;
    margin-top: 0px;">
   <li class="level1">
        <a href="index.php">Home</a>
 </li>

 <li class="level1">
  <a href="#contact">New</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"> <a href="">link</a></li>
    <li class="level-2"><a href="">link</a></li>
  </ul>
 </li>
 <li class="level1">
  <a href="#news">Shop By Collection</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="">Street Wear Collection</a></li>
    <li class="level-2"><a id="ignorant" href="" >&nbsp; &nbsp;&nbsp; Spring Collection&nbsp;&nbsp;&nbsp;</a></li>
  </ul>
 </li>
 <li class="level1">
  <a href="#contact">Shop By Category</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="">link</a></li>
    <li class="level-2"><a href="">link</a></li>
  </ul>
 </li>
  <li class="level1">
  <a href="#contact">Why Us?</a>
  </li>
<li class="level1">
    <a href="#login" class="login" style="text-decoration:none;"> <img  src="photos/baseline_login_white_18dp.png" id="fimg"> <img src="photos/baseline_login_black_18dp.png" id="secimg"> </a>
</li>
</div>


<header >

</header>>

<div class="regform">
      <h1 align="center">We'd love to have you here! <br /> Register now </h1>
      <form align="center" action="register.php" method="POST" style="text-align:center;">
      <input type="text" placeholder="Fist Name" id="f_name" name="f_name" required> <br /> <br />
      <input type="text" placeholder="Last Name" id="l_name" name="l_name" required> <br /> <br />
        <input type="text" placeholder="email" id="email" name="email" required> <br /> <br />
        <input type="password" placeholder="password" id="pass" name="pass" required><br /> <br />
        <input type="password" placeholder="re-enter password" id="pass2" name="pass2" required><br /> <br />
        <input type="submit" value="Register" name="submit">
        <span><?php echo $invalid; ?></span>
        <h4>Already have an account? <a href="loginform.php"> Sign In Now</a></h4>
      </form>
</div>
      </body>
</html>