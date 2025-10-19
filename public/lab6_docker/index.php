<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система авторизації - Головна сторінка</title>
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
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .description {
            background-color: #e9ecef;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            text-align: left;
        }
        .description h3 {
            color: #495057;
            margin-bottom: 15px;
        }
        .description ul {
            color: #6c757d;
            line-height: 1.6;
        }
        .nav-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            min-width: 150px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-info {
            background-color: #17a2b8;
            color: white;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        .user-info {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .user-info h3 {
            margin: 0 0 10px 0;
        }
        .user-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔐 Система авторизації</h1>
        
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <div class="user-info">
                <h3>Вітаємо, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
                <p>Ви успішно авторизовані в системі.</p>
                <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            </div>
        <?php endif; ?>
        
        <div class="description">
            <h3>Лабораторна робота № 6</h3>
            <p><strong>Тема:</strong> Створення форми авторизації та реєстрації користувачів на PHP з використанням MySQL</p>
            <h4>Функціонал системи:</h4>
            <ul>
                <li>✅ Реєстрація нових користувачів</li>
                <li>✅ Авторизація існуючих користувачів</li>
                <li>✅ Захищені сторінки з перевіркою сесій</li>
                <li>✅ Безпечне хешування паролів (MD5)</li>
                <li>✅ Захист від SQL-ін'єкцій (prepared statements)</li>
                <li>✅ Валідація вхідних даних</li>
                <li>✅ Сучасний та адаптивний дизайн</li>
            </ul>
        </div>
        
        <div class="nav-buttons">
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <a href="welcome.php" class="btn btn-success">Захищена сторінка</a>
                <a href="logout.php" class="btn btn-info">Вийти</a>
            <?php else: ?>
                <a href="login.html" class="btn btn-success">Увійти</a>
                <a href="register.html" class="btn btn-primary">Зареєструватися</a>
            <?php endif; ?>
        </div>
        
        <div style="margin-top: 30px; color: #6c757d; font-size: 14px;">
            <p><strong>Тестові дані:</strong></p>
            <p>Логін: admin | Пароль: password123</p>
            <p>Логін: testuser | Пароль: password123</p>
            <p>Логін: demo | Пароль: password123</p>
        </div>
    </div>
</body>
</html>
