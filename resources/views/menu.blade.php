<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню - Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        /* Вставьте обновленный CSS здесь */
    </style>
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
    <div class="container">
        <div class="filters">
            <h2>Фильтры</h2>
            <form action="{{ route('menu.index') }}" method="GET">
                <label for="sort">Сортировать по:</label>
                <select name="sort" id="sort">
                    <option value="newest">Новизне</option>
                    <option value="country">Стране</option>
                    <option value="name">Наименованию</option>
                </select>
                <label for="category">Категория:</label>
                <select name="category" id="category">
                    <option value="">Все</option>
                    <option value="первые">Первые блюда</option>
                    <option value="вторые">Вторые блюда</option>
                    <option value="напитки">Напитки</option>
                </select>
                <label for="category">Цена:</label>
                <select name="category" id="category">
                    <option value="">Все</option>
                    <option value="первые">По возрастанию</option>
                    <option value="вторые">По убыванию</option>
                </select>
                <button type="submit">Применить</button>
            </form>
        </div>
        <div class="info-section">
            <h2>О нашей компании</h2>
            <img src="{{ asset('images/about-us.jpg') }}" alt="О нас">
            <img src="{{ asset('images/about-us2.jpg') }}" alt="О нас">
            <p>
                Мы — команда профессионалов, увлеченных созданием уникальных и вкусных блюд. Наше меню предлагает разнообразие как для ценителей классических рецептов, так и для тех, кто ищет что-то новенькое. Мы тщательно отбираем ингредиенты и стремимся к высшему качеству в каждом блюде.
            </p>
            <p>
                Наша цель — предоставить вам лучший кулинарный опыт, который вы захотите повторить. Мы приглашаем вас посетить нас и убедиться в этом сами!
            </p>
        </div>
    </div>
    <h2>Меню</h2>
    <div class="dishes" id="dishes">
        @foreach($dishes as $dish)
        <div class="dish-card">
        <a href="{{ route('dish.show', $dish->id) }}">
    <img src="{{ $dish->image }}" alt="{{ $dish->name }}">
    <h1>{{ $dish->name }}</h1>
</a>
        </div>
        @endforeach
    </div>
    <button class="load-more-button" id="loadMore">Загрузить еще</button>
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
<script>
    let page = 1;
    const itemsPerPage = 5;

    $(document).ready(function() {
        // Initially show only a subset of items
        $('.dish-card').slice(itemsPerPage).hide();

        // Handle the load more button click
        $('#loadMore').on('click', function() {
            page++;
            let offset = itemsPerPage * page;
            $('.dish-card').slice(0, offset).fadeIn();
            
            // Hide the button if no more items are left
            if ($('.dish-card').length <= $('.dish-card:visible').length) {
                $(this).hide();
            }
        });

        // Hide the load more button if there are no more items
        if ($('.dish-card').length <= itemsPerPage) {
            $('#loadMore').hide();
        }
    });
</script>
</body>
</html>