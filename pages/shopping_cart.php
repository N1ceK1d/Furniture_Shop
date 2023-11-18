<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/product_card.css">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/catalog.css">
</head>
<body>
    <?php 
    require("../php/header.php");
    session_start();
    ?>
    <div class="products-list">
        <?php
            require("../php/connection.php");
            $id = $_SESSION['loggined'];

            $sql = "SELECT UserCart.id, name, image, price FROM UserCart
            INNER JOIN Products ON UserCart.product_id = Products.id
            WHERE client_id = $id;";

            $sum = "SELECT SUM(price) as sum FROM UserCart
            INNER JOIN Products ON UserCart.product_id = Products.id
            WHERE client_id = $id;";
            if(mysqli_num_rows($conn->query($sql)) > 0)
            {
                if($result = $conn->query($sql))
                {
                    foreach ($result as $row) {
                        echo "<div class='product-item'>
                            <form action='../php/removeProduct.php' method='POST'>
                                <input type='text' name='product_id' hidden value='".$row['id']."'/>
                                <img src='".$row['image']."'/>
                                <div>
                                    <p class='title'>".$row['name']."</p>
                                    <p class='price'>".$row['price']."</p>
                                </div>
                                <input type='submit' class='from-cart' value='Удалить'/>
                            </form>
                        </div>";
                    }
                }
                $sum_value = mysqli_fetch_assoc($conn->query($sum))['sum'];
            }
            
        ?>
    </div>
    <p class="sum">
        <?php if($sum_value > 0) :?>
            Итоговая сумма: <?php echo $sum_value?>
        <?php else: ?>
            Здесь ничего нет, взгляните на <a href="http://localhost/Furniture_Shop/pages/catalog.php">каталог!</a>
        <?php endif;?>
    </p>
</body>
</html>