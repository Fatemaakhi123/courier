<?php

$conn = mysqli_connect("localhost", "root", "", "courier");

if (!$conn) {
    echo "Connection Failed";
}