<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from Services where Serviceid = $id ";
    $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $service = $row['Service_name'];
            $Date = $row['Date'];
            $Time = $row['Time'];
            
}

    }
}


?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Appointment Details </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../HTML/Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
</head>
<body>
   <header>
      <a href="../HTML/Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

      <input type="checkbox" id="menu-bar">
      <label for="menu-bar" class="fas fa-bars"></label>
  
      <nav class="navbar">
          <ul class="nav-list">
              <li  ><a href="../HTML/Home Manager.html">Home</a>
                  <ul class="sub-menu" id="sub-menu-arrow"> 
                    <li > <a href="Add_service.php">Add a New Service</a></li>
                    <li><a href="Appo_List.php">Set a New Appointment</a></li>
                    <li><a href="Request_List_Manager.php">View Requests List</a></li>
    
                    <li><a href="upcoming and previous manager.php">View Appointments List</a> </li>
            
                  </ul>
                </li>
            
              
             <li><a href="../HTML/Services Manager.html">Services</a></li> 
             <li><a href="../HTML/About Us Manager.html">About Us</a></li> 
              <li class="move-right-btn" ><a href="#"id="profile"><i class="fa-solid fa-user-doctor" ></i></a>
                  <ul class="sub-menu" id="sub-menu-arrow2"> 
                      <li ><a href="#">View Profile</a></li>
                      <li><a href="../HTML/LnadingPage.html">Sign Out</a></li>
              
                    </ul></li>
            </ul>
          
          <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
  
  
      </nav>
  
  </header>
  
  <!-- header section ends -->
  <section class="AppointmentSec">
     <div class="PageBase">
<div class="PageRows">

<h3 class="Heading" style="font-size: 3rem;">Appointment Details</h3>

<form action="#" method="post">
  <div class= "ServiceSelect">
   <lable class = "LablM"> Service <br>
   <select name="service" id="Gend" required="">
   <option value="hid" hidden > <?php echo  $service;?></option>
   <?php   

$qry = "select Service_NAME from Manager_Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

<option value=<?php echo $row['Service_NAME'] ?> > <?php echo $row['Service_NAME'] ?> </option>
<?php 

}
}
?>
</select>
   </lable>
     
  </div>
  <div class="circle">
   <div id="circle"><div id="camera">
      <i class="fa-solid fa-camera fa-4x"></i>
     </div>
  </div>

</div>
<div class="PageRows">

   
     <div class= "DateSelect" >
   <lable class = "LablM">Date <br>
      <input style="color: gray;" type="Date" id="dateS" value="<?php echo $Date ;?>" name="DATE" >
     </lable>
     </div>

 
  <div class="TimeSelect" >
   <lable class = "LablM"> Time <br>
     <input style="color: gray;" type="time" id="timeS" value="<?php echo $Time ;?>" name="TIME" >
     </lable>
    
  </div>

     
     
   
   </div>
   <div class="BackButtonDetails">
    <button name="BACK"><a class="button" >Back</a></button>
      </div>
    </div>
   
</form>
<div class="GirlDogimg"><img src="../HTML/girl and dog.svg" width="300px"></div>
</section>

<!-- Footer secton starts -->
<div class="footer">
   <div class="box-container">
       <div class="box" id="footeraboutus">
           <h3>About Us</h3>
           <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
               
       </div>
       <div class="box">
           <h3>Quick links</h3>
           <a href="./Home Manager.html">Home</a>
           <a href="./Services Manager.html">Services</a>
           <a href="./About Us Manager.html">About US</a>
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

<?php  
    $id = $_GET['id'];
if(isset($_POST['BACK'])){

    $Service = $_POST['service'];
    $Date = $_POST['DATE'];
    $Time = $_POST['TIME'];
    

$qry = "update Services set Service_name = '$Service'  , Date= '$Date' , Time= '$Time'  where Serviceid = $id ";

if(mysqli_query($db,$qry)){
   // echo '<script>alert("changes updated successfully.!!");</script>';
   header('location: Appo_List.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}




?>