<!doctype html>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <link  rel="stylesheet" href="css/w3.css">
        <link  rel="stylesheet" href="css/font-awesome.min.css">
   <title> Home Page</title>
   <style>
      .fa-arrow-circle-left:before{content:"\f0a8"}
      
.mySlides {
display:none;
}
   </style>


</head>
<body>
    
    <div class="w3-top">
     <div class="w3-container w3-cyan">
                <div class="w3-row">
                    <div class="w3-col m2 l2 w3-left w3-padding-small">
                         <a href="dashboard.php"> <img src="images/mainlogo.jpg" alt="DESIDOC"></a>
                    </div>
                    <div class="w3-col m10 l10 w3-padding-16 w3-left-align">
                        <h1><img src="images/headertext.png" alt="DESIDOC"></h1>
                    </div>
                </div>
     </div>
    
    
         <div class="w3-bar w3-container w3-black ">
             <a href="dashboard.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">DASHBOARD</a>
             <a href="registration.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">REGISTER</a>
             <a href="login.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">LOGIN</a>
             <a href="aboutus.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">ABOUT US</a>
             <a href="contactus.php" class="w3-bar-item w3-button w3-large w3-hover-grey" style="width:20%">CONTACT US</a>
            
        </div>
        
        
        <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px;">
            <div class="w3-panel">
                <h1><b>MARKETING</b></h1>
            </div>
            
            <!--slideshow-->
            <div class="w3-container">
                <div class="w3-display-container mySlides">
                    <img src="images/1.jpg" style="width:100%">
                    <div class="w3-display-topleft w3-container w3-padding-32">
                        <span class="w3-white w3-padding-large w3-animate-bottom">fsgfkhasgs</span>
                    </div>
                </div>
                
                <div class="w3-display-container mySlides">
                    <img src="images/2.jpg" style="width:100%">
                    <div class="w3-display-topleft w3-container w3-padding-32">
                        <span class="w3-white w3-padding-large w3-animate-bottom">fsgfkhasgs</span>
                    </div>
                </div>
                
                <div class="w3-display-container mySlides">
                    <img src="images/3.jpg" style="width:100%">
                    <div class="w3-display-topleft w3-container w3-padding-32">
                        <span class="w3-white w3-padding-large w3-animate-bottom">fsgfkhasgs</span>
                    </div>
                </div>
                
                <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
                    <div class="w3-left" onclick="plusDivs(-1)"></div>
                    <div class="w3-right" onclick="plusDivs(1)"></div>
                </div>
                
            </div>
        </div>
        
    </div>
    
    
    
    <script>
var slideIndex=1;
showDivs(slideIndex);

function plusDivs(n){

showDivs(slideIndex += n);
}

function showDivs(n){

var i;
var x=document.getElementByClassName("mySlides");

if(n>x.length){slideIndex=1}
if(n<1){slideIndex=x.length};

for(i=0;i<x.length;i++){
    x[i].style.display="none";
  
        }
x[slideIndex-1].style.display="block";

}

    
    
    </script>
        
    
    
<!--<div class="header">

            <ul id="nav">
                <li><a href="aboutus.php">AboutUs</a></li>
                        <li><a class="hsubs" href="contactus.php">ContactUs</a> </li>
                        <li><a class="hsubs" href="login.php">Log-In</a></li>
                        <li><a class="hsubs" href="registration.php">Register</a>
                        <ul class="subs">
                           
                        
                        </ul>
                        </li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                
                <div id="lavalamp"></div>
            </ul>

        </div>

    <div id="slider"">
    <img class="mySlides" src="images/1.jpg" style="height:331px;width:1020px;">
    <img class="mySlides" src="images/2.jpg" style="height:331px;width:1020px;" >
    <img class="mySlides" src="images/3.jpg" style="height:331px;width:1020px;">
    </div>  
    -->
     

<!--<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>-->
   
<footer class="w3-container w3-bottom w3-center w3-cyan w3-margin-top">
    <p>© NSD,DESIDOC</p><p><marquee>Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px).</marquee></p>
</footer>


	   </body>
	   </html>