<?php 
ob_start();
session_start();

//$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/logo.svg">
	<title>Give Us Your Feedback! </title>
   <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../HTML/Header and Footer.css">
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    
  
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
</head>
<body >
  <header>
    <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Pet Owner.html">Home</a>
              <ul class="sub-menu" id="sub-menu-arrow"> 
                <li > <a href="Add_New_Pet.php">Add a New Pet</a></li>
                <li><a href="Pet_List.php">View Pet List</a></li>
                <li><a href="Request_List_Pet_Owner.php">View Requests List</a></li>

                <li><a href="upcoming and previous pet owner.php">View Appointments List</a> </li>
        
              </ul>
            </li>
          
            
           <li><a href="../HTML/Services Pet Owner.html">Services</a></li> 
           <li><a href="../HTML/About us PetOwner.html">About Us</a></li> 
            <li><a href="../HTML/Contact Clinic.html">Contact Us</a></li>
            <li class="move-right-btn" ><a href="#"id="profile"><i class="fa-solid fa-user" ></i></a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="../HTML/MahaB Edit Profile Page.html">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.html">Sign Out</a></li>
            
                  </ul></li>
          </ul>
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->

<section class="ReviewMsec">
    <div class="ReviewRow"><h5 class="Heading" style="font-size: 3rem;">Feedback</h5>
    <div class="cardReveiw" >
        <div class="card">
         
          <div class="picP5">
           <img src="../HTML/doctor3.svg" alt="Doctor and cat picture">
          </div>
          
            <div class="container">
              
              <form  method="post">
               <p class="Heading" style="font-size: 1.8rem;">How was our service?</p>
               
              <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
         
           
              
              <div class="Q">
                <p class="Heading" style="font-size: 1.8rem;">How was your visit?</p>

               <!-- checked -->
              <div class="rate" >
                <input type="radio" id="stars5" name="rate2" value="5"  />
                <label for="stars5" title="text">5 stars</label>
                <input type="radio" id="stars4" name="rate2" value="4" />
                <label for="stars4" title="text">4 stars</label>
                <input type="radio" id="stars3" name="rate2" value="3" />
                <label for="stars3" title="text">3 stars</label>
                <input type="radio" id="stars2" name="rate2" value="2" />
                <label for="stars2" title="text">2 stars</label>
                <input type="radio" id="stars1" name="rate2" value="1" />
                <label for="stars1" title="text">1 star</label>
              </div>
            </div>
          
            <div class="commReview">
            <textarea id="comrev" name="comments_review" placeholder="Would you like to add any comments?" ></textarea>
          </div>
        </div>
        <div class="Reviewbutton">
          <input class="button" type="submit" name="feedback" value="Submit">
        </div>
        

    </div>
    
</div>

</form>

</section>

<!-- Footer secton starts -->
<div class="footer">
  <div class="box-container">
      <div class="box" id="footeraboutus">
          <h3>About Us</h3>
          <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine..</p>
              
      </div>
      <div class="box">
          <h3>Quick links</h3>
          <a href="#">Home</a>
          <a href="#">Services</a>
          <a href="#">About US</a>
          <a href="#">Contact Us</a>
              
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
<?php    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

       $FEEDBACK = $_POST['comments_review'];
       $Service_rate = $_POST['rate'];
       $visit_rate = $_POST['rate2'];

       $id = $_GET['id'];

    $query="INSERT INTO Feedback (FEEDBACK,Service_rate,Visit_rate,Appid) VALUES ('".$FEEDBACK."','".$Service_rate."','".$visit_rate."','". $id ."');";
    $result=mysqli_query($database, $query);

    if($result){
        header("location: upcoming and previous pet owner.php");
ob_end_flush();}
    else{
        echo "An error occured while inserting into the Feedback table.";}
}
mysqli_close($database); 
?>