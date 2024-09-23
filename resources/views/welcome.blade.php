<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
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
    <!-- Banner Section -->
    <section class="banner">
    <img src="images/desserts-background.jpg" alt="Баннер" class="banner-image">
    <div class="banner-text-container">
        <div class="banner-text">
            <section class="menu1"><h1>Добро пожаловать в Вкусняшки!</h1>
            <p class="menu2">Попробуйте наши новые блюда и насладитесь лучшими десертами в городе.</p>
            <a href="/menu" class="btn-primary">Посмотреть меню</a></section>
        </div>
    </div>
</section>
    <!-- Desserts Background Section -->
    <section class="desserts-background">
        <div class="desserts-overlay">
            <div class="slider-section">
                <h2 class="menu3">Наши блюда</h2>
                <div class="slider">
                    <div class="dish-item">
                        <img src="images/tort.png" alt="Десерт 1">
                        <div class="dish-info">
                            <h3>Десерт 1</h3>
                            <p>Легкий и воздушный десерт, который тает во рту.</p>
                            <a href="/menu#dessert1" class="btn-secondary">Подробнее</a>
                        </div>
                    </div>
                    <div class="dish-item">
                        <img src="images/muffin.png" alt="Десерт 2">
                        <div class="dish-info">
                            <h3>Десерт 2</h3>
                            <p>Сочные и ароматные маффины с разнообразными начинками.</p>
                            <a href="/menu#dessert2" class="btn-secondary">Подробнее</a>
                        </div>
                    </div>
                    <div class="dish-item">
                        <img src="images/pie.png" alt="Десерт 3">
                        <div class="dish-info">
                            <h3>Десерт 3</h3>
                            <p>Вкусный пирог с хрустящей корочкой и нежной начинкой.</p>
                            <a href="/menu#dessert3" class="btn-secondary">Подробнее</a>
                        </div>
                    </div>
                    <div class="dish-item">
                        <img src="images/pie.png" alt="Десерт 3">
                        <div class="dish-info">
                            <h3>Десерт 3</h3>
                            <p>Вкусный пирог с хрустящей корочкой и нежной начинкой.</p>
                            <a href="/menu#dessert3" class="btn-secondary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
    <h2>Что говорят наши клиенты</h2>
    <div class="testimonial-container">
        <div class="testimonial-item">
            <img src="images/otziv1.jfif" alt="Клиент 1">
            <div class="testimonial-text">
                <p>«Прекрасное место с отличными десертами. Обязательно вернусь!»</p>
                <span class="author">Анна</span>
            </div>
        </div>
        <div class="testimonial-item">
            <img src="images/otziv2.jpg" alt="Клиент 2">
            <div class="testimonial-text">
                <p>«Очень вкусно и уютно. Обслуживание на высшем уровне.»</p>
                <span class="author">Игорь</span>
            </div>
        </div>
        <div class="testimonial-item">
            <img src="images/otziv2.jpg" alt="Клиент 2">
            <div class="testimonial-text">
                <p>«Очень вкусно и уютно. Обслуживание на высшем уровне.»</p>
                <span class="author">Игорь</span>
            </div>
        </div>
        <div class="testimonial-item">
            <img src="images/otziv2.jpg" alt="Клиент 2">
            <div class="testimonial-text">
                <p>«Очень вкусно и уютно. Обслуживание на высшем уровне.»</p>
                <span class="author">Игорь</span>
            </div>
        </div>
    </div>
</section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
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