<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/product_card.css">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/catalog.css">
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php 
    require("../php/header.php");
    session_start();
    ?>
    <div class="products-list">
        <?php
            require("../php/connection.php");
            $sql = "SELECT * FROM Products;";
            if($result = $conn->query($sql))
            {
                foreach ($result as $row) {
                    echo "<div class='product-item'>
                        <form action='../php/addProduct.php' method='POST'>
                            <input type='text' name='product_id' hidden value='".$row['id']."'/>
                            <img src='".$row['image']."'/>
                            <div>
                                <p class='title'>".$row['name']."</p>
                                <p class='price'>".$row['price']."</p>
                            </div>";
                            if(isset($_SESSION['loggined'])) 
                            {
                                echo " <input type='submit' class='to-cart' value='В корзину'/>";
                            }
                        echo "</form>
                    </div>";
                }
            }
        ?>
    </div>
</body>
</html>