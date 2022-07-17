<?php require "blocks/get_count_items.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../PublicPlaces/image/icon/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c36ee20c39.js" crossorigin="anonymous"></script>
    <title>PublicPlaces</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<div class="page">
    <div class="intro" id="intro">
        <div class="layout">
            <div class="intro__inner">
                <h1 class="intro__title">
                    Добро пожаловать в Public Places!
                </h1>

                <a class="button" href="https://tlgg.ru/@PublicPlacesBot">Telegram bot</a>
            </div>
        </div>
    </div>


    <section class="section" id="about">
        <div class="layout">
            <div class="section__header">
                <h2 class="section__title">Что мы предоставляем</h2>
                <div class="section__text">
                    <p class="">Бот Public Places предназначен для помощи в поиске
                        общественных мест, в определенном радиусе, исходя из
                        геопозиции. Также по выбору определенной категории,
                        который предоставляет Бот. Чтобы использовать весь
                        функционал бота, вам необходимо зарегистрироваться!
                        Благодарим за использование PublicPlacesBot
                    <p>
                </div>
            </div>

            <div class="about">
                <div class="about__item">
                    <div class="about__inner">
                        <div class="about__image">
                            <img src="../PublicPlaces/image/category/Поесть.jpg" alt="">
                        </div>
                        <div class="about__text">Поесть:<br>
                            <span>В данной категории, вы можете найти:<br> 
                                    Заведения быстрого питания,<br> кафе, рестораны,<br>
                                    кафейни и много другого,<br>связанного с питанием</span>
                        </div>
                    </div>
                </div>
                <div class="about__item">
                <div class="about__inner">
                        <div class="about__image">
                            
                            <img src="../PublicPlaces/image/category/Красота.jpg" alt="">
                        </div>
                        <div class="about__text">Красота:<br>
                            <span>В данной категории, вы можете найти:<br> 
                                    Парикмахерские, салоны<br> красоты, магазины<br> с косметикой,<br> 
                                    и много другого</span>
                        </div>
                    </div>
                </div>
                <div class="about__item">
                <div class="about__inner">
                        <div class="about__image">
                            
                            <img src="../PublicPlaces/image/category/Цветы.jpg" alt="">
                        </div>
                        <div class="about__text">Цветы:<br>
                            <span>В данной категории, вы можете найти:<br>Магазины цветов</span>
                        </div>
                    </div>
                </div>
                <div class="about__item">
                <div class="about__inner">
                        <div class="about__image">
                            
                            <img src="../PublicPlaces/image/category/медицина.jpg" alt="">
                        </div>
                        <div class="about__text">Медицина:<br>
                            <span>В данной категории, вы можете найти:<br> 
                                    Больницы, поликлиники,стоматологии, диспансеры<br> 
                                    и много другого,связанного с медициной</span>
                        </div>
                    </div>
                </div>
                <div class="about__item">
                <div class="about__inner">
                        <div class="about__image">
                            
                            <img src="../PublicPlaces/image/category/развлечения.jpg" alt="">
                        </div>
                        <div class="about__text">Развлечения:<br>
                            <span>В данной категории, вы можете найти:<br> 
                                    Бары, компьютерные клубы,караоке, бани и сауны<br> 
                                    и много друго,связанного с развлечением</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <div class="statistics">
        <div class="layout">

            <div class="static">
                <div class="static__item">
                    <div class="static__count">
                        <?php
                        $id_count_category = 1;
                        $count_items_return = get_count_items($id_count_category);
                        echo $count_items_return;
                        ?>
                    </div>
                    <div class="static__text">Поесть</div>
                </div>
                <div class="static__item">
                    <div class="static__count">
                    <?php
                        $id_count_category = 2;
                        $count_items_return = get_count_items($id_count_category);
                        echo $count_items_return;
                    ?>
                    </div>
                    <div class="static__text">Красота</div>
                </div>
                <div class="static__item">
                    <div class="static__count">
                    <?php
                        $id_count_category = 3;
                        $count_items_return = get_count_items($id_count_category);
                        echo $count_items_return;
                    ?>
                    </div>
                    <div class="static__text">Цветы</div>
                </div>
                <div class="static__item">
                    <div class="static__count">
                    <?php
                        $id_count_category = 4;
                        $count_items_return = get_count_items($id_count_category);
                        echo $count_items_return;
                    ?>
                    </div>
                    <div class="static__text">Медицина</div>
                </div>
                <div class="static__item">
                    <div class="static__count">
                    <?php
                        $id_count_category = 5;
                        $count_items_return = get_count_items($id_count_category);
                        echo $count_items_return;
                    ?>
                    </div>
                    <div class="static__text">Развлечения</div>
                </div>
            </div>

        </div>
    </div>


    <section class="section" id="categor">
        <div class="layout">

            <div class="section__header">
                    <h2 class="section__title">Категории</h2>
                    <div class="section__text">
                        <p>Бот Public Places предназначен для помощи в поиске
                        <p>
                    </div>
            </div>

            <div class="category">

                <div class="category-wrap">
                    <div class="category-item">
                        <img src="../PublicPlaces/image/category/поесть.jpg">
                        <div class="category-buttons">
                        <a href="php/input_public_places.php?id_category=1" class="card_button">Перейти</a>
                        </div>
                    </div>
                    <div class="category-title">
                        <a href="php/input_public_places.php?id_category=1">Поесть</a>                   
                    </div>
                </div>

                <div class="category-wrap">
                    <div class="category-item">
                        <img src="../PublicPlaces/image/category/Красота.jpg">
                        <div class="category-buttons">
                        <a href="php/input_public_places.php?id_category=2" class="card_button">Перейти</a>
                        </div>
                    </div>
                    <div class="category-title">
                        <a href="php/input_public_places.php?id_category=2">Красота</a>                   
                    </div>
                </div>

                <div class="category-wrap">
                    <div class="category-item">
                        <img src="../PublicPlaces/image/category/цветы.jpg">
                        <div class="category-buttons">
                        <a href="php/input_public_places.php?id_category=3" class="card_button">Перейти</a>
                        </div>
                    </div>
                    <div class="category-title">
                        <a href="php/input_public_places.php?id_category=3">Цветы</a>  
                    </div>
                </div>

                <div class="category-wrap">
                    <div class="category-item">
                        <img src="../PublicPlaces/image/category/медицина.jpg">
                        <div class="category-buttons">
                        <a href="php/input_public_places.php?id_category=4" class="card_button">Перейти</a>
                        </div>
                    </div>
                    <div class="category-title">
                        <a href="php/input_public_places.php?id_category=4">Медицина</a>
                    </div>
                </div>

                <div class="category-wrap">
                    <div class="category-item">
                        <img src="../PublicPlaces/image/category/развлечения.jpg">
                        <div class="category-buttons">
                        <a href="php/input_public_places.php?id_category=5" class="card_button">Перейти</a>
                        </div>
                    </div>
                    <div class="category-title">
                        <a href="php/input_public_places.php?id_category=5">Развлечения</a>                    
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="section section--devices">
        <div class="layout">
            <div class="section__header">
                    <h2 class="section__title">Pubpic Places Bot</h2>
            </div>

        <div class="devices">
            <img class="devices__item" src="../PublicPlaces/image/devices/macbook1.png">
            <img class="devices__item devices__item--phone" src="../PublicPlaces/image/devices/phone1.png">
        </div>
        </div>
    </section>

<?php require "blocks/footer.php" ?>
</div>  <!--page-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../PublicPlaces/js/app.js"></script>

</body>
</html>