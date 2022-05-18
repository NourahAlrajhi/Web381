
<?php 
session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Services</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../HTML/LandingPage.css">
        <link rel="stylesheet" href="../HTML/Header and Footer.css">

    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    


</head>

<body>
    <!-- header section starts  -->

    <header>

      <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>
  
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
                    <li ><a href="Pet owner profile.php">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.php">Sign Out</a></li>
            
                  </ul></li>
          </ul>
        
          
          <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
  
  
      </nav>
  
  </header>
  
  <!-- header section ends -->

<!-- Services secton starts -->
<section class="Services" id="Services">
  <h1 class="heading">Our Services </h1>
  <div class="box-container">
      
          <ul class="cards">
              <li>
                <a href="./rquest list pet owner.html" class="card">
                  <img src="../images/Grooming&Bathing.svg" class="card__image" alt="" />
                  <div class="card__overlay">
                    <div class="card__header">
                      <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                      <div class="card__header-text">
                        <h3 class="card__title">Grooming and Bathing</h3>            
                        <span class="card__status">Book Now</span>
                      </div>
                    </div>
                    <p class="card__description">Bathing and Grooming:  Routine and therapeutic bathing services are available.  We also have a groomer available for all your pets' beauty needs.
                    </p>
                  </div>
                </a>      
              </li>
              <li>
                  <a href="./rquest list pet owner.html" class="card">
                    <img src="../images/Dentistry.svg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w/2000/svg"><path /></svg>                     
                        <div class="card__header-text">
                          <h3 class="card__title">Dentistry</h3>            
                          <span class="card__status">Book Now</span>
                        </div>
                      </div>
                      <p class="card__description">Our dental services include teeth cleaning and polishing, digital dental x-rays, tooth extractions and oral surgery.</p>
                    </div>
                  </a>      
                </li>
                <li>
                  <a href="./rquest list pet owner.html" class="card">
                    <img src="../images/Boarding.svg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <div class="card__header-text">
                          <h3 class="card__title">Boarding</h3>            
                          <span class="card__status">Book Now</span>
                        </div>
                      </div>
                      <p class="card__description">We provide pet boarding as a service to our clients. All boarders receive personal attention from our caring staff.</p>
                    </div>
                  </a>      
                </li>

              </ul>
      </div>

</section>

<!-- Services secton ends -->

<!-- Footer secton starts -->
<div class="footer">
  <div class="box-container">
      <div class="box" id="footeraboutus">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
              Nulla quis sem at nibh elementumn.</p>
              
      </div>
      <div class="box">
          <h3>Quick links</h3>
          <a href="./Home Pet Owner.html">Home</a>
          <a href="./Services Pet Owner.html">Services</a>
          <a href="./About us PetOwner.html">About US</a>
          <a href="./Contact Clinic.html">Contact Us</a>
              
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

</body>
</html>