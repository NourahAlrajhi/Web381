
<?php 
ob_start();
session_start();

//$db = mysqli_connect("localhost" , "root" ,"","healed");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add A Service</title>
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
    
    <body class="addaservicepageback">

<!-- added 2 here -->
<!-- header section starts  -->

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
<!-- ended 2 here -->

<!-- section for whole code -->
<section style="text-align: center" >
    <div class="addServiceFinalPos">
    <br><br><br><br><br><br>
        <div class="signUpCirc">
               <div class="signUpCam">
                   <i class="fa-solid fa-camera fa-2xl"></i>
                   <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>

               </div>
            </div>
        
        <form method="post" action="Add_service.php">
            <div class="leftServ">
                <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -12px;">Add a Service</h3>
                <label for="Serv" >Service</label>
                <br>
                <input type="text" name="Fname" id="Fname" placeholder="Enter Service" required="">
                <br><br>
                <label for="ServDescr">Description</label>
                <br>  
                <textarea name="ServDescr" id="ServDescr" placeholder="Enter Description..." required=""></textarea>
                <br><br>
            </div>

            <div class="rightServ">
                <label for="ServPrice">Price</label>
                <br>
                <input type="number" name="ServPrice" id="ServPrice" placeholder="Choose Price" required="">
                <br><br>
                
            </div>
            <br><br>
            <input type="submit" name="AddServ" id="AddServ" value="Add Service">

        </form>
    </section>
</div>
</body>
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
            <a href="../HTML/Home Manager.html">Home</a>
            <a href="../HTML/Services Manager.html">Services</a>
            <a href="../HTML/About Us Manager.html">About US</a>
                
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
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

       $SERVICE_NAME = $_POST['Fname'];
       $Description = $_POST['ServDescr'];
       $Price = $_POST['ServPrice'];
     

    $query="INSERT INTO Manager_Services (Service_NAME, Description, Price ) VALUES ('".$SERVICE_NAME ."','".$Description."','".$Price."');";
    $result=mysqli_query($database, $query);

    if($result){
        header("location: Services_Manager.php");
ob_end_flush();}
    else{
        echo "An error occured while inserting into the Manager_Services table.";}
}
mysqli_close($database);
?>