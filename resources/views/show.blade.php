<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $dish->name }} - Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            <a href="/contacts">Где нас найти?</a>
            <a href="/register">Регистрация / Авторизация</a>
        </nav>
    </div>
</header>
<main>
    <div class="dish-details">
        <img src="{{ $dish->image }}" alt="{{ $dish->name }}">
        <h1>{{ $dish->name }}</h1>
        <p>Категория: {{ $dish->category }}</p>
        <p>Страна: {{ $dish->country }}</p>
        <p>Цена: {{ $dish->price }} руб.</p>
    </div>
</main>
<footer>
    <div class="footer-content">
        <div class="contact-info">
            <h3>Контактная информация</h3>
            <p>Адрес: ул. Вкусняшки, 123, Город</p>
            <p>Телефон: +7 (123) 456-78-90</p>
            <p>Email: info@vkusnyashki.com</p>
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
</body>
</html>
