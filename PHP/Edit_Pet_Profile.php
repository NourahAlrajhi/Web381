<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
   
    $id =$_GET['id'];
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
            $Profile_Pic = $row['Profile_Pic'];
}

    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet Profile</title>
        <link rel="stylesheet" type="text/css"  />

<!-- added 1 here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.svg">
        <title>Healed</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../HTML/Header and Footer.css">
        <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
<!-- ended 1 here -->
<style>
.petprofbackg{
    background: url(../images/ResetB.svg) no-repeat; /*******/
    background-size: cover;
    background-position: center;
    z-index: -1;
}
</style>
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
<!-- ended 2 here -->

<!-- section for whole code -->
<section style="text-align: center">
  
  
    <div class="signUpGirl">
    <form method="post" action="Edit_Pet_Profile.php?id=<?php echo $id;?>" enctype="multipart/form-data" class="Tryy">

        <div class="animalphot">
        <img src="Content/<?php echo $Profile_Pic;?>" style="position: relative; left: -0.5%;top: 57px;  border-radius: 50%;width: 16%; margin-left: 50px;margin-bottom: 2%;" onclick="triggerClick()" id="addPetCirc3">
        <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 52.4%;top:49.5%;"></a>
        <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style="display:none; Position: absolute;left: 47.4%; top: 134px;" >



        </div>
    </div>


<div class="editPetFinalPos" style=" margin-top: -15%;">
           
  
            <div class="leftAddPet" style="display: inline-block; width: 27.5%; margin-right: 12%;">
             <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -36px;">Pet Profile</h3>
             <label for="Fname" style="position: relative;left: -68px;">Pet name</label>
             <br>
             <input name="Fname"  type="text" value="<?php echo $PetName;?>"  required=""   style=" height: 30px;  width: 70%; outline: none; border-radius: 5px; position: relative;left: -68px;border-radius: 5px; 
    border: 1px solid #F0EFEF ;  background-color:#F0EFEF;  padding-left: 15; font-size: 12px;">
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 43.3%;top: 49.2%;"></a>
             <br><br>  
                
             <label for="Pnum" style="position: relative;left: -68px;">Date of Birth</label>
             <br>
             <input input style="color: gray; height: 30px;  width: 70%; outline: none;border-radius: 5px;  border: 1px solid #F0EFEF ; background-color:#F0EFEF; position: relative;left: -66px;padding-left: 15;  font-size: 12px;" type="date" name="Pnum" id="Pnum"  value="<?php echo $DOB ;?>" readonly required="">  
             <br><br>
    
             <label for="Gend" style="position: relative;left: -68px;">Gender</label>
             <br>
             <select name="Gend111" id="Gend" required="" disabled="true" style=" height: 30px;width: 70.2%;    outline: none; border-radius: 5px; border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;margin-bottom: 1ex;position: relative;left: -64px;">
             <option value="hid" hidden ><?php echo $Gender;?></option>      
               <option value = "Male" > Male </option>
               <option value = "Female"> Female </option>
             </select>
             <br><br>
    
           </div>
          
           <div class="rightAddPet" style="display: inline-block; position: relative; top: 123px;">
             <label for="Lname">Breed</label>
             <br>  
             <input style="color: gray; height: 30px; width: 123%; outline: none;border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;" type="text" name="Breed" id="Lname"  value="<?php echo   $Breed ;?>" readonly required="">
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 124.5%; top: 27.5%;"></a>
             <br><br>
     
             <label for="Spayed">Spayed/Neutered Status</label>
             <br>
             <select name="Spayed" id="Gend" required="" style="  height: 30px; width: 121.2%; outline: none;border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;margin-bottom: 1ex;">             <option value="hid" hidden > <?php echo $Spayed;?></option>
               <option value = "Spayed/Neutered "> Spayed/Neutered </option>
               <option value = "Not Spayed/Neutered"> Not Spayed/Neutered </option>
             </select>
             <br><br>
 
   
             <label for="VaccList">Vaccination List</label>
             <br>
            
             <a href="displayContent.php?id= <?php  echo $id; ?>" style="margin-left: 15%;">>Vaccination details</a>
             <br><br>
  
             <label for="Lname">Medical History</label>
             <br>  
             
             <textarea name="MedHist" id="MedHist" style="height: 100px; width: 158%; outline: none; border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px; position: relative; left: -21px;"><?php echo $MH;?></textarea>
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position: absolute;left: 148.5%; top: 59%;"></a>

             <br><br>
           </div>

           <br><br><br><br><br>
           <br><br><br><br><br>
           
     
         <input type="submit" name="Reg" id="Reg" value="Save" style="width: 300px;  height: 30px;  border: none;   border-radius: 17px;   padding-left: 7px;  background-color: #635DAD; opacity: 62%;color: white;cursor: pointer; ">
           
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
if(isset($_POST['Reg'])){
  
$PetName = $_POST['Fname'];
$Spayed = $_POST['Spayed'];
$MH = $_POST['MedHist'];
if (!file_exists($_FILES['ProfileImage']['tmp_name']) || !is_uploaded_file($_FILES['ProfileImage']['tmp_name'])) 
{
    echo 'No upload';
    $imageprofile=$Profile_Pic;
    $qry="update PETT set Pet_Name = '$PetName' , Spayed= '$Spayed' , Medical_History= '$MH' , Profile_Pic='$imageprofile' where Petid = $id ; ";
$result=mysqli_query($db,$qry);
if($result){
   // echo '<script>alert("changes updated successfully.!!");</script>';
  header('location: Pet_List.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}
   

else
{
    echo 'upload';
    $imageprofile=$_FILES['ProfileImage']['name'];
$imageprofile_tem_loc=$_FILES['ProfileImage']['tmp_name'];
    // Your file has been uploaded

//$imageprofile = isset($_FILES['ProfileImage']) ? $_FILES['ProfileImage']['name'] : '$Profile_Pic';


$PDF_store='Content/';

$MOVE2=move_uploaded_file($imageprofile_tem_loc, $PDF_store.$imageprofile);

$qry="update PETT set Pet_Name = '$PetName' , Spayed= '$Spayed' , Medical_History= '$MH' , Profile_Pic='$imageprofile' where Petid = $id ; ";

  

$result=mysqli_query($db,$qry);
if($result){
   // echo '<script>alert("changes updated successfully.!!");</script>';
   header('location: Pet_List.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}

}
mysqli_close($db);

?>