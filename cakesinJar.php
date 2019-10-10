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

.flip-box {
    
    width: 260px;
    height: 300px;
    margin-left: 15px;
    margin-right: 15px;
   
    margin-bottom: 50px;
    background-color: white;
    margin-top:30px;
    margin-bottom: 20px;
    perspective: 1000px;
  }
  .scake{
    border: 5px solid white;
    width: 250px;
    height: 250px;
    margin: 0px;
   
}
 
.flip-box-inner {
    position: relative;
    width: 260px;
    height: 300px;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
   

  }
  
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
<!------------------------------------nextsection------------------------------------------------------------------------>

<h1 class="annh"> Cakes in Jar </h1>

<section>
  <div class="mydiv">
      <div class="flip-box scake-align">
          <div class="flip-box-inner">
             <div class="flip-box-front">
                 <a href="cj1.php"><img src="cj1.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 945.00/Kg"></a>
                 <a href="cj1.php" style="color: black"><p  data-toggle="tooltip" title="Rs 945.00/Kg"> Red Velvet Jar</p></a>
             </div>
             <div class="flip-box-back">
                 <a href="cj1.php"><img src="cj1.jpg" alt="cake" class="scake " href="#" data-toggle="tooltip" title="Rs 945.00/Kg"></a>
                <a href="cj1.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 945.00/Kg">  Red Velvet Jar</p></a>
             </div>   
          </div>
     </div>
  
     <div class="flip-box scake-align">
        <div class="flip-box-inner">
           <div class="flip-box-front">
               <a href="cj2.php"><img src="cj2.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 675.00"></a>
               <a href="cj2.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 675.00"> Fruit Jar</p></a>
           </div>
           <div class="flip-box-back">
               <a href="cj2.php"><img src="cj2.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 675.00"></a>
               <a href="cj2.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 675.00">  Fruit Jar</p></a>
           </div>   
        </div>
   </div>
   <div class="flip-box scake-align">
      <div class="flip-box-inner">
         <div class="flip-box-front">
             <a href="cj3.php"><img src="cj3.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 575.00"></a>
             <a href="cj3.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 575.00"> Chochlate Jar</p></a>
         </div>
         <div class="flip-box-back">
             <a href="cj3.php"><img src="cj3.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 575.00"></a>
             <a href="cj3.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 575.00">  Chochlate Jar</p></a>
         </div>   
      </div>
  </div>
  </div>
  
  
  
  <div class="mydiv">
      <div class="flip-box scake-align">
          <div class="flip-box-inner">
             <div class="flip-box-front">
                 <a href="cj4.php"><img src="cj4.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 675.00"></a>
                 <a href="cj4.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 675.00"> Brownie Cake</p></a>
             </div>
             <div class="flip-box-back">
                 <a href="cj4.php"><img src="cj4.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 675.00"></a>
                 <a href="cj4.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 675.00">  Brownie Cake</p></a>
             </div>   
          </div>
     </div>
  
     <div class="flip-box scake-align">
        <div class="flip-box-inner">
           <div class="flip-box-front">
               <a href="cj5.php"><img src="cj5.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 875.00"></a>
               <a href="cj5.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 675.00">  Flower Cake</p></a>
           </div>
           <div class="flip-box-back">
               <a href="cj5.php"><img src="cj5.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 875.00"></a>
               <a href="cj5.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 675.00">  Flower Cake</p></a>
           </div>   


        </div>
   </div>
   <div class="flip-box scake-align">
      <div class="flip-box-inner">
         <div class="flip-box-front">
             <a href="cj6.php"><img src="cj6.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 545.00"></a>
             <a href="cj6.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 545.00">  Vanilla Cake Jar</p></a>
         </div>
         <div class="flip-box-back">
              <a href="cj6.php"><img src="cj6.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 545.00"></a>
             <a href="cj6.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 545.00">  Vanilla Cake Jar</p></a>
         </div>   
      </div>
  </div>
  </div>
  
  
  
  
  <div class="mydiv">
      <div class="flip-box scake-align">
          <div class="flip-box-inner">
             <div class="flip-box-front">
                 <a href="cj7.php"><img src="cj7.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 1075.00"></a>
                 <a href="cj7.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 1075.00">  Dark Chochlate Cake Jar</p></a>
             </div>
             <div class="flip-box-back">
                 <a href="cj7.php"><img src="cj7.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 1075.00"></a>
                 <a href="cj7.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 1075.00">  Dark Chochlate Cake Jar</p></a>
             </div>   
          </div>
     </div>
  
     <div class="flip-box scake-align">
        <div class="flip-box-inner">
           <div class="flip-box-front">
               <a href="cj8.php"><img src="cj8.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 745.00"></a>
               <a href="cj8.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 7455.00">  Dark Magic Cake Jar</p></a>
           </div>
           <div class="flip-box-back">
               <a href="cj8.php"><img src="cj8.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 745.00"></a>
               <a href="cj8.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 745.00">  Dark Magic Cake Jar</p></a>
           </div>   
        </div>
   </div>
   <div class="flip-box scake-align">
      <div class="flip-box-inner">
         <div class="flip-box-front">
             <a href="cj9.php"><img src="cj9.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 945.00"></a>
             <a href="cj9.php" style="color: black"> <p  data-toggle="tooltip" title="Rs 945.00"> Chochlate Cake</p></a>
         </div>
         <div class="flip-box-back">
             <a href="cj9.php"><img src="cj9.jpg" alt="cake" class="scake " data-toggle="tooltip" title="Rs 945.00"></a>
             <a href="cj9.php" style="color: brown"> <p  data-toggle="tooltip" title="Rs 945.00">  Chochlate Cake</p></a>
         </div>   
      </div>
  </div>
  </div>
  
  </section>









<!-----------------------------------next section-------------------------------------------------------------------->

         













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
      </script>
  
         </body>
  </html>