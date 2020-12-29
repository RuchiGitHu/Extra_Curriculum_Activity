<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
<style>
html{
  scroll-behavior:smooth;
}
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Source Serif Pro', serif;}
a{ text-decoration: none;}
a:hover{
  text-decoration: none;
}
li {
list-style:none;
}
p{
  font-size: 0.9rem;
  line-height: 1.6;
  font-weight: 400;
  color: #606060;

}
.edit h1{
  text-transform: uppercase;
  color: black;
  margin-bottom: 25px;
font-size: 2.5rem!important;
font-weight:600;
text-shadow:0 2px 5px rgba(0,0,0,0.3);
text-align: center;
}
.header-section{
  width: 100%;
  height: 100vh;
  background-image:url(../images/v.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
/*     clip-path: polygon(100% 0%,100% 75%, 50% 100%, 0 75%, 0 0%); 
*/       position: relative;
}
.navbar{
  background-color: LightSkyBlue;
}
.nav-item a{
  color:#000000!important;
  font-weight: bold;
}
.nav-item{
 /* border: 1px solid #fff;*/
  border-radius:100px;
  margin: 0.5px;
  padding: 12px, 35px;
  outline: none;
  color: #fff;
  font-size:1rem;
  font-weight: 400;
  line-weight:1.4;
  text-align: center;
}
.navbar-brand{
   color:#000000!important;
  font-weight: bold;
}
.header-section{
  width:100%;
  height:50%;
  
  color: black;
  text-align: center;
  position: relative;
}
.center-div{
  width:100%;
  height:auto;
  position: center;
  color: black;
  top: 50%;
  left: 50%;
  font-family: 'Dancing Script', cursive;

}
.footersection{
  width: 100%;
  height: auto;
  padding: 70px 0 20px 0;
  background: #00abff;
  position:relative;

}
.footersection p{
  color: #fff;

}
.footersection li a{
  font-size:0.9rem;
  line-height:1.6;
  font-weight: 400;
  color:#fff;
  text-transform: capitalize;

}
.footersection h3{
  text-transform: uppercase;
  color: black;
  margin-bottom: 25px;
font-size: 1.2rem!important;
font-weight:600;
text-shadow:0 2px 5px rgba(0,0,0,0.3);
}
#myBtn {
  display: none;
  position: fixed;
bottom: 20px;
 right: 40px;
z-index: 99;
border: none;
color: black;
background: #00abff;
padding:10px;
border-radius: 10px;
}
#myBtn:hover{
  background: white;

}


</style>
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">ST.AUGUSTINE CO-ED SCHOOL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>

    
     <li class="nav-item">
        <a class="nav-link" href="active.php">ACTIVITIES</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="winners.php">WINNERS</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="photo.php">PHOTO-GALLERY</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
    </ul>
  </div>
</nav>
<section class= "header-section">
<div class="center-div">
</div>
</section>
<div class="edit">
<h1 class="font-weight-bold" >ABOUT US</h1>





</div>






<footer class="footersection" id="footerdiv">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
<div>
<h3> ABOUT SCHOOL</h3>
<p>The vision of the school is to become a Centre of Excellence and to create global citizens and visionary leaders who function as catalysts in different spheres of life and this could be achieved by drawing the best from each student by providing an enabling and caring environment.</p>
</div>
</div>

<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
<div>
<h3>NAVIGATION LINK</h3>
<li><a href="index.php">HOME</a></li>
<li><a href="#">SERVICES</a></li>
<li><a href="benefits.php">BANEFITS</a></li>
<li><a href="about.php">ABOUT</a>
</li>
</div>
</div>

<div class="col-lg-4 col-md-12 col-15 footer-div text-center">
<div>
<h3> NEWS LETTER</h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque nulla ipsum, pretium ac ultrices non, tincidunt id quam. Mauris dignissim dolor quis risus molestie et ,</p>
</div>
</div>
</div>
<div class="mt-5 text-center">
<p>Copyright 02019 ALL rights reserved | This template is made for my PROJECT</p>
</div>
<div class="scrolltop float-right">
<i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>

</div>
</div>
</footer>



</body>
</html>
