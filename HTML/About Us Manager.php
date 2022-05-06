
<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>About Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./test.css">
  
        <link rel="stylesheet" href="./Header and Footer.css">

    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</head>

<body>
    <!-- header section starts  -->

    <header>

      <a href="./Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

      <input type="checkbox" id="menu-bar">
      <label for="menu-bar" class="fas fa-bars"></label>
  
      <nav class="navbar">
          <ul class="nav-list">
              <li  ><a href="./Home Manager.html">Home</a>
                  <ul class="sub-menu" id="sub-menu-arrow"> 
                    <li > <a href="./MahaB Add A Service Page.html">Add a New Service</a></li>
                    <li><a href="./availabel apointment manager.html">Set a New Appointment</a></li>
                    <li><a href="./request list manager.html">View Requests List</a></li>
    
                    <li><a href="./upcoming and previous manager.html">View Appointments List</a> </li>
            
                  </ul>
                </li>
            
              
             <li><a href="./Services Manager.html">Services</a></li> 
             <li><a href="./About Us Manager.html">About Us</a></li> 
              <li class="move-right-btn" ><a href="#"id="profile"><i class="fa-solid fa-user-doctor" ></i></a>
                  <ul class="sub-menu" id="sub-menu-arrow2"> 
                      <li ><a href="#">View Profile</a></li>
                      <li><a href="./LnadingPage.html">Sign Out</a></li>
              
                    </ul></li>
            </ul>
          
          <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
  
  
      </nav>
  
  
  </header>
  
  <!-- header section ends -->

<!-- Services secton starts -->
<section class="Services" id="Services">
    <h1 class="heading">About Us </h1>
   <!--<p id='AboutUs-P' class="AboutUs-P">We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine. </p>-->
    <textarea id='AboutUs-P'  class="AboutUs-P" disabled="disabled"   >We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</textarea>
    
    <div class="box-container">
        
            <ul class="cards">
                <li class="Aboutuscard">
                 <!-- <a href="" class="card">-->
                 <div class="card">
                    <img src="doctorM.svg" id='adPic1' class="card__image" alt=""  />
                    <input type="file" name="profileImage" style="display:none"  id="AboutUsImage1" >
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <div class="card__header-text">
                          
                          <h3 class="card__title">Our Pet Care Philosophy</h3> 
                          
                              
                        </div>
                      </div>
                      <textarea class='cardDescription' id='cardDescription1' disabled="disabled" >We understand that great veterinary care begins with taking the time to get to know your pet and talking with you. We value your relationship with us and are happy to have you join our veterinary family.</textarea>
                    </div>
                    
 
                 <!-- </a>-->
</div>
                  
                </li>
                <li class="Aboutuscard">
                      <!-- <a href="" class="card">-->
                      <div class="card">
                      <img id='adPic2' src="clinic2.svg" class="card__image" alt=""   />
                      <input type="file" name="profileImage" style="display:none"  id="AboutUsImage2" >
                      <div class="card__overlay">
                        <div class="card__header" >
                          <svg class="card__arc" xmlns="http://www.w/2000/svg" ><path /></svg>                     
                          <div class="card__header-text">
            
                            <h3 class="card__title">Why Trust Us?</h3>            
                          </div>
                        </div>
                        <textarea class='cardDescription' id='cardDescription2' disabled="disabled" >You'll love our highly skilled compassionate veterinarians,We offer a comprehensive range of services in one spot And We prioritize your pet's long-term health by focusing on preventive services.</textarea>
                      </div>
                    <!-- </a>--> 
                    </div>    
                  </li>
                  <li class="Aboutuscard">
                <!-- <a href="" class="card">-->
                <div class="card">
                      <img src="locationAboutus.svg" id='adPic3'  class="card__image" alt=""   />
                      <input type="file" name="profileImage" style="display:none"  id="AboutUsImage3" >
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                          <div class="card__header-text">
                            <h3 class="card__title">Where To find us?</h3>            
                          </div>
                        </div>
                        <textarea class='cardDescription' id='cardDescription3' disabled="disabled" >-District Unit No.1، Prince Muhammad Ibn Saad Ibn Abdulaziz Rd, Al Aqiq, Riyadh 13511<br> -8255 Al Imam Saud Ibn Abdul Aziz Branch Rd, King Fahd, 2993 , Riyadh 12274</textarea>
                      </div>
                      <!-- </a>-->   
                      </div>  
                  </li>

                </ul>
        </div>
        <input class="button" type="submit" name="EditBtn" value="Edit" onclick='editFunc()'>
        <input class="button" type="submit" name="SaveBtn" value="Save" onclick='SaveFunc()'>
