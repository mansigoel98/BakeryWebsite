<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baking Girl</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width,initial-scale=1 , shrink-to-fit=no">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap.css">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap-reboot.css">
        <link rel ="stylesheet" href ="bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="first.css">
        <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
<link rel="icon" href="images.jpg" type="image/x-icon" />
<link rel="shortcut icon" href="images.jpg" type="image/x-icon" />


<style>
.inline-navlink{
  font-style:italic;
  font-size: 25px;
  text-decoration-color: brown;
}
* {
  box-sizing: border-box;
}

body {

  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 800px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row1 {
  margin-left: 14%;
}

/* Add padding BETWEEN each column */
.row1,
.row1 > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 29.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

.imgann{
width: 288px;
height: 250px;
}
.imgann:hover {opacity: 0.7;}
.annh{
    text-align: center;
    font-size: 50px;
    font-style: italic;
    color: brown;
    font-family: cursive;
    margin-top: 20px;
    margin-bottom:20px; 
    
}

</style>
       </head>



       <body>


        <!------ section 1-->
        <div class="headertop">
            <div class="row">
               <div class="left-header-top">
                  <ul class="list-inline">
                       <li style="padding: 0px">
                         <i style="padding: 5px; margin-left:50px ; font-size: 14px;">Call Now </i>+91-7879400400
                       </li>
                         <i style="font-size:14px ; padding: 20px;">(Call Us On Between 12 NOON - 9PM)</i>
                   </ul>
               </div>
             <div class="right-header-top">
                 <ul class="links list-inline" style="margin-left:303px;">    
                 <li class="liLinks">
                         <?php
                         if(isset($_SESSION['username'])){
                          echo "<a href='myAccount.php' style='color: brown' class='hv'>My Account</a>";
                         }
                         else{
                          echo "<a href='login.php' style='color: brown' class='hv'>My Account</a>";
                         }
                        ?>
                         
                        </li>                                
                        <li class="liLinks">
                        <?php
                         if(isset($_SESSION['username'])){
                          echo "<a href='myWishlist.php' style='color: brown' class='hv'>My Wishlist</a>";
                         }
                         else{
                          echo "<a href='login.php' style='color: brown' class='hv'>My Wishlist</a>";
                         }
                        ?>
                          
                        </li>

                         <li class="liLinks">
                         <?php
                         if(isset($_SESSION['username'])){
                          echo "<a href='checkout.php' style='color: brown' class='hv'>CheckOut</a>";
                         }
                         else{
                          echo "<a href='login.php' style='color: brown' class='hv'>CheckOut</a>";
                         }
                        ?>
                         </li>                            
                         <li class=" class=liLinks ">
                         <?php
                         if(isset($_SESSION['username'])){
                          
                          echo "<a href='logout.php' style='color: brown' class='hv' onclick='logout()'>Log Out</a>";
                         }
                         else{
                          echo "<a href='login.php' style='color: brown' class='hv'>Log In</a>";
                         }

                        ?>
                         </li>             
                 </ul>     

                </div> 
             </div>
         </div>



         <!-----nect section  ----->

         <section class="headertop2">
           <div>
             <img src="images.jpg" alt="Bakery Logo" width="80px" height="80px" style="margin-left: 100px " >
             <a href="viewCart"><img src="Cart.png" alt="cart" width=30px height="30px" style=" margin-left:900px" data-toggle="tooltip" title="View Cert"></a>
             <?php
             if(isset($_SESSION['username'])){
             $username=$_SESSION['username'];
             $con =mysqli_connect('localhost','mansi','mansi');
            if($con)
                {
                   mysqli_select_db($con,'bakery');
                   $q = "select * from cart where username='$username'";
                   $result = mysqli_query($con,$q);
                   $num=mysqli_num_rows($result);
                   echo "You have $num item in your cart";
                   mysqli_close($con);
                }
              }
              else{
                echo "You have 0 item in your cart";
             }

             ?>
             <?php 
                         if(isset($_SESSION['username'])){
                           $username=$_SESSION['username'];
                           echo "<h5 align='center'>Hi $username!</h5>";
                         }

                         ?> 
           </div>
          </section>




         
         <nav class="navbar navbar-expand-lg navbar-light headertop3 sticky-top">
           
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link inline-navlink hv" href="homepage.php" style="color: brown">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link inline-navlink hv" href="aboutUs.php" style="color: brown">About Us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link inline-navlink dropdown-toggle hv" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: brown">
                 Cakes
                </a>
                <div class="dropdown-menu dp" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item dp" href="Birthdaycake.php" >Birthady Cakes</a>
                  <a class="dropdown-item dp" href="AnniversaryCake.php" >Anniversary Cakes</a>
                  <a class="dropdown-item dp" href="IceCreamCakes.php" >Ice Cream Cakes</a>
                  <a class="dropdown-item dp" href="Customisedcake.php">Customized Cakes</a>
                  <a class="dropdown-item dp" href="FlowerCake.php">Flower Cakes</a>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link inline-navlink hv" href="cookies.php" style="color: brown">Cookies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline-navlink hv" href="cakesinJar.php" style="color: brown">Cakes In Jar</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link inline-navlink hv" href="LuxaryChoclate.php" style="color: brown">Luxuary Chochlate</a>
                    </li>
              <li class="nav-item">
                  <a class="nav-link inline-navlink hv" href="contactus.php" style="color: brown">Contact Us</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link inline-navlink hv" href="ourStories.php" style="color: brown">Our Stores</a>
                </li>

            </ul>
          </div>
        </nav>


<!------next section---------------------------------------------------------->






<div id="myBtnContainer">
    <h1 class="annh"> Customized Cakes</h1>
    
  </div>
  
  <!-- Portfolio Gallery Grid -->
  <div class="row1">
    <div class="column nature">
      <div class="content">
        <a><img src="cuscake1.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Mountains</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column nature">
      <div class="content">
        <a><img src="cuscake2.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Lights</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column nature">
      <div class="content">
        <a><img src="cuscake3.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Forest</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    
    <div class="column cars">
      <div class="content">
        <a><img src="cuscake4.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Retro</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column cars">
      <div class="content">
        <a><img src="cuscake5.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Fast</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column cars">
      <div class="content">
        <a><img src="cuscake6.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Classic</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
  
    <div class="column people">
      <div class="content">
        <a><img src="cuscake7.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Girl</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column people">
      <div class="content">
        <a><img src="cuscake8.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Man</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
    <div class="column people">
      <div class="content">
        <a><img src="cuscake9.jpg" alt="bdcake" class="imgann" data-toggle="tooltip" title= "Click - Add to cart"></a>
        <h4>Woman</h4>
        <p>Lorem ipsum dolor..</p>
      </div>
    </div>
  <!-- END GRID -->
  </div>
  
  <!-- END MAIN -->
  </div>
  

          
<!----next Section--------------------------------------------------------------->


<section class="deliverysec">
    <img src="Delivery.png" alt="delivery" class="deliveryimg">
    <section style="margin-left: 600px">
    <h1 style="text-align:right">Free Delivery</h1>
    <p style="text-align: right">Be it midnight , early morning . We deliver according to time of your choice.</p>
    </section>
    </section>
    
    
    <!--- next Section --->
    
    <section style="border-bottom:3px solid brown">
        <div class="reviewdiv">
            <img src="heart.png" alt ="like us" class="imgreview" >
            <h2 style="text-align: center; color: brown;font-style: italic"> Customer Love Us</h2>
            <p style="text-align: center ; font-size: 15px">
                We love to see our customers leave with their taste buds delighted and they say
                amazing things.
              </p>
                </div>
    </section >
    
    <!----next Section  ---->
    
    
    <section class="aboutsec">
    <h1 style="text-align: center ; margin-top: 10px;color: brown">About Us</h1>
    <p class="aboutpara"> THIS WEBSITE HAS BEEN SHAPED SO THAT WE PEOPLE CAN ORDER CAKES FOR THEIR LOVED ONES.
       YOU CAN SHARE YOUR INCREDIBLY VALUABLE VIEWS ON OUR BAKERY, ANY SUGGESTIONS ARE WELCOME.
       We love to see our customers leave with their taste buds delighted and they say
       amazing things.THIS WEBSITE HAS BEEN SHAPED SO THAT WE PEOPLE CAN ORDER CAKES FOR THEIR LOVED ONES.
       YOU CAN SHARE YOUR INCREDIBLY VALUABLE VIEWS ON OUR BAKERY, ANY SUGGESTIONS ARE WELCOME.
       We love to see our customers leave with their taste buds delighted and they say
       amazing things.</p>
       <img src="images.jpg" alt="logo" class="abtlogo">
       <p style="text-align: center">We aim to add flavour to your occassions by baking a beautiful and 
         attractive cake that's fresh and delicious to taste!</p>
       <section class="abtsec">
         <img src="call.png" alt="call" class="abticon" data-toggle="tooltip" title="Call us at -8978867856">
         <a href="https://www.facebook.com/"><img src="facebook.png" alt="facebook" class="abticon" data-toggle="tooltip" title="Like our Facebook Page"></a>
         <a href="https://www.instagram.com/"><img src="instagram.png" alt="instagram" class="abticon" data-toggle="tooltip" title="Follow us on Instagram"></a>
         <img src="gmail.png" alt="gmail" class="abticon" data-toggle="tooltip" title="Mail Us">
       </section>
    <p style="text-align: center">© 2019 Baking Girl. All Rights Reserved.</p>
    
    </section>
    
    
    
    
    
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>




<script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }
    
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }
    
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }
    
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>
    
    
    
           </body>
    </html>

