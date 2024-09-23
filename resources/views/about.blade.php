<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Вкусняшки</title>
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
            <a href="/about" class="active">О нас</a>
            <a href="/contacts">Где нас найти?</a>
            <a href="/register">Регистрация / Авторизация</a>
        </nav>
    </div>
</header>
<main>
    <div class="hero-section">
        <h1 class="slogan">"Лучшие десерты для лучших клиентов!"</h1>
        <p class="description">Мы рады представить вам самые вкусные и свежие десерты, которые мы с любовью готовим каждый день. Наши десерты - это настоящее искусство, созданное для того, чтобы радовать вас и ваших близких.</p>
    </div>
    <div class="slider-section">
        <h2>Наши новинки</h2>
        <div class="slider">
            @foreach($latestDishes as $dish)
                <div class="dish-item">
                    <img src="{{ $dish['image'] }}" alt="{{ $dish['name'] }}">
                    <p class="dish-name">{{ $dish['name'] }}</p>
                </div>
            @endforeach
        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>
</body>
</html>
