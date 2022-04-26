<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "update Appointment set Status ='Done' where Appointmentid = $id";

if(mysqli_query($db,$qry)){
    header('location: Upcoming_Appo_details_manager.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>