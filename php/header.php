
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Furniture_Shop/css/header.css">
</head>
<body>
    <header>
    <div>
        <a href="http://localhost/Furniture_Shop/index.php"><img src="http://localhost/Furniture_Shop/image/logo.png" alt=""></a>
        <h1>Furniture Shop</h1>
    </div>
    <nav>
        <a href="http://localhost/Furniture_Shop/pages/catalog.php">Каталог</a>
        <?php
            session_start();
            if (isset($_SESSION['loggined']) && (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1)):
        ?>
            <a href="http://localhost/Furniture_Shop/pages/admin.php">Администрирование</a>
            <a href="http://localhost/Furniture_Shop/php/exit.php">Выйти</a>
        <?php elseif(isset($_SESSION['loggined'])): ?>
            <a href="http://localhost/Furniture_Shop/pages/shopping_cart.php">Корзина</a>
            <a href="http://localhost/Furniture_Shop/php/exit.php">Выйти</a>
        <?php else: ?>
            <a href="http://localhost/Furniture_Shop/pages/login.html">Войти</a>
        <?php endif; ?>
    </nav>
    </header>
</body>
</html>