<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $quantity = $_POST['username'];
        $price = $_POST['password'];
        
        $sql = "UPDATE user
        SET name = '$name', username= '$username', password='$password'
        WHERE id = $id";

        $result = mysqli_query($conn, $sql);
        header('location: admin.php');
    }
    header('location: admin.php');

?>