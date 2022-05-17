
<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Contact Pet Owner</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../HTML/Header and Footer.css">
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../HTML/contact template.css">
    


</head>

<body>
    <!-- header section starts  -->

<header>

    <a href="../HTML/Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Pet Owner.php">Home</a>
              <ul class="sub-menu" id="sub-menu-arrow"> 
                <li > <a href="Add_New_Pet.php">Add a New Pet</a></li>
                <li><a href="Pet_List.php">View Pet List</a></li>
                <li><a href="Request_List_Pet_Owner.php">View Requests List</a></li>

                <li><a href="upcoming and previous pet owner.php">View Appointments List</a> </li>
        
              </ul>
            </li>
          
            
           <li><a href="Services Pet Owner.php">Services</a></li> 
           <li><a href="../HTML/About us PetOwner.php">About Us</a></li> 
            <li><a href="Contact Pet Owner.php">Contact Us</a></li>
            <li class="move-right-btn" ><a href="#"id="profile"><i class="fa-solid fa-user" ></i></a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="../HTML/MahaB Edit Profile Page.html">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.php">Sign Out</a></li>
            
                  </ul></li>
          </ul>
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->


 <!-- Contact Us section starts  -->
<section class="contactus" id="contact us">
    <div class="image">
        <img src="../images/CONTACTUSS.svg" alt="">
    </div>
    <form method="post">
        <h1 class="heading">Contact Pet Owner</h1>
        <div class="inputbox">
            <input type="text" required>
            <label >Name</label>
        </div>
        
        <div class="inputbox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label >Message</label>
        </div>
        <input type="submit" class="btn" value="send" name="Reg">
    </form>

</section>



<!-- Contact Us section ends  -->

<!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of 
                comprehensive veterinary services to maintain your pet's health, from routine 
                exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="../HTML/Home Manager.html">Home</a>
            <a href="../HTML/Services Manager.html">Services</a>
            <a href="../HTML/About Us Manager.html">About US</a>
                
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



<!--Footer section ends-->

</body>
</html>


<?php  

if(isset($_POST['Reg'])){

   header('location: upcoming and previous manager.php');
    ob_end_flush();
   
}
 mysqli_close($db); 

?>