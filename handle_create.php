<?php 
    include('connect.php');

    if(isset($_POST['submit']) ) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";
        $result = mysqli_query($con, $sql);
        header('location: admin.php');
    }

?>