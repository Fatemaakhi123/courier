
<?php
session_start();
include 'config.php';
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);
$msg="";
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['save'])) { 
    $filename = $_FILES['myfile']['name'];
    $destination = 'uploads/' . $filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        $msg="<span style='color:red;'>You file extension must be .zip, .pdf or .docx!</span>";
    } elseif ($_FILES['myfile']['size'] > 1000000) { 
        $msg="<span style='color:red;'>File too large!</span>";
    } else {

            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                $msg = "<span style='color:green;'>File uploaded successfully</span>";
            }
        } 
    }


?>