<?php 
 session_status() === PHP_SESSION_ACTIVE ?: session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- parallax effect -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Street Wear</title>
        <link rel="stylesheet" href="style2.css" />

    </head>
    <!-- end of parallax effect -->



    <body >

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
  <li class="level1"></li>
    <a href="logout.php" class="login" style="text-decoration:none; display:inline-block;"> <img  src="photos/outline_logout_white_24dp.png" id="fimg"> <img src="photos/outline_logout_black_24dp.png" id="secimg"> </a>
</li>
<li class="level1"> <a href="logout.php"><?php echo $_SESSION['f_name']; ?>
<?php echo $_SESSION['email']; ?></a></li>
</div>
</div>


<header style="background-image: url(photos/streetwear/https___www.lifeofpix.com_wp-content_uploads_2021_01_IMG_20191226_221608.jpg)">
    <h1>Street Style</h1>
</header>


<!-- new parallax -->
<div class="parallax"></div>

<div class="firstpart" style="height:2000px; background-color:#adadad; font-size:20px; color:white; text-align:left; text-decoration:none;">
  <section class="items">

      <a class="product" href="later" style="text-decoration:none">
        <img src="photos/streetwear/good-faces-ZY1kwtoYCg8-unsplash.jpg"  />
        <h3 >milk sweatshirt <h4 style="color:white; font-size:15px;"> 300SAR </h4> </h3> <br />

      </a>

      <a class="product" href="later" style="text-decoration:none">
        <img src="photos/streetwear/https___www.lifeofpix.com_wp-content_uploads_2020_12_IMG_8451.jpg"  />
        <h3 >Checker Coat </h3> <h4 style=" font-size:15px;"> 400SAR </h4>  <br />

      </a>
      <a class="product" href="later" style="text-decoration:none">
        <img src="photos/streetwear/khaled-ghareeb-5pCySD8nfY8-unsplash copy.jpg"  />
        <h3 >Black & white Co-Ord <h4 style="color:white; font-size:15px;"> 150SAR </h4> </h3> <br />

      </a>

<!--Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.-->
</section>
</div>

<script src="whyus.js"></script>
    </body>
</html>

