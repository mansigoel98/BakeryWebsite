<?php
@ob_start();
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}
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


.annh{
    text-align: center;
    font-size: 50px;
    font-style: italic;
    color: brown;
    font-family: cursive;
    margin-top: 20px;
    margin-bottom:20px; 
    
}
.annh1{
    text-align: center;
    font-size: 25px;
    font-style: italic;
    color: brown;
    font-family: cursive;
    margin-top: 30px;
    margin-bottom:20px; 
    
}


.btdes{
    background-color: green;
    color: white;
    margin:20px;
    width: 200px;
   
    padding: 12px 16px; 
    text-decoration: none;
  font-size: 16px; 
  cursor: pointer;
}
.btdes2{
    background-color: brown;
    color: white;
    margin-left:79%;
    width: 200px;
   
    padding: 12px 16px; 
    text-decoration: none;
  font-size: 16px; 
  cursor: pointer;
}
.cartdiv{
    margin:100px;
    background-color:white;
    width:1130px;
    padding:40px;
    border: 5px solid brown;
}
.cartdetails{
    
    margin-left:40px;
}
.btdes:hover {
  background-color: rgb(89, 201, 89);
  text-decoration:none;
  color:white;
}
.btdes2:hover {
  background-color:rgb(194, 73, 73);
  text-decoration:none;
  color:white;
}

.btremove{
    background-color:red;
    color: white;

    margin: 20px;
    width: 100px;
    padding: 12px 16px; 
    text-decoration: none;
  font-size: 16px; 
  cursor: pointer;
}
.btremove:hover {
  background-color: rgb(231, 55, 55);
  text-decoration:none;
  color:white;
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

<!------------------------------------------next section-------------------------------------------------------------->



<h1 class="annh">Address Book </h1>
       <div class="cartdiv"> 
        <?php
        $username=$_SESSION['username'];
        $con =mysqli_connect('localhost','mansi','mansi');
       if($con)
           {
              mysqli_select_db($con,'bakery');
              $q = "select * from address where username='$username'";
              $result = mysqli_query($con,$q);
              $num=mysqli_num_rows($result);
              if($num==0){
                echo "<h1 class='annh'>No address added</h1>";
              }
              else{

               echo "<a href='checkout.php'  class='btdes2'>Proceed to Checkout</a>";
                
                $num=mysqli_num_rows($result);
               for($i=1 ;$i<=$num;$i++) {
               $row=mysqli_fetch_array($result);
               $addid=$row['addid'];
               $username=$row['username'];
               $name=$row['name'];
               $mobile=$row['mobile'];
               $street=$row['street'];
                $city=$row['city'];
                $state=$row['state'];
                $country=$row['country'];
                $pin=$row['pin'];
               
                ?>
                <div style="border-bottom : 2px solid grey">
                <?php
                echo "<h5 class='cartdetails'>$name</h5>";
                echo "<h5 class='cartdetails'>Phone number: $mobile</h5>";
                echo "<h5 class='cartdetails'>$street</h5>";
                echo "<h5 class='cartdetails'>City : $city</h5>";
                echo "<h5 class='cartdetails'>State : $state</h5>";
                echo "<h5 class='cartdetails'>Country : $country</h5>";
                echo "<h5 class='cartdetails'>Pincode : $pin</h5>";
                ?>
                 <form method="POST">
                <button type="submit" name="secadd" class="btdes" value="<?php echo "$addid"  ?>" formaction="selectadd.php" >Select Address</button>


                <?php   
                $k = "select * from defadd where addid='$addid'";
                $res = mysqli_query($con,$k);
                $nu=mysqli_num_rows($res);
                if($nu==0){
                  ?>

                   <button type="submit" name="def" class="btdes" value="<?php echo "$addid"  ?>" formaction="setasdefault.php">Set As Default</button>
                  
                  <?php
                }
                else {
                  echo "<span>Default Address</span>";
                }
                ?>

                <button type="submit" class="btremove"  name="removeadd" value ="<?php echo "$addid"  ?>" formaction="removeAdd.php">Remove</button>
               </form>
                </div>
               
                <?php
              }
              echo "<br><br>";
            }
              ?>
              <a href="addAdress.php"><button type="button" class="btdes" style="margin-left:40%"> Add Address</button></a>
             <?php
        } 
        mysqli_close($con);
           ?>

      </div>














<!--------------------------------------------------next section------------------------------------------------------>
        
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