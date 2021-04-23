<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
        header('location: admin.php');
    }

?>