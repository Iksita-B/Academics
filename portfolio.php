<!DOCTYPE html>
<html>
<title>ADhoc Advertisers</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}

.container
{
  position: relative;
  width: 100%;
  max-width: 550px;
}
.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .3s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
  opacity: 1;
}

.container:hover .overlay
{
  opacity: 1;
} 

.login
{
	background-color: #696969;
	border-style: solid;
	border-color: #696969;
	float: left;
	color: #ffffff;
	text-decoration: none;
	size: 30px;
	padding: 30px;
}
.login:hover
{
	transition: .2s ease;
	background-color: #ffffff;
	color: #696969;
	border-color: #696969;
}
</style>
<body>
<!--login-->
<a class="login" href="#login" class="w3-button w3-black">Login</a>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black">About</a>
 
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Find</a>
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Contact</a>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <!--<h1><b>ADhoc</b></h1>-->
  <img src="C:\xampp\htdocs\Mini project\Images\adhoc logo1.png" style="height: 20%; width: 20%;">
  <p><b>A platform where clients meet advertisers.</b></p>
  <!--I want to work, I want to hire -->
  <p class="w3-padding-16"><a href="#work" class="w3-button w3-black">I want to Work</a>   <a href="#hire" class="w3-button w3-black">I want to Hire</a></p>
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
     <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\cam.jpg" style="width:100%"><div class="overlay">Photography</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\painter.jpg" style="width:100%"><div class="overlay">Artists</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\voice over.jpg" style="width:100%"><div class="overlay">Voice over Artists</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\director.jpg" style="width:100%"><div class="overlay">Film Makers</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\vfx.jpg" style="width:100%"><div class="overlay">VFX Editors</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\video editor.jpg" style="width:100%"><div class="overlay">Video Editors</div></div>
  </div>
  

  <div class="w3-third">
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\audio editor.jpg" style="width:100%"><div class="overlay">Audio Editors</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\singer.jpg" style="width:100%"><div class="overlay">Singers</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\drums.jpg" style="width:100%"><div class="overlay">Drums Players</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\script writer.jpg" style="width:100%"><div class="overlay">Script writers</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\guitar.jpg" style="width:100%"><div class="overlay">Guitarists</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\band.jpg" style="width:100%"><div class="overlay">Bands</div></div>
  </div>

  <div class="w3-third">
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\violin.jpg" style="width:100%"><div class="overlay">Violenists</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\anime.jpg" style="width:100%"><div class="overlay">Animators</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\logo.jpg" style="width:100%"><div class="overlay">Logo Designers</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\graphics creator.jpg" style="width:100%"><div class="overlay">Graphics Designers</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\story.jpg" style="width:100%"><div class="overlay">Content Creators</div></div>
    <div class="container"><img src="C:\xampp\htdocs\Mini project\Images\infinity.jpg" style="width:100%"><div class="overlay">And much more...</div></div>
  </div>
</div>

<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
  <a href="#facebook"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="#instagram"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="#snapchat"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
  <a href="#pinterest"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
  <a href="#twitter"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="#linkedin"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
</footer>
 
<script>
//write scripts here
</script>

</body>
</html>