<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐱 Кошачий опросник 🐱</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5a623 0%, #f7d794 30%, #f8c291 50%, #f5a623 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', 'Comic Sans MS', 'Chalkboard SE', cursive, sans-serif;
            position: relative;
            overflow-x: hidden;
        }

        /* Лапки на фоне */
        body::before {
            content: '🐾🐱🐾🐱🐾🐱🐾🐱🐾🐱🐾🐱🐾🐱🐾🐱';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-size: 60px;
            opacity: 0.08;
            white-space: wrap;
            text-align: center;
            pointer-events: none;
            letter-spacing: 20px;
            line-height: 1.5;
        }

        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
        }

        /* Стили для кнопок-ссылок */
        .buttons {
            margin-top: 30px;
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cat-btn {
            display: inline-block;
            padding: 14px 35px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            cursor: pointer;
            font-family: inherit;
        }

        .cat-btn:first-child {
            background: #fff5e6;
            color: #e17055;
            border: 3px solid #e17055;
            box-shadow: 0 5px 20px rgba(225, 112, 85, 0.3);
        }

        .cat-btn:first-child:hover {
            transform: scale(1.05) rotate(-2deg);
            background: #e17055;
            color: white;
            box-shadow: 0 8px 25px rgba(225, 112, 85, 0.5);
        }

        .cat-btn:last-child {
            background: #fff5e6;
            color: #6c5ce7;
            border: 3px solid #6c5ce7;
            box-shadow: 0 5px 20px rgba(108, 92, 231, 0.3);
        }

        .cat-btn:last-child:hover {
            transform: scale(1.05) rotate(2deg);
            background: #6c5ce7;
            color: white;
            box-shadow: 0 8px 25px rgba(108, 92, 231, 0.5);
        }

        /* Анимация мяуканья для кнопок */
        @keyframes meow {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-3px);
            }
        }

        .cat-btn:hover {
            animation: meow 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // 1 задание
        class Page {
        protected $name = "page";
        protected $template;
        public function __construct($name, $template) {
        $this->name = $name;
        $this->template = $template;
        }
        // 2 Задание
        public function render(): void {
        echo $this->template;
        }
        }
        // 3 Задание
        class BlogPage extends Page {
        public function __construct() {
        $this->name = "blog";
        $this->template ='<div style="background: linear-gradient(135deg, #ffeaa7, #fdcb6e); padding: 40px; margin: 10px; border-radius: 60px 60px 60px 20px; color: #2d3436; width: 420px; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.2); border: 3px solid #fff; position: relative;">
            <div style="font-size: 70px; margin-bottom: 10px;">🐱💖🐾</div>
            <div style="position: absolute; top: -20px; right: -20px; font-size: 40px;">⭐</div>
            <div style="position: absolute; bottom: -15px; left: -15px; font-size: 35px;">🐾</div>
            <h2 style="margin: 0 0 15px 0; font-size: 32px;">😻 МЯУ! 😻</h2>
            <p style="font-size: 28px; margin: 0; font-weight: bold;">ТЫ милашка 🐈‍⬛❤️</p>
            <p style="margin-top: 15px; font-size: 14px; opacity: 0.8;">~ мур-мур, ты лучший(ая) ~</p>
        </div>';
        }
        function render(): void {
        echo $this->template;
        }
        }

        // 5 Задание
        if ($_GET['page'] == 'page') {
        $get = new Page('page', '<div style="background: linear-gradient(135deg, #dfe6e9, #b2bec3); padding: 40px; margin: 10px; border-radius: 20px 60px 20px 60px; color: #636e72; width: 420px; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.2); border: 3px solid #fff;">
            <div style="font-size: 70px; margin-bottom: 10px;">😿🐈💔</div>
            <p style="font-size: 24px; margin: 0; font-weight: bold;">Да уж, кринж... (котик грустит)</p>
            <p style="margin-top: 15px; font-size: 14px;">~ мяу... ну и ладно ~</p>
        </div>');
        $get->render();
        } elseif ($_GET['page'] == 'blog') {
        $get = new BlogPage();
        $get->render();
        } else {
        $get = new Page('page', '<div style="background: linear-gradient(135deg, #ffeaa7, #fdcb6e); padding: 45px; margin: 10px; border-radius: 80px 30px 80px 30px; color: #2d3436; width: 420px; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.2); border: 3px solid #fff; position: relative;">
            <div style="font-size: 80px; margin-bottom: 15px;">🐱❤️🐾</div>
            <div style="position: absolute; top: -15px; left: 20px; font-size: 30px;">🐈</div>
            <div style="position: absolute; bottom: -10px; right: 25px; font-size: 30px;">🐾</div>
            <p style="font-size: 28px; margin: 0; font-weight: bold;">Любишь кошек? 🐈‍⬛🐈</p>
            <p style="margin-top: 15px; font-size: 14px; opacity: 0.8;">~ выбери ответ, мур ~</p>
        </div>');
        $get->render();
        }
        ?>
        <!-- 4 Задание -->
        <div class="buttons">
            <a href="?page=page" class="cat-btn">😾 Нет (грустный котик)</a>
            <a href="?page=blog" class="cat-btn">😻 ДАААА! 🐱</a>
        </div>
    </div>
</body>
</html>
