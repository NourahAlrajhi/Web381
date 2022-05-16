<?php 
//start
ob_start();
session_start();
//connect
$db = mysqli_connect("localhost" , "root" ,"","healed");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">

<!-- added 1 here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.svg">
        <title>Healed</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="Header and Footer.css">
        <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<!-- ended 1 here -->

    </head>
    <body class="">

<!-- added 2 here -->
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="./LnadingPage.html">Home</a>
              
            </li>
          
            
           <li><a href="./LnadingPage.html#Services">Services</a></li> 
           <li><a href="./LnadingPage.html#Aboutus">About Us</a></li> 
            <li><a href="./LnadingPage.html#contact us">Contact Us</a></li>
            
          </ul>
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>
<!-- header section ends -->
<!-- ended 2 here -->

<!-- section for whole code -->
<section class="loginpage" style="text-align: center;">
    <div class="loginFinalPos">

        <form method="post" action="Login page admin.php">
        <?php include('errors.php'); ?>
            <br><br>
            <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative;">Log in</h3>
            <br>
            <button type="button" class="loginTypeButtonChosen">Manager</button>
           <a href="./MahaB Login Page Pet Owner.html"> <button type="button" class="loginTypeButtonNotChosen">Pet Owner</button></a>
            <br><br>
            <hr class="horizontalLine"> Or <hr class="horizontalLine">
            <br><br>
            <label for="Uname">Username</label>
            <br>
            <input class="input-box" type="text" name="Uname" id="Uname" placeholder="Enter Username" required=>    
            <br><br>     
            <label for="Pass">Password</label>
            <br>  
            <input class="input-box" type="Password" name="Pass" id="Pass" placeholder="Enter Password" required=>    
            <br><br>
            <input type="checkbox" id="check"> <label for="check">Remeber me</label> <br> <br>
            <a class="loginLink" href="Reset Password.html">Forget Password?</a>
            <br><br>
           <a href="./Home Manager.html">
            <input type="submit" name="log" id="log" value="Log in"></a>
            <br><br>
            <!-- Don't have account yet? <a class="loginLink" href="MahaB Sign Up Page.html">New Account</a> -->
        </form></div>
    </section>
<!-- ended section for whole code -->

<!-- added 3 here -->
    <!-- Footer secton starts -->
    <div class="footer">
        <div class="box-container">
            <div class="box" id="footeraboutus">
                <h3>About Us</h3>
                <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                    
            </div>
            <div class="box">
                <h3>Quick links</h3>
                <a href="./LnadingPage.html">Home</a>
                
                <a href="./LnadingPage.html#Services">Services</a>
              <a href="./LnadingPage.html#Aboutus">About Us</a>
              <a href="./LnadingPage.html#contact us">Contact Us</a>
            </div>
            <div class="box">
                <h3>Find Us</h3>
                <div class="info">
                    <i class="fa-brands fa-facebook-f"></i>
                     <a href="#">Facebook</a>
                </div>
                <div class="info">
                    
                    <i class="fab fa-instagram"></i>
                                <a href="#">Instagram</a>
                </div>
                <div class="info">
      
                    <i class="fa-brands fa-twitter"></i>
                                <a href="#">Twitter</a>
                </div>
                    
            </div>
            <div class="box">
                <h3>Contact Information</h3>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>+123-456-789 <br> +111-222-3333</p>
                </div>
                    <div class="info">
                        <i class="fas fa-envelope"></i>
                        <p>costumerService@Healed.com <br> costumerService2@Healed.com</p>
                    </div>
                    <div class="info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Riyadh, Saudi Arabia - 13315</p>
                    </div>
                    
            </div>
            
        </div>
        <h1 class="credit">&copy; copyright @ 2022 by KSU Engineers</h1>
      </div>
      


<!--Footer secton ends-->
<!-- ended 3 here -->
    </body>
</html>