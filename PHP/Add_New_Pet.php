
<?php 
ob_start();
session_start();

//$db = mysqli_connect("localhost" , "root" ,"","healed");
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
        <script src="script.js"></script>
<!-- ended 1 here -->
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
    left: -1.5%;
    top: 57px;
    border-radius: 50%;
    width: 16%;
    /* display: block; */
    margin-left: 50px;
    margin-bottom: 2%;
}
div.signUpCam{
    position: relative;
    top: 45%;
    color:#635DAD;
    opacity: 62%;
    width: -104px;
    height: 106px;
}
</style>
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
    <div class="addPetFinalPos">
    <form method="post" action="Add_New_Pet.php" enctype="multipart/form-data" class="Tryy">
        <div class="addPetCirc2" >
               <div class="signUpCam">
                  <img src="../images/camera2.svg" onclick="triggerClick()" id="addPetCirc3" > 
                 <!--  <i class="fa-solid fa-camera fa-2xl"></i>-->
                   <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style=" display:none; Position: absolute;left: 47.4%; top: 134px;" >
                  <!-- <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>-->

               </div>
        </div>
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
             <select name="Spayed" id="Gend" placeholder="Choose Status" required="">
               <option value = "" disabled selected hidden> Choose Status </option>
               <option value = "Spayed/Neutered Status"> Spayed/Neutered </option>
               <option value = "Not Spayed/Neutered"> Not Spayed/Neutered </option>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  pre_r($_FILES);

 
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

       $PetName = $_POST['Fname'];
       $Gender = $_POST['Gend'];
       $Breed = $_POST['Breed'];
       $Spayed = $_POST['Spayed'];
       $MH = $_POST['MedHist'];
       $DOB = $_POST['Pnum'];
       //file upload
$PDF=$_FILES['VaccList']['name'];
$PDF_type=$_FILES['VaccList']['type'];
$PDF_size=$_FILES['VaccList']['size'];
$PDF_tem_loc=$_FILES['VaccList']['tmp_name'];

//photo upload
$imageprofile=$_FILES['ProfileImage']['name'];
$imageprofile_tem_loc=$_FILES['ProfileImage']['tmp_name'];
$PDF_store='Content/';
//__DIR__.'/../../../../../../Content/'. $_FILES["VaccList"]['name']
$MOVE=move_uploaded_file($PDF_tem_loc, $PDF_store.$PDF);
$MOVE2=move_uploaded_file($imageprofile_tem_loc, $PDF_store.$imageprofile);

    $query="INSERT INTO PETT (Pet_Name, Gender, Breed ,Spayed , Medical_History,DOB,Content,Profile_Pic) VALUES ('".$PetName."','".$Gender."','". $Breed."','".$Spayed."','".$MH."','".$DOB."','".$PDF."','".$imageprofile."');";
    $result=mysqli_query($database, $query);
   
    mysqli_close($database);
    if($result){
   header("location: Pet_List.php");
      
ob_end_flush();

}
    else{
        echo "An error occured while inserting into the PETT table.";}
}
/*function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
        }*/


/*if(isset($_POST['Reg'])){

$PetName = $_POST['Fname'];
$Gender = $_POST['Gend'];
$Breed = $_POST['Breed'];
$Spayed = $_POST['Spayed'];
$MH = $_POST['MedHist'];
$DOB = $_POST['Pnum'];



$qry = "insert into Pet values(null , '$PetName' , '$Gender' , '$Breed' , '$Spayed' , '$MH' , '$DOB')";
if(mysqli_query($db,$qry)){
    header("location: Pet_List.php");
echo '<script>alert("Pet added successfully.!!");</script>';

}else{
    echo mysqli_error($db);
}
}*/

?>