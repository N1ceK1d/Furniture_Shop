<?php
    $id = $_POST['product_id'];
    $price = $_POST['price'];
    if(isset($_POST['remove']))
    {
        require("connection.php");
        $sql = "DELETE FROM Products WHERE id = $id;";
        $conn->query($sql);
        $conn->close();
        header("Location: http://localhost/Furniture_Shop/pages/admin.php");
    }
    if(isset($_POST['change']))
    {
        require("connection.php");
        $sql = "UPDATE Products
        SET price = $price WHERE id = $id;";
        $conn->query($sql);
        $conn->close();
        header("Location: http://localhost/Furniture_Shop/pages/admin.php");
    }
?>