<?php
    session_start();
    if(isset($_SESSION['user_id']))
    {
        $user_id = $_SESSION['user_id'];
    }
    $user_id = 1;
    $product_id = $_POST['product_id'];
    echo $product_id;

    require("connection.php");
    $sql = "INSERT INTO UserCart (client_id, product_id) VALUES ($user_id, $product_id);";
    $conn->query($sql);
    $conn->close();
?>