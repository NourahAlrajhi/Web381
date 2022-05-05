
<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");


?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Set Available Appointment </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../HTML/Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
   <script src="script.js"></script>
   <style>
div.addPetCirc{
    position: relative; left: 41.5%; top: 210px;
    background: #F0EFEF;
    border-radius: 50%;
    width: 130px;
    height: 130px;
    margin-left: 50px;
    margin-bottom: 2%;
}
#addPetCirc3{
    position: relative;
    z-index: 4;
    border-radius: 50%;
    width: 140px;
    height: 140px;
    cursor: pointer;
}</style>
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
                    <li > <a href="../HTML/MahaB Add A Service Page.html">Add a New Service</a></li>
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

<h3 class="Heading" style="font-size: 3rem;">Set Available Appointments</h3>
<form action='Set_Appo.php' method ='post' enctype="multipart/form-data">
  <div class= "ServiceSelect">
   <lable class = "LablM"> Service <br>
      <select name= "petname" class = "fieldselect" aria-placeholder="Choose Service" required>
         <option value="" disabled selected hidden>Choose Service</option>
        <?php   

$qry = "select Service_NAME from Manager_Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

<option value=<?php echo $row['Service_NAME'] ?> > <?php echo $row['Service_NAME'] ?> </option>
       <!--  <option class="op"> Grooming And Bathing </option>
          <option class="op"> Dentistry </option>
          <option class="op"> Boarding </option>-->

          <?php 

}
}
?>
          </select>
   </lable>
   
     
  </div>
  
  
  <div class="circle">

      <img id="addPetCirc3" src='../images/camera2.svg' onclick="triggerClick()" >

     <label>
 
  <input type="file" name="profileImage" style="display:none"  id="ProfileImage" onchange="displayImage(this)" >
</label>

  </div>

</div>
<div class="PageRows">

   
     <div class= "DateSelect" >
   <lable class = "LablM">Date <br>
      <input type="Date" id="dateS" required name="DATE">
     </lable>
     </div>

 
  <div class="TimeSelect" >
   <lable class = "LablM"> Time <br>
     <input type="time" id="timeS" required name="TIME">
     </lable>
    
  </div>

     
     
   
   </div>
   <img  src="Parrot.svg" class="parrotimg">
   <div class="ButtonRow">
         <input class="button" type="submit" name="set_Appointment" value="Add Appointment">
         
   </div>

   </div>
   
</form>
  
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

       $Service = $_POST['petname'];
       $Date = $_POST['DATE'];
       $Time = $_POST['TIME'];
       //$Picture =  $_POST['camera'];
       if(isset($_POST['set_Appointment'])){
        $profileImageName = time().'_'.$_FILES['profileImage']['name'];
        $target = 'Content/'.$profileImageName;
        move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);   
        }

    $query="INSERT INTO Services (Service_name, Date, Time,Picture ) VALUES ('". $Service."','".$Date."','". $Time."','".  $profileImageName."');";
    $result=mysqli_query($database, $query);

    if($result){
        header("location: Appo_List.php");
ob_end_flush();}
    else{
        echo "An error occured while inserting into the Services table.";}
}

mysqli_close($db);
?>
<?php
$sql = "SELECT * from Services";
$run = $db -> query($sql);
if(!empty($run -> num_rows) && ($run -> num_rows >0)){
      while($row = $run -> fetch_assoc()){
          $id= $row['Serviceid'];
      }
}
?>
<?php 
if(isset($_POST['set Appointment'])) {
    $img_name=$_FILES['img_upload']['name'];
    $tmp_img_name=$_FILES['img_upload']['tmp_name'];
    $random_number=rand(1,100);
    if($img_name==''){
        echo "<script>alert('please select img')</script>";
        //echo "<script>window.open('Set_Appo.php?')</script>"
    }else{
        move_uploaded_file($tmp_img_name,$img_name);
        
    }
    
}?>
