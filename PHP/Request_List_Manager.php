
<?php 
ob_start();
session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <title>Request List</title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
   
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://kit.fontawesome.com/cfd954b4b7.js" crossorigin="anonymous"></script>
<link rel="stylsheet" href="../CSS/all.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../images/logo.svg">
<title>Healed</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="../HTML/Header and Footer.css">
<script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>


</head>
<body class="NBODY">
   
        <!-- header section starts  -->

<header>

    <a href="../HTML/Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="./Home Manager.html">Home</a>
                <ul class="sub-menu" id="sub-menu-arrow"> 
                  <li > <a href="Add_service.php">Add a New Service</a></li>
                  <li><a href="Appo_List.php">Set a New Appointment</a></li>
                  <li><a href="Request_List_Manager.php">View Requests List</a></li>
  
                  <li><a href="../HTML/upcoming and previous manager.html">View Appointments List</a> </li>
          
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
    
    


<!--<div class="tabel-box"> 
    <div class = "tabel-row tabel-head">
        <div class="tabel-cell ">
<p>Pet Owner</p>
        </div>
        <div class="tabel-cell">
            <p>Pet name</p>
                    </div>
                    <div class="tabel-cell">
                        <p>Service</p>
                                </div>
                                <div class="tabel-cell">                               
                                            </div>

                                            <div class="tabel-cell">                                           
                                                        </div>
    </div>

    <div class = "tabel-row">
        <div class="tabel-cell ">
<p>Lorem ipsum</p>
        </div>
        <div class="tabel-cell">
            <p>Lorem ipsum</p>
                    </div>
                    <div class="tabel-cell last-cell">
                        <p>Lorem ipsum</p>
                                </div>

                                <div class="tabel-button">
                                  <a href="#" > <button class="btn btn-primary" type="submit" style="background-color: #9084C2 ; border-color: #9084C2;">See More</button></a>
                                            </div>
                                            <div class="tabel-cell last-cell">
                                                <button type="button" class="btn-close" disabled aria-label="Close " style="background-color: #FF74AB; color: #F78CB1;"></button>
                                                        </div>
                                                        <div class="tabel-cell last-cell">
                                                            <i class="fa fa-check-circle" style="font-size:36px ; color: #FFA47F" ></i>
                                                                    </div>
    </div>

    <div class = "tabel-row">
        <div class="tabel-cell ">
<p>Lorem ipsum</p>
        </div>
        <div class="tabel-cell">
            <p>Lorem ipsum</p>
                    </div>
                    <div class="tabel-cell ">
                        <p>Lorem ipsum</p>
                                </div>
                                <div class="tabel-button">
                                    <a href="#" > <button class="btn btn-primary" type="submit" style="background-color: #9084C2 ; border-color: #9084C2;">See More</button></a>
                                              </div>
                                              <div class="tabel-cell last-cell">
                                                  <button type="button" class="btn-close" disabled aria-label="Close " style="background-color: #FF74AB; color: #F78CB1;"></button>
                                                          </div>
                                                          <div class="tabel-cell last-cell">
                                                            <i class="fa fa-check-circle" style="font-size:36px ; color: #FFA47F" ></i>
                                                                    </div>
    </div>


</div>-->

<section>
<div class="CAPTION" ><strong> Request List</strong></div>
<div class="header_fixed">

    <table>
        <thead>
            
            <tr>
              
                <th class="HEADER" style="color: #030229; background-color: white;">S No</th>
                
                <th class="HEADER" style="background-color: white;"></th>
                <th class="HEADER" style="color: #030229; background-color: white;">Pet Owner</th>
                <th class="HEADER" style="color: #030229;background-color: white;">Pet name</th>
                <th class="HEADER" style="color: #030229;background-color: white;">Service</th>    
                <th class="HEADER" style="background-color: white;"></th>
                <th class="HEADER" style="background-color: white;"></th>
                <th class="HEADER" style="background-color: white;"></th>
           
            </tr>
      
        </thead>

        <tbody>

        <?php 
        $i=1;
        $qry = "select * from Appointment where Status='' ";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
$id = $row['Appointmentid'];
$UName = $row['Pet_name']; 
        ?>
            <tr>
                <td><?php echo  $i++; ?></td>
                <td><a href="View_Pet_Profile.php?id=<?php echo $UName;?>" style="box-shadow: 0 0 black;"><img src="../HTML/image (1).svg"  height="50px" width="50px"></a></td>
                <td> ... </td>
                <td> <?php echo $row['Pet_name'] ?>  </td>
                <td><?php echo $row['Service'] ?></td>
                <td> <a href="View_Appo_Request.php?id= <?php echo $id;?>" ><button >See more</button> </a></td>
                    <td><a href="Accept_Appo.php?id= <?php  echo $id; ?>" name="Cheack"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td><a href="DeletApp2.php?id= <?php  echo $id; ?>" onclick = "return confirm('Are you sure?')"><i class="fas fa-times" style="font-size: x-large;"></i></a>
                </td>
            </tr>

            <?php 

}
}
?>
         <!--   <tr>
                <td>2</td>
                <td><a href="./MahaB Pet Profile Request List Manager 2.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Stephanie </td>
                <td> Myla </td>
                <td> Dentistry</td>
                <td> <a href="./View Appointment Request(2).html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Marly </td>
                <td> Kiwi </td>
                <td> Checkup</td>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Jennifer </td>
                <td> Cava </td>
                <td> Boarding</td>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Kevin </td>
                <td> Broc </td>
                <td> Grooming and Bathing</td>>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Stephanie </td>
                <td> Myla </td>
                <td> Dentistry </td>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Marly </td>
                <td> Kiwi </td>
                <td> Gelada</td>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="./MahaB Pet Profile Request List Manager.html"style="box-shadow: 0 0 black;"><img src="./image (1).svg"  height="50px" width="50px"></a></td>
                <td> Jennifer </td>
                <td> Cava </td>
                <td> Boarding</td>
                <td> <a href="View Appointment Request.html"><button >See more</button> </a></td>
                    <td><a href="#"><i class="fa fa-check" style="font-size:24px"></i></a></td>
                    <td> <a href="#"><i class="fas fa-times" style="font-size: x-large;"></i></a>
                    </td>
            </tr>-->
        </tbody>
    </table>
</div>

<img class="BACKGROUND" src="./background.svg">

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