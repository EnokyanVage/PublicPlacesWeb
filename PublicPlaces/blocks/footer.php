<?php

$link = mysqli_connect("localhost", "root", "", "publicplaces");
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

function get_count_users(){
    global $link;
    $sql = "SELECT * FROM users_data";
    $result_user_count = mysqli_query($link, $sql);
    $count_user = mysqli_num_rows($result_user_count);
    return $count_user;
}

?>

<footer class="footer"  id="contact">
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
                            <b>
                            <?php
                                $count_users_return = get_count_users();
                                echo $count_users_return;
                            ?>  
                            </b> пользователь 
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
</footer>