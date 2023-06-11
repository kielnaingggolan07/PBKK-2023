
<!DOCTYPE html>
<html>
<head>
  <title>Selamat Datang</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .welcome-message {
      text-align: center;
    }

    .welcome-title {
      font-size: 48px;
      font-weight: bold;
      color: #333;
      animation: scaleAnim 1s ease-in-out infinite alternate;
    }

    .welcome-subtitle {
      font-size: 24px;
      color: #666;
      animation: fadeAnim 1s ease-in-out infinite alternate-reverse;
    }

    @keyframes scaleAnim {
      0% { transform: scale(1); }
      100% { transform: scale(1.2); }
    }

    @keyframes fadeAnim {
      0% { opacity: 1; }
      100% { opacity: 0.5; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="welcome-message">
      <h1 class="welcome-title">Selamat Datang</h1>
      <p class="welcome-subtitle">Terima kasih telah mengunjungi halaman kami</p>
    </div>
  </div>
</body>
</html>
