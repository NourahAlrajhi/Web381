<?php 
//start
ob_start();
session_start();
//connect
$db = mysqli_connect("localhost" , "root" ,"","healed");
//initialize
$Fname = "";
$Lname = "";
$Pnum = "";
$Email = "";
$Gend = "";
$errors = array();

//sign up
if (isset($_POST['Reg'])) {
    // receive all input values from the form
    $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($db, $_POST['Lname']);
    $Pnum = mysqli_real_escape_string($db, $_POST['Pnum']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Gend = mysqli_real_escape_string($db, $_POST['Gend']);
    $Pass = mysqli_real_escape_string($db, $_POST['Pass']);
  
    $imageprofile=$_FILES['ProfileImage']['name'];
    $imageprofile_tem_loc=$_FILES['ProfileImage']['tmp_name'];
    $PDF_store='Content/';
    $MOVE2=move_uploaded_file($imageprofile_tem_loc, $PDF_store.$imageprofile);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($Fname)) { array_push($errors, "First name is required"); }
    if(preg_match('/[^a-zA-Z]/', $Fname)) { array_push($errors, "Invalid first name characters"); }
    if (empty($Lname)) { array_push($errors, "Last name is required"); }
    if(preg_match('/[^a-zA-Z]/', $Fname)) { array_push($errors, "Invalid last name characters"); }
    if(preg_match('/[^a-zA-Z]/', $Lname)) { array_push($errors, "Invalid last name characters"); }
    if (empty($Pnum)) { array_push($errors, "Phone number is required"); }
    if (empty($Email)) { array_push($errors, "Email is required"); }
    if (empty($Gend)) { array_push($errors, "Gender is required"); }
    if (empty($Pass)) { array_push($errors, "Password is required"); }
    // first check the database to make sure 
  // a user does not already exist with the same Email and/or phone number
  $user_check_query = "SELECT * FROM Users WHERE Email='$Email' OR Pnum='$Pnum' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Email'] === $Email) {
      array_push($errors, "Email already exists");
    }

    if ($user['Pnum'] === $Pnum) {
      array_push($errors, "Phone number already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $Pass = md5($Pass);//encrypt the password before saving in the database

    $query = "INSERT INTO Users (Fname, Lname, Pnum, Email, Gend, Pass,Profile_Pic) 
              VALUES('$Fname', '$Lname', '$Pnum', '$Email', '$Gend', '$Pass' ,'$imageprofile' )";
    mysqli_query($db, $query);
    $_SESSION['Email'] = $Email;
    $_SESSION['Profile_Pic'] = $imageprofile;
     // $_SESSION['Managerid'] = $Profileid;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../HTML/Home Pet Owner.php'); //DAAANAAAAAAAA's HOME PAGE
}
}


?>


<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>Sign Up</title>

<link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script> -->

<!-- added 1 here -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="../images/logo.svg">

<title>Healed</title>

<!-- font awesome cdn link -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="../HTML/Header and Footer.css">

<script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
<!-- ended 1 here -->
<style>

div.signUpCam{
  position: relative;left: 38.5%; top: 100px;
    border-radius: 50%;
    width: 80px;
    height: 105px;
    margin-left: 50px;
    margin-bottom: 2%;
}
</style>
</head>

<body class="signUpBod">

<!-- added 2 here -->

<!-- header section starts -->

<header>

<a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

<input type="checkbox" id="menu-bar">

<label for="menu-bar" class="fas fa-bars"></label>

<nav class="navbar">

<ul class="nav-list">

<li ><a href="../HTML/LnadingPage.php">Home</a>

</li>

<li><a href="../HTML/LnadingPage.php#Services">Services</a></li>

<li><a href="../HTML/LnadingPage.php#Aboutus">About Us</a></li>

<li><a href="../HTML/LnadingPage.php#contact us">Contact Us</a></li>

</ul>

<!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i> -->

</nav>

</header>

<!-- header section ends -->

<!-- ended 2 here -->

<!-- section for whole code -->

<section class="loginpage" style="text-align: center" >

<div class="signUpFinalPos">

<form method="post" action="Sign up page.php" enctype="multipart/form-data">
<?php include('errors.php'); ?>


    <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative;top: 24px;left: -7px;">Sign up</h3>
    <div class="signUpCirc2" style="left: 0.1%; position: relative;top: -53px;    left: -6px;">
    <a href="Sign up admin.php"> <button type="button" class="loginTypeButtonNotChosen" style="position: relative; top: 85px;">Manager</button></a>
            <button type="button" class="loginTypeButtonChosen" style="position: relative; top: 85px;">Pet Owner</button></div>
            


<div class="signUpCam" style="border-radius: 50%;">

<img src="../images/camera2.svg" onclick="triggerClick()" id="addPetCirc3" style="width: 137px;border-radius: 50%;" > 
  <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style=" display:none; Position: absolute;left: 47.4%; top: 134px;" >
<!-- <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>-->
<!--<i class="fa-solid fa-camera fa-2xl"></i>-->


</div>



<div class="firstCol">

<label for="Fname">*First name</label>

<br>

<input type="text" name="Fname" id="Fname" placeholder="Enter First name" required="" value="<?=(isset($Fname)?$Fname:""?>">

<br><br>

<label for="Pnum">*Phone number</label>

<br>

<input type="number" name="Pnum" id="Pnum" placeholder="05xxxxxxxx" required="" min="0500000000" max="0599999999" >

<br><br>

<label for="Pass">*Password</label>

<br>

<input type="password" name="Pass" id="Pass1" placeholder="Enter Password" required="">

<br><br>

</div>

<div class="secondCol">

<br>

<label for="Lname">*Last name</label>

<br>

<input type="text" name="Lname" id="Lname" placeholder="Enter Last name" required="" >

<br><br>

<label for="Email">*Email</label>

<br>

<input type="email" name="Email" id="Email" placeholder="Enter Email" required="" >

<br><br>

<label for="Gend">*Gender</label>

<br>

<select name="Gend" id="Gend" placeholder="Choose Gender" required="" >
<option value = "" disabled selected hidden> Choose Gender </option>

<option value = "Male"> Male </option>

<option value = "Female"> Female </option>

</select>

<br><br>

</div>

<br><br><br><br>

<input type="checkbox" id="check" required="">

<label for="check">By creating an account you agree to the <br>

<a class="loginLink" href="#">terms of use</a>

and our <a class="loginLink" href="#">privacy policy</a> </label>

<br><br>

<input type="submit" name="Reg" id="Reg" value="Create account">

<br><br>

Already have an account? <a class="loginLink" href="Login page pet owner.php">Log in</a><!-- لازم نحط صفجة لوق ان هنا -->

<br><br>

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

<a href="../HTML/LnadingPage.php">Home</a>

<a href="../HTML/LnadingPage.php#Services">Services</a>

<a href="../HTML/LnadingPage.php#Aboutus">About Us</a>

<a href="../HTML/LnadingPage.php#contact us">Contact Us</a>

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