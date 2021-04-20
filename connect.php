<?php 
$ketnoi['host'] = 'localhost'; 
$ketnoi['dbname'] = 'codeclass'; // Tên database 
$ketnoi['username'] = 'root'; // Tên user mặc định là root 
$ketnoi['password'] = ''; // Password để trống 
$con = mysqli_connect( "{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}", "{$ketnoi['dbname']}");
// mysqli_select_db( "{$ketnoi['dbname']}") or die("Không thể chọn database"); 
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "codeclass" ;
    // // Create connection
    // $con = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    
?>