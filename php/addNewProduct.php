<?php
    $image = $_POST['image'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    require("connection.php");
    $sql = "INSERT INTO Products (name, image, price) VALUES ('$title', '$image', $price);";
    $conn->query($sql);
    $conn->close();
    header("Location: http://localhost/Furniture_Shop/pages/admin.php");
?>