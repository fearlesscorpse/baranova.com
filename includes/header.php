<?php
$menuItems = [
    'Главная' => '/index.php',
    'О нас' => '/pages/about.php',
    'Контакты' => '/pages/contact.php'
];
?>
<header>
 <div class="header-container">
        <div class="logo">
            <a href="/index.php">
                <img src="/assets/images/logo.jpg" alt="Логотип сайта" class="logo-img">
            </a>
        </div>
    <nav>
        <ul>
              <?php foreach ($menuItems as $title => $url): ?>
                <li>
                    <a href="<?= $url ?>" <?= $_SERVER['REQUEST_URI'] == $url ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

