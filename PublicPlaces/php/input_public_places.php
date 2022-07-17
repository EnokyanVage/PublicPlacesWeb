<?php

$link = mysqli_connect("localhost", "root", "", "publicplaces");
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

$sql_categorya = "SELECT * FROM placescategory";
$result_category = mysqli_query($link,$sql_categorya);

if(!empty($_GET['id_category'])){
    $id = $link -> real_escape_string($_GET['id_category']); 

    $sql = 'SELECT * FROM places_data pd 
            JOIN places_photo pp on pd.id = pp.id_places 
            join placescategory pc on pd.id = pc.id_places 
            WHERE pc.id_category = "'.$id.'"';
    $result_public = mysqli_query($link, $sql);

    $sql_category_name = 'SELECT category_type FROM category WHERE id = "'.$id.'"';
    $result_name = mysqli_query($link,$sql_category_name);
    $product_name = mysqli_fetch_assoc($result_name);

    $sql_count = 'SELECT * FROM placescategory WHERE id_category = "'.$id.'"';
    $result_count = mysqli_query($link, $sql);
    $count_items_return = mysqli_num_rows($result_count);
}
?>


<!DOCTYPE html>
<html lang="en">
<?php require "../blocks/head.php" ?>
<body>

<header class="header" id="header">
    <div class="layout">
        <div class="header__inner">
            <a class="header__logo" href="../">Public Places</a>
        </div>
    </div>    
</header>

<section class="section" id="categor">
        <div class="layout">

            <div class="section__header">
            <?php
                    if(!empty($_GET['id_category'])){
                        ?>
                    <h2 class="section__title">

                        Категория: <?=$product_name['category_type'];?>
                    </h2>
                    <div class="section__text">
                        <p>Количество объявлений: <?=$count_items_return?>
                        <p>
                    </div>
                <?php
                    }
                ?>
            </div> <!--section__header-->

        
           <div class="category">
           <?php
                        if(!empty($_GET['id_category']))
                        {
                            while($row = mysqli_fetch_assoc($result_public)) 
                            {
                    ?>
                    <div class="category-wrap">

                        <div class="category-item">
                                <img src="data:image/png;base64,<?=base64_encode($row['photo']);?>">

                                <div class="category-buttons">
                                <a href="input_place.php?id_places=<?=$row['id_places']; ?>" class="card_button">Перейти</a>
                                </div>
                        </div> <!--category-item-->
                        
                        <div class="category-title">
                                <a href=""><?=$product_name['category_type'];?></a>                   
                        </div><!--category-title-->

                    </div><!--category-wrap-->
                    
                    <?php
                            }
                        }
                        ?>

            </div> <!--category-->

        </div> <!--layout-->
    </section>

<!-- <footer class="footer"  id="contact">
    <div class="layout">
        <div class="footer__inner">

            <div class="footer__col  footer__col--first">
                <div class="footer__title">PublicPlaces</div>
                <div class="footer__text">Бот Public Places предназначен для помощи в поиске
                    общественных мест, в определенном радиусе, исходя из
                    геопозиции. Благодарим за использование PublicPlacesBot</div>
            </div>

            <div class="footer__col  footer__col--second">
                <div class="footer__title">
                    Количество пользователей:
                </div>

                    <div class="footer__social">

                        <div class="footer__social-header">
                            <b>15k</b> пользователей
                        </div>


                        <div class="footer__social-content">
                            Ссылка:
                            <a href="https://tlgg.ru/@PublicPlacesBot" target="_blank">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </div>
                        
                    </div>

            </div>
            
            <div class="footer__col  footer__col--third">
                <div class="footer__title">Контакты:</div>
                    <div class="footer__text"><span>
                        © 2022 Public Places, inc<br>
                        by Enokyan Vage IP-812<br>
                        +7(953)-797-5351</span>
                    </div>
            </div>


        </div>
            
    </div>
</footer> -->
<?php require "../blocks/footer.php" ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../PublicPlaces/js/app.js"></script>

</body>
</html>