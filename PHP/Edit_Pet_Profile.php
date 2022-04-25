
<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from PETT where Petid = $id ";
    $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $PetName = $row['Pet_Name'];
            $Gender = $row['Gender'];
            $Breed = $row['Breed'];
            $Spayed = $row['Spayed'];
            $MH = $row['Medical_History'];
            $DOB = $row['DOB'];
}

    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet Profile</title>
        <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">

<!-- added 1 here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.svg">
        <title>Healed</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../HTML/Header and Footer.css">
        <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<!-- ended 1 here -->

    </head>

    <body class="petprofbackg">

<!-- added 2 here -->
<!-- header section starts  -->

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

                <li><a href="../HTML/upcoming and previous pet owner.html">View Appointments List</a> </li>
        
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
<!-- ended 2 here -->

<!-- section for whole code -->
<section style="text-align: center">
  
  
    <div class="signUpGirl">
        <div class="animalphot">
        <img src="../images/pet profile photo new.svg" height="125px" width="125px">
        <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 52.4%; top:70.5%"></a>


        </div>
    </div>


<div class="editPetFinalPos">
        <form method="post" >
           
  
            <div class="leftAddPet">
             <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -36px;">Pet Profile</h3>
             <label for="Fname">Pet name</label>
             <br>
             <input type="text" name="Fname" id="Fname"  value="<?php echo $PetName;?>" required="">  
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 43.3%; top:28.5%"></a>
             <br><br>  
                
             <label for="Pnum">Date of Birth</label>
             <br>
             <input style="color: gray;" type="date" name="Pnum" id="Pnum"  value="<?php echo $DOB ;?>" readonly required="">  
             <br><br>
    
             <label for="Gend">Gender</label>
             <br>
             <select name="Gend111" id="Gend" required="" disabled="true">  
             <option value="hid" hidden ><?php echo $Gender;?></option>      
               <option value = "Male" > Male </option>
               <option value = "Female"> Female </option>
             </select>
             <br><br>
    
           </div>
          
           <div class="rightAddPet">
             <label for="Lname">Breed</label>
             <br>  
             <input style="color: gray;" type="text" name="Breed" id="Lname"  value="<?php echo   $Breed ;?>" readonly required="">
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.5%; top:24.5%"></a>
             <br><br>
     
             <label for="Spayed">Spayed/Neutered Status</label>
             <br>
             <select name="Spayed" id="Gend" required="">
             <option value="hid" hidden > <?php echo $Spayed;?></option>
               <option value = "Spayed/Neutered "> Spayed/Neutered </option>
               <option value = "Not Spayed/Neutered"> Not Spayed/Neutered </option>
             </select>
             <br><br>
    
             <label for="VaccList">Vaccination List</label>
             <br>
             <input type="file" name="VaccList" id="VaccList">
             <br><br>
             <label for="Lname">Medical History</label>
             <br>  
             <textarea name="MedHist" id="MedHist" ><?php echo $MH;?></textarea>
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.5%; top:63%"></a>

             <br><br>
           </div>

           <br><br><br><br><br>
           <br><br><br><br><br>
           
     
         <input type="submit" name="Reg" id="Reg" value="Save">
           
           <br><br><br><br>
        </form>
  </div>
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
<!-- ended 3 here -->
    </body>
</html>


<?php  
    $id = $_GET['id'];
if(isset($_POST['Reg'])){

$PetName = $_POST['Fname'];
$Spayed = $_POST['Spayed'];
$MH = $_POST['MedHist'];


$qry = "update PETT set Pet_Name = '$PetName'  , Spayed= '$Spayed' , Medical_History= '$MH'  where Petid = $id ";

if(mysqli_query($db,$qry)){
   // echo '<script>alert("changes updated successfully.!!");</script>';
   header('location: Pet_List.php?id={$id}');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}




?>