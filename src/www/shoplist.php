
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OrderInfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/header_bg.css">
    <link rel="stylesheet" href="css/style_shoplist.css">
    <link rel="stylesheet" href="css/style_index.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="shortcut icon" href="img/logo.jpg" />
	<link rel="stylesheet" href="css/shoplist.css" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/OrderInfo.js"></script>
	


</head>
<header>
<?php include 'header.php';?>
</header>
<body>

<div class="bg">
        <div class="top">
            <div class="user">
                <div id="name">
                    <span>User Name</span>
                    <div class="topbar" hidden>
                        <ul>
                            <li>
                                <div class="topbar_item">
                                    <a href="profile.php"><span>Profile</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="topbar_item">
                                    <a href="profile.php"><span>User</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="topbar_item">
                                    <a href="profile.php"><span>My Address</span></a>
                                </div>
                            </li>
                            <li id="u5" class="topbar_item">
                                <div>
                                    <a href="signup.php"><span>Sign out</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
		
		<div class="row">
  <div class="column">
    <img src="img/apple.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/pear.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/banana.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/orange.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myPic" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/apple.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/pear.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/banana.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/orange.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/apple.jpg" style="width:100%" onclick="currentSlide(1)" alt="Apple">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/pear.jpg" style="width:100%" onclick="currentSlide(2)" alt="Pear">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/banana.jpg" style="width:100%" onclick="currentSlide(3)" alt="Banana">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/orange.jpg" style="width:100%" onclick="currentSlide(4)" alt="Orange">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myPic").style.display = "block";
}

function closeModal() {
  document.getElementById("myPic").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

</body>

		<footer style="margin-top: 0">
		<?php include 'footer.php';?>

		</html>
