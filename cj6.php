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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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






<script>

  function validate(){
    if(document.entry.msg.value==""){
      alert("Msessage field is empty");
      return false;
    }
    return true;
  }
  
  </script>







<style>
  * {box-sizing: border-box;}
  
  .img-zoom-container {
    position: relative;
    float: left;
    margin: 30px;
    
  }
  
  .img-zoom-lens {
    position: absolute;
    border: 1px solid #d4d4d4;
    /*set the size of the lens:*/
    width: 40px;
    height: 40px;
  }
  
  .img-zoom-result {
    border: 3px solid white;
    /*set the size of the result div:*/
    width: 300px;
    height: 300px;
    margin-top: 30px;
  }
  </style>
  
<style>
.inline-navlink{
  font-style:italic;
  font-size: 25px;
  text-decoration-color: brown;
}
.desc{
  width: 65%;
  height:1200px;
  background-color: white;
  margin: 30px;
  float: left;
  padding: 20px;
}
.annh{
    text-align: center;
    font-size: 50px;
    font-style: italic;
    color: brown;
    font-family: cursive;
    margin-top: 20px;
    margin-bottom:30px; 
    
}
.inputdes{
  width: 700px;
  margin : -10px 35px 25px 35px;
  border: 2px solid grey;
}

.chb{
  margin:20px 0px 10px 35px;
}
.chb1{
  margin:20px 0px 10px 35px;
}
.chb2{
  margin:20px 0px 10px 35px;
}
.btdes{
    background-color: brown;
    color: white;
    margin-left: 39%;
    width: 200px;
    margin-top: 20px;
    padding: 12px 16px; 
  font-size: 16px; 
  cursor: pointer;
}
.btdes:hover {
  background-color: rgb(231, 55, 55);
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
                 <ul class="links list-inline" style="margin-left:403px;">    
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









<!-----------------------------next section------------------------------------------------------------------>

<div class="img-zoom-container">
  <img id="myimage" src="cj6.jpg" width="300" height="250" style="border: 3px solid white">
 
</div>
<div class="desc">
  <div style="border-bottom: 2px dotted green">
<h1 class="annh">Vanilla Cake Jar</h1>
  </div>
  <div>
     <p style="color: brown; font-style: italic; margin-top: 40px; margin-left: 20px;margin-right: 20px;margin-bottom:40px;font-size: 20px; text-align: left;">Price: Rs 545.00
     <span style="float: right;" >Availability:<span id ="stock" style="color: green ;"> In stock</span></span></p>
  </div>




  <form name="entry" onsubmit="return validate()" action="cart.php" method="POST">
  <div>
    <?php
    $_SESSION['cakeName']="Vaniila Cake Jar";
    $_SESSION['price']="545.00";
    $_SESSION['imgcake']="cj6.jpg";
    $_SESSION['type']="cake";

    ?>
  </div>
  <div>
    <p style="margin-left: 35px ; margin-bottom: 4px; color:brown ; font-size: 20px ; font-style: italic"><strong>Weight</strong></p>
    <label><input type="checkbox" name="w1" class="chb" checked/> 0.5Kg</label>
    <label><input type="checkbox" name="w2" class="chb" style="margin-left: 230px"/> 1kg</label><br>
    <label><input type="checkbox" name="w3" class="chb" /> 1.5Kg</label>
    <label><input type="checkbox" name="w4" class="chb" style="margin-left: 230px"/> 2Kg</label><br>
    <label><input type="checkbox" name="w5" class="chb" /> 2.5Kg</label>
    <label><input type="checkbox" name="w6" class="chb" style="margin-left: 230px"/> 3Kg</label><br><br><br>

  </div>
  <div>
    <p style="margin-left: 35px ; margin-bottom: 4px; color:brown; font-style: italic;font-size: 20px;"><strong>Flavour</strong></p>
    <label><input type="checkbox" name="f1" class="chb1" id="f"checked/> ButterScoch</label>
    <label><input type="checkbox" name="f2" class="chb1" id="f" style="margin-left: 180px"/>Pineapple </label><br>
    <label><input type="checkbox" name="f3" class="chb1" id="f"/> Strawberry&nbsp;&nbsp;</label>
    <label><input type="checkbox" name="f4" class="chb1" id="f" style="margin-left: 180px"/> Chochlate</label><br>
    <label><input type="checkbox" name="f5" class="chb1" id="f"/> Black Forest</label>
    <label><input type="checkbox" name="f6" class="chb1" id="f" style="margin-left: 180px"/>Mix Fruit</label><br>
    <label><input type="checkbox" name="f7" class="chb1" id="f"/>RabriAlmond</label>
    <label><input type="checkbox" name="f8" class="chb1" id="f" style="margin-left: 180px"/>Dark Chochlate</label><br><br><br>

  </div>
  <div>
    <p style="margin-left: 35px ; margin-bottom: 4px; color:brown; font-size: 20px; font-style: italic"><strong>Cake Type</strong></p>
    <label><input type="checkbox" name="ct1" class="chb2" id="ct" checked />Eggless</label>
    <label><input type="checkbox" name="ct2" class="chb2" id="ct" style="margin-left: 220px"/>With Egg</label><br>

  </div>

   <button type="submit" name="onsubmit" class="btdes"><i class="fa fa-shopping-cart">&nbsp;&nbsp;Add to Cart</i></button>
   <hr>
   <button type="submit" class="btdes" formAction="addWishlist.php"><i class="fa fa-heart">&nbsp;&nbsp;Add to Wishlist</i> </button>

</form>
</div>









<!----------------------------------next section---------------------------------------------------------------->
          












<!----next Section--->


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


      $(".chb").change(function() {
      $(".chb").prop('checked', false);
      $(this).prop('checked', true);
      });
      $(".chb1").change(function() {
      $(".chb1").prop('checked', false);
      $(this).prop('checked', true);
      });
      $(".chb2").change(function() {
      $(".chb2").prop('checked', false);
      $(this).prop('checked', true);
      });
      </script>


  
         </body>
  </html>