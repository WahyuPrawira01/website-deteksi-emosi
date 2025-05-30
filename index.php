<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - Deteksi Emosi</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: linear-gradient(to right, #74ebd5, #acb6e5);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 90%;
      max-width: 500px;
    }
    h1 {
      color: #333;
      margin-bottom: 20px;
    }
    p {
      margin: 15px 0;
      font-size: 16px;
    }
    a {
      text-decoration: none;
      color: white;
      background: #6c63ff;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 8px;
      display: inline-block;
      transition: background 0.3s;
    }
    a:hover {
      background: #5848d4;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Deteksi Emosi</h1>
    <?php if (isset($_SESSION['user'])): ?>
      <p>Halo, <strong><?= $_SESSION['user'] ?></strong></p>
      <a href="quiz.php">Mulai Tes Emosi</a>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="login.php">Login</a>
      <a href="register.php">Daftar</a>
    <?php endif; ?>
    <br><br>
    <a href="about.php">Tentang Website Ini</a>
  </div>
</body>
</html>
