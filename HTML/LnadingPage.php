<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Healed</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./LandingPage.css">
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
            <li  ><a href="#home">Home</a>
              
          
           <li><a href="#Services">Services</a></li> 
           <li><a href="#about us">About Us</a></li> 
            <li><a href="#contact us">Contact Us</a></li>
            <li class="move-right-btn" ><a href="../PHP/Login page pet owner.php"id="profile">Login</a>
              </li>
                
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <div class="writtenContent" >
        <h3><span>Healed </span>Veterinary Clinic</h3>
        <h3>We Make Your Pets Look Thier Best!</h3>
        <p > <strong style="font-size: 2rem;">Hello!</strong>  We help your little friends to be healthy and you to be happy! Our clinic Healed have the latest equipment and the best specialists.  </p>
        <a href="../PHP/Sign up page.php" class="btn">Sign Up Now</a>
        </div>
        <div class="image">
            <img src="../images/dog&cat.svg" alt="">
        </div>

    </div>

</section> 

<!-- home section ends  -->
<!-- Services section starts  -->

<section class="Services" id="Services">
    <h1 class="heading">Our Services </h1>
    <div class="box-container">
        
            <ul class="cards">
                <li>
                  <a href="./MahaB Login Page Pet Owner.html" class="card">
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
                    <a href="./MahaB Login Page Pet Owner.html" class="card">
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
                    <a href="./MahaB Login Page Pet Owner.html" class="card">
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
<!-- Services section ends  -->

<!-- About Us section starts  -->

<section class="aboutus" id="about us">
    <h1 class="heading">about us</h1>
    <div class="column">
        <div class="container1">
            <div class="card1">
              <h2 class="abouth2">Learn More</h2>
              <i class="fas fa-arrow-right"></i>
            <div class="imgandtext">
              <p class="aboutP">We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
              <div class="pic"></div>
              
            </div>
              
              
              <button onclick="window.location.href = './about us landingP.html' "class="aboutbutton">
              </button>
            </div>
    </div>


</section>


<!-- About Us section ends  -->

<!-- Contact Us section starts  -->
<section class="contactus" id="contact us">
    <div class="image">
        <img src="../images/CONTACTUSS.svg" alt="">
    </div>
    <form action="">
        <h1 class="heading">Contact Us</h1>
        <div class="inputbox">
            <input type="text" required>
            <label >Name</label>
        </div>
        <div class="inputbox">
            <input type="email" required>
            <label >Email</label>
        </div>
        <div class="inputbox">
            <input type="number" required>
            <label >Phone</label>
        </div>
        <div class="inputbox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label >Message</label>
        </div>
        <input type="submit" class="btn" value="send" h>
    </form>

</section>



<!-- Contact Us section ends  -->

<!-- Footer secton starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about us">About US</a>
            <a href="#contact us">Contact Us</a>
                
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