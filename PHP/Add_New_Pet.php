
<?php 
$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add New Pet</title>
        <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script> -->

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

    <body class="addpetbackg">

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
                <li > <a href="../HTML/MahaB Add New Pet.html">Add a New Pet</a></li>
                <li><a href="../HTML/my pit list pet owner.html">View Pet List</a></li>
                <li><a href="../HTML/rquest list pet owner.html">View Requests List</a></li>

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
    <div class="addPetFinalPos">
        <div class="addPetCirc">
               <div class="signUpCam">
                   <i class="fa-solid fa-camera fa-2xl"></i>
                   <a href="#"><img class = "back8" src ="./edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>

               </div>
        </div>
        
        <form action="../HTML my pit list pet owner.html" method="post">
           <div class="leftAddPet">
            <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -16px;">Add New Pet</h3>
             <label for="Fname">*Pet name</label>
             <br>
             <input type="text" name="Fname" id="Fname" placeholder="Enter Pet name" required="">  
             <br><br>  
                
             <label for="Pnum">*Date of Birth</label>
             <br>
             <input type="date" name="Pnum" id="Pnum" required="">    
             <br><br>
    
             <label for="Gend">*Gender</label>
             <br>
             <select name="Gend" id="Gend" placeholder="Choose Gender" required="">
               <option value = "" disabled selected hidden> Choose Gender </option>
               <option value = "Male"> Male </option>
               <option value = "Female"> Female </option>
             </select>
             <br><br>
    
           </div>
          
           <div class="rightAddPet">
             <label for="Lname">*Breed</label>
             <br>  
             <input type="text" name="Breed" id="Lname" placeholder="Enter Breed" required="">
             <br><br>
     
             <label for="Gend">*Spayed/Neutered Status</label>
             <br>
             <select name="Gend2" id="Gend" placeholder="Choose Status" required="">
               <option value = "" disabled selected hidden> Choose Status </option>
               <option value = "Male"> Spayed/Neutered </option>
               <option value = "Female"> Not Spayed/Neutered </option>
             </select>
             <br><br>
    
             <label for="VaccList">Vaccination List</label>
             <br>
             <input type="file" name="VaccList" id="VaccList">
             <br><br>
             <label for="Lname">Medical History</label>
             <br>  
             <textarea name="MedHist" id="MedHist" placeholder="Enter Medical History"></textarea>
             <br><br>
           </div>

           <br><br><br><br><br>
           <br><br><br><br><br>
           <input type="submit" name="Reg" id="Reg" value="Add Pet">
           
           <br><br><br><br>
        </form>
    </div>
      </section>
      <!-- ended section for whole code -->

      <!-- added 3 here -->
    <!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="../HTML/Home Pet Owner.html">Home</a>
            <a href="../HTML/Services Pet Owner.html">Services</a>
            <a href="../HTML/About us PetOwner.html">About US</a>
            <a href="../HTML/Contact Clinic.html">Contact Us</a>
                
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
<!-- ended 3 here -->
    </body>
</html>

<?php    



if(isset($_POST['Reg'])){

$PetName = $_POST['Fname'];
$Gender = $_POST['Gend'];
$Breed = $_POST['Breed'];
$Spayed = $_POST['Gend2'];
$MH = $_POST['MedHist'];
$DOB = $_POST['Pnum'];

$qry = "insert into Pet values(null , '$PetName' , '$Gender' , '$Breed' , '$Spayed' , '$MH' , '$DOB')";
if(mysqli_query($db,$qry)){
echo '<script>alert("Pet added successfully.");</script>';
header('location : Add_New_Pet.php');
}else{
    echo mysqli_error($db);
}
}

?>