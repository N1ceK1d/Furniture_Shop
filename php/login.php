<?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    require("connection.php");
    $sql = "SELECT * FROM Client WHERE login = '$login';";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result) > 0)
    {
        foreach ($result as $row) {
            if(password_verify($password, $row['password'])) {
                $sql = "SELECT id, isAdmin FROM Client WHERE login = '$login'";
                session_start();
                $result = $conn->query($sql);
                foreach ($result as $row) {
                    $_SESSION['loggined'] = $row['id'];
                    $_SESSION['isAdmin'] = $row['isAdmin'];
                }
                header("Location: ../pages/catalog.php");
            }
        }
        $conn->query($sql);
    }
    else 
    {
        echo "Неверные данные";
    }
    $conn->close();
?>