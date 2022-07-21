<!DOCTYPE html>
<html>
<title>About </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.container
{
	background-color: white;
    padding: 16px 12px;
}
p
{
	text-align: left;
	size: 100px;
}
body
{
	background-color: #87CEFA;
	font-family: "Bahnschrift Light";
	color: #000000;
}
img
{
	align-self: center;
}
</style>

<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="about.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">About</a>
    <a href="tandc.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Terms & Conditions</a>
    <a href="contact.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Contact</a>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
   <img src="C:\xampp\htdocs\Images\adhoc logo1.png" style="height: 20%; width: 20%;">

<div class="container">
	<div>
		<h1 style="font-family: "Bahnschrift Light;><u>About</u></h1>
	</div>
<p>
	This is a website that is capable of putting together the workers and hirers to come up with an advertisement. Several freelancers of different designations are put together to work on a particular project and the given estimated budget. The main idea of this website is to understand the potential influence and importance of an advertisement and also to understand the net worth of the company's income to provide the advertisement that suits your product and your budget. We understand that every company needs its own advertisement. This is a fantastic opportunity for both the worker and the hirer to bring up the income of your dreams.
</p>
<br>
<p>
	For workers, this is an opportunity to showcase your talent and to earn what you deserve. You can work at the pleasure of your home and attend phone calls. The hirer will put all the freelancers into a team for the project. One of you will be appointed as the head by the review committee of ADhoc inc. The budget will be fixed as provided by the hirer. After the completion of the works, the salary will be splitted according to the budget fixed by the hirer. The salary may vary from hirer to hirer.
</p>
<br>
<p>
	For Hirers, this is platform where you can expect your sales to go up. That is, it the place where we work for it. Advertisement being the vital importance in a business, not every company can afford it. We will help you to develop an advertisement of your choice and help you expand your sales and good will. You fix the budget with and give the requirements of your advertisement. The freelancers will work together and give you the desired outcome.
</p>
</div>

<script>
// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>