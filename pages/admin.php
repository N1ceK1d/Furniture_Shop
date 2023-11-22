<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администрирование</title>
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/product_card.css">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/catalog.css">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/admin.css">
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php require("../php/header.php");?>
    <div class='change_data'>
        <button id='change_btn'>Изменить данные</button>
        <button id='add_btn'>Добавить товар</button>
    </div>
    <div class='addProduct_form'>
        <form action="../php/addNewProduct.php" method="post">
            <p class="close"><b>X</b></p>
            <img src="" class="loaded_image">
            <input class='image_path' type="text" name="image" placeholder='Фото'>
            <input type="text" name="title" placeholder='Название'>
            <input type="text" name="price" placeholder='Цена'>
            <input type="submit" value="Добавить">
        </form>
    </div>
    <div class="products-list">
        <?php
            require("../php/connection.php");
            $sql = "SELECT * FROM Products;";
            if($result = $conn->query($sql))
            {
                foreach ($result as $row) {
                    echo "<div class='product-item'>
                        <form action='../php/changeProduct.php' method='POST'>
                            <input type='text' name='product_id' hidden value='".$row['id']."'/>
                            <img src='".$row['image']."'/>
                            <div>
                                <p class='title'>".$row['name']."</p>
                                <input class='price_data' name='price' readonly type='text' value='".$row['price']."'/>
                            </div>
                            <input type='submit' name='remove' class='from-cart' value='Удалить'/>
                            <input type='submit' name='change' class='to-cart' value='Изменить'/>
                           </form>
                    </div>";
                }
            }
        ?>
    </div>
    <script src="../js/changeData.js"></script>
</body>
</html>