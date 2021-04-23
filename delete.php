<?php 
    include('database.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    header('location: admin.php');
?>