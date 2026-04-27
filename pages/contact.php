<?php
// Обработка формы
$message_sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Заполните все поля';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Неверный email';
    } else {
        // Сохраняем в файл
        $data = date('Y-m-d H:i:s') . " | $name | $email | $message\n";
        file_put_contents(__DIR__ . '/../messages.txt', $data, FILE_APPEND);
        $message_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/images/logo.jpg" type="image/x-icon">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <main>
        <h1>Контакты</h1>
        
        <?php if ($message_sent): ?>
            <p style="color: green; background: #d4edda; padding: 10px;">✅ Сообщение отправлено!</p>
        <?php elseif ($error): ?>
            <p style="color: red; background: #f8d7da; padding: 10px;">❌ <?= $error ?></p>
        <?php endif; ?>
        
        <form method="post">
            <input type="text" name="name" placeholder="Имя" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Сообщение" required rows="4"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </main>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>
