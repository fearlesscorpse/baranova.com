<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $gender = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $terms = isset($_POST['terms']) ? 'Принято' : 'Не принято';

    if ($password !== $confirm_password) {
        die('Ошибка: пароли не совпадают!');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Ошибка: некорректный email!');
    }
    header('Location: calculator.php');
} else {
    header('Location: index.php');
    exit;
}
?>

