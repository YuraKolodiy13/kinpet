<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-start profile-nav">
        <div class="container">
            <div class="side-menu-icon-wrapper">
                <img class="side-menu-icon" src="images/icons/side-menu.svg" alt="">
                <div class="side-menu-icon-text icon-right-open">меню</div>
            </div>
            <div class="mob-overlay"></div>
            <?php
            include 'components/profile-aside.php';
            ?>
            <div class="profile-main">
                <div class="profile-start__announcement">
                    <p>Денис, добро пожаловать на сайт KinPet.ru</p>
                </div>
                <div class="profile-start__ads profile-start-no-ads">
                    <div class="ads-items">
                        <div class="ads-item">
                            <div class="status">Активные</div>
                            <div class="content">
                                <div class="no-ads-text">Пока у вас нет объявлений.</div>
                            </div>
                        </div>
                    </div>
                    <a class="button color2 size1 ads-btn" href="#">подать объявление</a>
                </div>
                <div class="profile-start__info">
                    <div class="title">Полезная информация</div>
                    <div class="items">
                        <div class="item color-1">
                            <div class="close-info icon-close"></div>
                            <p><a href="#"><span style="font-weight: bold;">Не забывайте платить бабло!</span> Это важно! Ноу мани ноу хани...</a></p>
                            <div class="buttons">
                                <a class="button btn-color-1 size1 ads-btn" href="#">Больше информации</a>
                                <a class="button btn-color-1 size3 ads-btn" href="#">отклонить</a>
                            </div>
                        </div>
                        <div class="item color-2">
                            <div class="close-info icon-close"></div>
                            <p><a href="#"><span style="font-weight: bold;">Не забывайте платить бабло!</span> Это важно! Ноу мани ноу хани...</a></p>
                            <div class="buttons">
                                <a class="button btn-color-2 size3 ads-btn" href="#">отклонить</a>
                            </div>
                        </div>
                        <div class="item color-3">
                            <div class="close-info icon-close"></div>
                            <p><a href="#"><span style="font-weight: bold;">Не забывайте платить бабло!</span> Это важно! Ноу мани ноу хани...</a></p>
                            <div class="buttons">
                                <a class="button btn-color-3 size3 ads-btn" href="#">Подробнее</a>
                                <a class="button btn-color-3 size3 ads-btn" href="#">Контакты</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>