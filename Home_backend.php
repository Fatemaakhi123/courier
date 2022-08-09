<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: signln.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM customer WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "";
        
    }
    
?>
