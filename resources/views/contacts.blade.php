<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Где нас найти? - Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-content">
        <img src="{{ asset('images/logo2.jpg') }}" alt="Логотип компании" class="logo">
        <nav>
            <a href="/">Главная</a>
            <a href="/menu">Меню</a>
            <a href="/about">О нас</a>
            <a href="/contacts" class="active">Где нас найти?</a>
            <a href="/register">Регистрация / Авторизация</a>
        </nav>
    </div>
</header>
<main class="main2">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.731015420185!2d37.61755891546926!3d55.75582580733171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a2c8dd4d9b9%3A0x774aad90ad4d6b8b!2sMoscow%2C%20Russia!5e0!3m2!1sen!2sus!4v1637787544477!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <div class="contact-info">
        <h3>Контактная информация</h3>
        <p><strong>Адрес:</strong> ул. Вкусняшки, 123, Город</p>
        <p><strong>Телефон:</strong> <a href="tel:+71234567890">+7 (123) 456-78-90</a></p>
        <p><strong>Email:</strong> <a href="mailto:info@vkusnyashki.com">info@vkusnyashki.com</a></p>
    </div>
</main>
<div class="call-to-action">
        <h2>Мы ждем вас!</h2>
        <p>Загляните к нам и попробуйте самые вкусные десерты в городе. Мы открыты для вас ежедневно с 9:00 до 22:00. Убедитесь сами!</p>
    </div>
<footer>
    <div class="footer-content">
        <div class="contact-info">
            <h3>Контактная информация</h3>
            <p>Адрес: ул. Вкусняшки, 123, Город</p>
            <p>Телефон: <a href="tel:+71234567890">+7 (123) 456-78-90</a></p>
            <p>Email: <a href="mailto:info@vkusnyashki.com">info@vkusnyashki.com</a></p>
        </div>
        <img src="{{ asset('images/logo2.jpg') }}" alt="Логотип компании" class="logo">
        <div class="social-links">
            <h3>Мы в социальных сетях</h3>
            <a href="https://facebook.com/vkusnyashki" target="_blank">Facebook</a>
            <a href="https://twitter.com/vkusnyashki" target="_blank">Twitter</a>
            <a href="https://instagram.com/vkusnyashki" target="_blank">Instagram</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</body>
</html>