<?php
session_start();

// Ambil jawaban
$answers = [$_POST['q1'], $_POST['q2'], $_POST['q3']];

// Hitung frekuensi emosi
$emotion_count = array_count_values($answers);
arsort($emotion_count);
$dominant_emotion = array_key_first($emotion_count);

// Ubah ke deskripsi
$descriptions = [
  'senang' => 'Anda sedang merasa bahagia dan optimis.',
  'marah' => 'Anda sedang merasa marah atau terganggu.',
  'sedih' => 'Anda sedang merasa sedih atau kecewa.',
  'takut' => 'Anda sedang merasa takut atau cemas.',
  'biasa' => 'Anda sedang merasa netral atau tenang.'
];
$description = $descriptions[$dominant_emotion] ?? 'Emosi Anda tidak dapat ditentukan.';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Tes Emosi</title>
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
      padding: 20px;
    }
    .container {
      background: white;
      border-radius: 20px;
      padding: 30px;
      max-width: 600px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    h2 {
      color: #333;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #555;
      margin-bottom: 25px;
    }
    a {
      text-decoration: none;
      color: white;
      background: #6c63ff;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background 0.3s;
    }
    a:hover {
      background: #5848d4;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Hasil Tes Emosi Anda</h2>
    <p><strong>Emosi Dominan:</strong> <?= ucfirst($dominant_emotion) ?></p>
    <p><?= $description ?></p>
    <a href="index.php">Kembali ke Beranda</a>
  </div>
</body>
</html>
