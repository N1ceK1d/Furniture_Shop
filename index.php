<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop</title>
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/main.css">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/product_card.css">
</head>
<body>
    <?php require("php/header.php")?>
    <div class="content">
        <div class="about">
            <p>
            Furniture Shop - ваш надежный партнер в мире мебели. 
            Мы являемся одной из ведущих компаний, специализирующихся на 
            продаже высококачественной мебели для дома, офиса и коммерческих 
            помещений.
            <br>
            Наша компания предлагает широкий ассортимент мебели, 
            включая стильные и современные диваны, кресла, столы, стулья, 
            шкафы, комоды, кровати и многое другое. Мы работаем только с проверенными 
            производителями, которые отличаются высоким уровнем качества и надежности. 
            Все наши товары изготовлены из экологически чистых материалов, что делает их 
            безопасными для здоровья и окружающей среды.
            </p>
        </div>
        <div class="rewievs">
            <div class="rewievs-list">
                <?php
                    require("php/connection.php");
                    $sql = "SELECT * FROM Reviews ORDER BY Rand() LIMIT 3;";
                    if($result = $conn->query($sql))
                    {
                        foreach ($result as $row) {
                            echo "<div class='review-item'><p>".$row['text']."</p></div>";
                        }
                    }
                    $conn->close();
                ?>
            </div>
        </div>
        <div class="products">
            <div class="products-list">
                <?php
                    require("php/connection.php");
                    $sql = "SELECT * FROM Products ORDER BY Rand() LIMIT 5;";
                    if($result = $conn->query($sql))
                    {
                        foreach ($result as $row) {
                            echo "<div class='product-item'>
                                <img src='".$row['image']."'/>
                                <div>
                                    <p class='title'>".$row['name']."</p>
                                    <p class='price'>".$row['price']."</p>
                                </div>
                            </div>";
                        }
                    }
                ?>
            </div>
            <a class="more-products" href="http://localhost/Furniture_Shop/pages/catalog.php">Больше товаров</a>
        </div>
    </div>
</body>
</html>