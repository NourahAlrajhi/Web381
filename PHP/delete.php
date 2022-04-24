<?php 
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "delete from Pet where Petid = $id";

if(mysqli_query($db,$qry)){
    header('location:Pet_List.php');
}else{
    echo mysqli_error($db);
}


?>