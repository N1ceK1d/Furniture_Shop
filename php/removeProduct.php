<?php
    session_start();
    $user_id = 1;
    if(isset($_SESSION['loggined']))
    {
        $user_id = $_SESSION['loggined'];
    }
    
    $product_id = $_POST['product_id'];
    echo $product_id;

    require("connection.php");
    $sql = "DELETE FROM UserCart WHERE id = $product_id;";
    $conn->query($sql);
    $conn->close();
    header("Location: http://localhost/Furniture_Shop/pages/shopping_cart.php");
?>