<?php
session_start();

if (isset($_POST['name'])) {
    $_SESSION['username'] = $_POST['name'];
    header("Location: session.php");
    exit();
}

if (isset($_POST['delete'])) {
    session_unset();
    session_destroy();
    header("Location: session.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Робота з Session</title>
</head>
<body>
<h2>Сесія користувача</h2>
<form method="POST">
    <label>Введіть ім'я:
        <input type="text" name="name" required>
    </label>
    <button type="submit">Зберегти в сесію</button>
</form>

<h2>Збережене ім’я (сесія):</h2>
<?php
if (isset($_SESSION['username'])) {
    echo "<p>Ваше ім'я: <strong>" . htmlspecialchars($_SESSION['username']) . "</strong></p>";
} else {
    echo "<p>Сесія не встановлена.</p>";
}
?>

<form method="POST">
    <button name="delete" type="submit">Видалити сесію</button>
</form>
</body>
</html>

