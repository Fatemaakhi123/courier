<?php   
session_start();
include('config.php');
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];

    $query="UPDATE customer SET user='$user',phone='$phone',city='$city' ";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['status']="accepted";
        header("Location: myprofile.php");
    }else
    {
        $_SESSION['status']="Not accepted";
        header("Location: edit.php");  
    }

}




?>