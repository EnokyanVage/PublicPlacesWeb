<?php

$link = mysqli_connect("localhost", "root", "", "publicplaces");
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}


$sql_categorya = "SELECT * FROM placescategory";
$result_category = mysqli_query($link,$sql_categorya);

if(!empty($_GET['id_places'])){
    $id = $link -> real_escape_string($_GET['id_places']); 

    $sql = 'SELECT * FROM places_data pd 
            JOIN places_photo pp on pd.id = pp.id_places 
            join placescategory pc on pd.id = pc.id_places 
            WHERE pd.id = "'.$id.'"';
    $result_public = mysqli_query($link, $sql);
    $public_name = mysqli_fetch_assoc($result_public);
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


<section class="section">
        <div class="layout">

            <div class="section__header">
            <?php
                    if(!empty($_GET['id_places'])){
                        ?>
                    <h2 class="section__title">

                        Public place: <?=$public_name['pp_name'];?>
                    </h2>
                <?php
                    }
                ?>
            </div> <!--section__header-->

            <div class="publicplace">
                <div class="publicplace__item">
                    <img class="publicplace__img" src="../<?=$public_name['photo'];?>" alt="">
                </div>

                <div class="publicplace__item">

                    <div class="accordion">
                        <div class="accordion__item" data-collapse="#publicplace_1">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="assets/images/services/photography.png" alt="">
                                <div class="accordion__title">Описание</div>
                            </div>
                            <div class="accordion__content" id="publicplace_1">
                                <p><?=$public_name['description'];?></p>
                            </div>
                        </div>

                        <div class="accordion__item active" data-collapse="#publicplace_2">
                            <div class="accordion__header">
                                <img class="accordion__icon" src="assets/images/services/creativity.png" alt="">
                                <div class="accordion__title">Время работы и номер телефона</div>
                            </div>
                            <div class="accordion__content" id="publicplace_2">
                                <p>
                                Время работы: <?=$public_name['time_work'];?><br>
                                Номер телефона: <?=$public_name['number_phone'];?><br>
                                Имя и фамилия: <?=$public_name['description'];?>
                                </p>
                            </div>
                        </div>

                        <div class="map_item" data-local="<?=$public_name['location'];?>">
                                <div id="map"></div>  
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.publicplace__item -->
            </div><!-- /.publicplace -->

        </div>
</section>


<?php require "../blocks/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<c44dda51-297c-4972-8b81-19464d27d6e6>" type="text/javascript"></script>
    <script src="../../PublicPlaces/js/app.js"></script>
    <script src="../../PublicPlaces/js/placemark.js" type="text/javascript"></script>

</body>
</html>