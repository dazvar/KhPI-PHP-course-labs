<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ласкаво просимо!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #28a745;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .welcome-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .user-info {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .user-info h3 {
            color: #495057;
            margin-bottom: 15px;
        }
        .info-item {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .info-label {
            font-weight: bold;
            color: #6c757d;
        }
        .info-value {
            color: #495057;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
        .nav-links {
            margin-top: 30px;
        }
        .nav-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }
        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Ласкаво просимо!</h1>
        
        <div class="welcome-message">
            <h2>Вітаємо, <?php echo htmlspecialchars($username); ?>!</h2>
            <p>Ви успішно увійшли в систему. Ця сторінка доступна тільки авторизованим користувачам.</p>
        </div>
        
        <div class="user-info">
            <h3>Інформація про ваш акаунт:</h3>
            <div class="info-item">
                <span class="info-label">ID користувача:</span>
                <span class="info-value"><?php echo htmlspecialchars($user_id); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Ім'я користувача:</span>
                <span class="info-value"><?php echo htmlspecialchars($username); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Електронна пошта:</span>
                <span class="info-value"><?php echo htmlspecialchars($email); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Час входу:</span>
                <span class="info-value"><?php echo date('d.m.Y H:i:s'); ?></span>
            </div>
        </div>
        
        <div class="nav-links">
            <a href="logout.php">Вийти з системи</a>
            <a href="login.html">Повернутися до входу</a>
        </div>
    </div>
</body>
</html>
