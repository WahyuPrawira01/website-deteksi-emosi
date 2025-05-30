<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Quiz Emosi</title>
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
      max-width: 700px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .question {
      background: #f9f9f9;
      padding: 15px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }
    label {
      display: block;
      margin: 10px 0;
    }
    input[type="submit"] {
      background: #6c63ff;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }
    input[type="submit"]:hover {
      background: #5848d4;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Tes Emosi Anda</h2>
    <form method="post" action="result.php">
      <div class="question">
        <p>1. Apa yang Anda rasakan saat bangun pagi hari?</p>
        <label><input type="radio" name="q1" value="senang" required> Bersemangat</label>
        <label><input type="radio" name="q1" value="marah"> Kesal</label>
        <label><input type="radio" name="q1" value="sedih"> Sedih</label>
      </div>

      <div class="question">
        <p>2. Bagaimana perasaan Anda ketika seseorang menegur Anda?</p>
        <label><input type="radio" name="q2" value="marah" required> Marah</label>
        <label><input type="radio" name="q2" value="biasa"> Biasa saja</label>
        <label><input type="radio" name="q2" value="sedih"> Merasa tersinggung</label>
      </div>

      <div class="question">
        <p>3. Apa reaksi Anda saat menerima kabar baik?</p>
        <label><input type="radio" name="q3" value="senang" required> Senang dan bersyukur</label>
        <label><input type="radio" name="q3" value="biasa"> Biasa saja</label>
        <label><input type="radio" name="q3" value="takut"> Takut itu tidak nyata</label>
      </div>

      <input type="submit" value="Lihat Hasil">
    </form>
  </div>
</body>
</html>
