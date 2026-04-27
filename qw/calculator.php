<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #f0f0f0;
        }
        .calculator {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            width: 48%;
            padding: 12px;
            margin: 5px 1%;
            border: none;
            border-radius: 5px;
            background: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        .error {
            background: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }
        .success {
            background: #e8f5e8;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>

        <form method="POST">
            <input
                type="number"
                name="a"
                placeholder="Первое число"
                required
                step="any"
                value="<?php echo htmlspecialchars($_POST['a'] ?? ''); ?>"
            >
            <input
                type="number"
                name="b"
                placeholder="Второе число"
                required
                step="any"
                value="<?php echo htmlspecialchars($_POST['b'] ?? ''); ?>"
            >

            <div>
                <button type="submit" name="operation" value="+">+</button>
                <button type="submit" name="operation" value="-">-</button>
                <button type="submit" name="operation" value="*">×</button>
                <button type="submit" name="operation" value="/">÷</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $a = floatval($_POST['a']);
            $b = floatval($_POST['b']);
            $op = $_POST['operation'];
            $result = '';
            $class = 'result';

            switch ($op) {
                case '+':
                    $result = $a + $b;
                    $class .= ' success';
                    break;
                case '-':
                    $result = $a - $b;
                    $class .= ' success';
                    break;
                case '*':
                    $result = $a * $b;
                    $class .= ' success';
            break;
                case '/':
                    if ($b == 0) {
                $result = '❌ Ошибка: деление на ноль невозможно!';
                $class .= ' error';
            } else {
                $result = $a / $b;
                $class .= ' success';
            }
            break;
                default:
            $result = '❌ Неизвестная операция';
            $class .= ' error';
        }

        echo '<div class="' . htmlspecialchars($class) . '">Результат: ' . htmlspecialchars((string)$result) . '</div>';
    }
    ?>
    </div>
</body>
</html>

