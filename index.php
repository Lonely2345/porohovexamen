<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: white;
      padding: 10px;
      text-align: center;
    }
    nav {
      background-color: #555;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 5px 10px;
    }
    .container {
      margin: 20px auto;
      max-width: 800px;
      padding: 20px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="password"], input[type="date"], input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <h1>Учет оргтехники</h1>
  </header>


      <?php
        $host = "127.0.0.1";
        $username = "root";
        $database = "examen";
        $pass = "";
        $conn = new mysqli($host, $username, $pass, $database);
        // Проверка соединения
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        /* Обработка результатов запроса
        if (mysqli_num_rows($result) > 0) {
            // выводим данные каждой строки
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "<h3 class='animal-name'>" . $row["name"] . "</h3>";
                echo "<p class='animal-info'>" . $row["message"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Не найдено новостей";
        } */

        // Закрытие соединения
        mysqli_close($conn);
      ?>

  <!-- Авторизация -->
  <div id="login" class="container">
    <h2 align="center" >Авторизация</h2>
      <form action="login.php" method="POST">
      <label for="username">Логин:</label>
      <input type="text" name="login" required>
      <label for="password">Пароль:</label>
      <input type="password" name="password" required>
      <input type="submit" value="Войти">
    </form>
    <p  align="center" >Еще нет аккаунта? <a href="registaziya.php">Зарегистрируйтесь</a></p>
  </div>