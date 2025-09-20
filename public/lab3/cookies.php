<?php
if (isset($_POST['name'])) {
    setcookie('username', $_POST['name'], time() + 3600);
    header("Location: cookies.php");
    exit();
}

if (isset($_POST['delete'])) {
    setcookie('username', '', time() - 3600);
    header("Location: cookies.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Робота з Cookies</title>
</head>
<body>
<h2>Встановлення cookie</h2>
<form method="POST">
    <label>Введіть ім'я:
        <input type="text" name="name" required>
    </label>
    <button type="submit">Зберегти в cookie</button>
</form>

<h2>Збережене ім’я:</h2>
<?php
if (isset($_COOKIE['username'])) {
    echo "<p>Ваше ім'я: <strong>" . htmlspecialchars($_COOKIE['username']) . "</strong></p>";
} else {
    echo "<p>Cookie не встановлено.</p>";
}
?>

<form method="POST">
    <button name="delete" type="submit">Видалити cookie</button>
</form>
</body>
</html>