</section>


<!-- Services secton ends -->

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
<script>
function editFunc(){
  window.alert('jkndf');
  document.getElementById("AboutUs-P").disabled = false;
  CardDesc1=document.getElementById("cardDescription1");
  CardDesc2=document.getElementById("cardDescription2");
  CardDesc3=document.getElementById("cardDescription3");
  AboutImage1 =document.querySelector('#AboutUsImage1');
  AboutImage2 =document.querySelector('#AboutUsImage2');
  AboutImage3 =document.querySelector('#AboutUsImage3');
  CardDesc1.disabled = false;
  CardDesc2.disabled = false;
  CardDesc3.disabled = false;
  CardDesc1.style.cursor='text';
  CardDesc2.style.cursor='text';
  CardDesc3.style.cursor='text';


document.querySelector('#adPic1').onclick=function (){
  window.alert('jyy77f');
  document.querySelector('#AboutUsImage1').click();
}
document.querySelector('#adPic2').onclick=function (){
  window.alert('334');
  document.querySelector('#AboutUsImage2').click();
}
document.querySelector('#adPic3').onclick=function (){
  window.alert('211');
  document.querySelector('#AboutUsImage3').click();
}
  document.querySelector('#AboutUsImage1').onchange=function (){
    window.alert('7776');
  displayImage1(this);
}
document.querySelector('#AboutUsImage2').onchange=function (){
    window.alert('99');
  displayImage2(this);
}
document.querySelector('#AboutUsImage3').onchange=function (){
    window.alert('00');
  displayImage3(this);
}

function displayImage1(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic1').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
}
function displayImage2(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic2').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
}
function displayImage3(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic3').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
} 

}
function SaveFunc(){
  document.getElementById("AboutUs-P").disabled = true;
  CardDesc1=document.getElementById("cardDescription1");
  CardDesc2=document.getElementById("cardDescription2");
  CardDesc3=document.getElementById("cardDescription3");
  CardDesc1.disabled = true;
  CardDesc2.disabled = true;
  CardDesc3.disabled = true;
  CardDesc1.style.cursor='default';
  CardDesc2.style.cursor='default';
  CardDesc3.style.cursor='default';
  AboutImage1 =document.querySelector('#AboutUsImage1');
  AboutImage2 =document.querySelector('#AboutUsImage2');
  AboutImage3 =document.querySelector('#AboutUsImage3');
  AboutImage1.disabled=true;
  AboutImage2.disabled=true;
  AboutImage3.disabled=true;
 

}
//function triggerClick(o){
 //if(.)
   /// document.querySelector('#AboutUsImage1').click();
   // document.querySelector('#AboutUsImage1').click();
//}
  
</script>
<style>
        .button{
            border: none;
            padding: 7px 80px;
            border-radius: 20px;
            background-color: #635DAD;
            opacity: 62%;
            color: white;
            position: relative;
    left: 400px;
            
    }
    .button:hover { 
            opacity: 100%;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 50, 0.3);
         }
.cardDescription{
         font-size: 1.1em;
    max-height: 209px;
    max-width: 350px;
    width: 349px;
    height: 96px;
    padding: 0 20px 20px 20px;
  cursor: default;}
  .card__image{
    cursor: default;

  }

  </style>
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

    $query="INSERT INTO AboutUs () VALUES ('". $Service."','".$Date."','". $Time."','".  $profileImageName."');";
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
