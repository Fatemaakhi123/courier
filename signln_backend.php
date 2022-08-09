
<?php 

session_start();
include 'config.php';
if(isset($_SESSION['SESSION_EMAIL']))
{

}

$msg=" ";

if(isset($_GET['verification'])){
   if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM customer WHERE code='{$_GET['verification']}'"))>0)
{
    $query=mysqli_query($conn,"UPDATE customer SET code='' WHERE code='{$_GET['verification']}' ");

    if($query)
    {
        $msg = "<span style='color:green;'>Successful</span>";
        
    }
}
    else
    {
        header("Location: signln.php");
    }
}

if(isset($_POST['submit']))
{

$email=mysqli_real_escape_string($conn,$_POST['email']);
$psw=mysqli_real_escape_string($conn,md5($_POST['psw']));
$sql="SELECT * FROM customer WHERE email='{$email}' AND psw='{$psw}'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (empty($row['code'])) {
        $_SESSION['SESSION_EMAIL'] = $email;
        header("Location: Home.php");
    } else {
        $msg = "<span style='color:red;'>First verify your account and try again.</span>";
    }
} else {
    $msg = "<span style='color:red;'>Email or password do not match.</span>";
}

}
?>