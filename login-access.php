<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<!-- parallax effect -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fashion Website</title>
        <!--<link rel="stylesheet" type="text/css" href="style2.css" />-->
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
  font-family: 'DotGothic16';
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
  z-index: -1;
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
  display: inline-block;
}
.login a, .login img{
    display: inline-block;
}

.navbar img{
  height: 25px;
  width: 25px;
  /*float: right;*/
  display: inline-block;

}
.navbar.active #fimg{
  display: none;
}

#secimg {
  display: none;
}
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
header {
  color: white;
  /* The image used
  background-image: url(photos/earth/Earth1.jpg);
*/
  /* Set a specific height */
  min-height: 100vh;
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


/* .box {
    display: flex;
  align-items: center;
  justify-content: center;
  transform: translateX(100%);
  transition: transform 0.3s ease;
  z-index: -99;
}

.box:nth-of-type(even) {
  transform: translateX(-300%);
}

.box .show{
  transform: translateX(0);
  }
.items img{
     display: inline-block;
  z-index: -1;
}  */
.container{
    display: inline-block;
    align-items: center;
  justify-content: center;
  padding: 10px;
  margin: 10px;

}
.box img{
    border-radius: 15px;
}
.text {
  color: white;
  font-size: 22px;
  position: absolute;
  top: 123%;
   left: 28%; /*if we increment goes to right */
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.text1 {
  color: white;
  font-size: 22px;
  position: absolute;
  top: 123%;
  left: 71%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.overlay {
  opacity: 0;
  transition: 0.5s ease;
}

.container:hover .overlay {
  opacity: 1;
}
.container img:hover{
  filter:opacity(70%);
}
    </style>
    </head>
    <!-- end of parallax effect -->



    <body>

<!-- menu -->
<div class="navbar">
<!-- starting of the list -->
<ul class="clearfix" style="
    margin-bottom: 0px;
    margin-top: 0px;">
   <li class="level1">
        <a href="#home">Home</a>
 </li>

 <li class="level1">
  <a href="#contact">New</a>

 </li>
 <li class="level1">
  <a href="#news">Shop By Collection</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="">Street Wear Collection</a></li>
    <li class="level-2"><a id="ignorant" href="" >&nbsp; &nbsp;&nbsp; Classic Collection&nbsp;&nbsp;&nbsp;</a></li>
  </ul>
 </li>
 <li class="level1">
  <a href="#contact">Shop By Category</a>
  <!-- dropdown list -->
  <ul>
    <li class="level-2"><a href="">Jackests</a></li>
    <li class="level-2"><a href="">Dresses</a></li>
  </ul>
 </li>
  <li class="level1">
  <a href="#contact">Why Us?</a>
  </li>

<li class="level1"></li>
    <a href="logout.php" class="login" style="text-decoration:none; display:inline-block;"> <img  src="photos/outline_logout_white_24dp.png" id="fimg"> <img src="photos/outline_logout_black_24dp.png" id="secimg"> </a>
</li>
<li class="level1"> <a href="logout.php"><?php echo $_SESSION['f_name']; ?>
<?php echo $_SESSION['email']; ?></a></li>
</div>


<header style="background-image: url(photos/earth/Earth1.jpg)">
    <h1>Fashion Website </h1>
</header>


<!-- new parallax -->
<div class="parallax"></div>

<div class="firstpart" style="height:auto; background-color:#ffffff; font-size:20px; color:white; text-align:left; text-decoration:none;">
  <center>
    <div class="box container ">
      <a class="product" href="later" style="text-decoration:none">
        <img src="photos/modren classic/tamara-schipchinskaya-U5fhujD7k_U-unsplash.jpg"  width="560" height="350" />
        <div class="overlay">
     <div class="text">Classic Collection</div>
   </div>

      </a>
      </div>

    <div class="box container ">
      <a class="product" href="streetwear.php" style="text-decoration:none">
        <img src="photos/streetwear/https___www.lifeofpix.com_wp-content_uploads_2021_01_IMG_20191226_221608.jpg"  alt="photo"  width="560" height="350"/>
        <div class="overlay">
     <div class="text1">Street Wear Collection</div>
   </div>
      </a>
      </div>
       </center>
    <!-- <div class="box container">
      <a class="product" href="later" style="text-decoration:none">
        <img src="photos/streetwear/khaled-ghareeb-5pCySD8nfY8-unsplash copy.jpg"  width="500" height="350"/>

      </a>
   </div> -->
<!--Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.-->

</div>

<script src="whyus.js">

</script>
    </body>
</html>
