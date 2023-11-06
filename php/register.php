<?php
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    require("connection.php");
    $sql = "SELECT login FROM Client;";
    if(mysqli_num_rows($conn->query($sql)) < 1)
    {
        $sql = "INSERT INTO Client (login, mail, password) VALUES ('$login', '$email', '$password');";
        $conn->query($sql);
        $sql = "SELECT id FROM Client WHERE login = '$login'";
        session_start();
        $result = $conn->query($sql);
        foreach ($result as $row) {
            $_SESSION['user_id'] = $row['id'];
        }
        header("Location: ../pages/catalog.php");
    }
    else 
    {
        echo "Такой пользователь уже сушествует";
    }
    $conn->close();
?>