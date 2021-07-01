<?php 
$ketnoi['host'] = 'localhost'; 
$ketnoi['dbname'] = 'store_database'; // Tên database 
$ketnoi['username'] = 'root'; // Tên user mặc định là root 
$ketnoi['password'] = ''; // Password để trống 
$con = mysqli_connect( "{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}", "{$ketnoi['dbname']}");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
?>