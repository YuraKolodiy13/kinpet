<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-confirmation profile-nav">
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
                <h2>Объявление активировано</h2>
                <p>Объявление <a href="#">Собака кусака зернистая</a> успешно активировано. Оно появится в результатах поиска в течение 30 минут.</p>
                <p>&nbsp;</p>
                <h3>Продайте быстрее!</h3>
                <p>Примените к объявлению пакет услуг «Турбо-продажа» — и вы продадите товар гораздо быстрее!</p>
                <span class="button turbo-btn">
                    <span class="button-title">Турбо продажа</span>
                    <span class="button-info">20х просмотров</span>
                </span>
                <p>&nbsp;</p>
                <h3 style="color: #21ac50;font-size: 21px;">В 20 раз больше просмотров вашего объявления!</h3>
                <p>Благодаря пакету <b>Турбо продажа</b> к вашему объявлению будут применены все дополнительные услуги Kinpet. Вы продадите товар максимально быстро.</p>
                <p>&nbsp;</p>
                <ul class="content-list">
                    <li class="content-list-item">
                        <img class="icon" src="images/icons/star.svg" style="width: 55px;" alt="">
                        <div class="list-item-title">Премиум</div>
                        <div class="list-item-text">Объявление будет в течение 7 дней показываться в верхней части страниц результатов поиска.</div>
                    </li>
                    <li class="content-list-item">
                        <img class="icon" src="images/icons/pencil.svg" style="width: 48px;" alt="">
                        <div class="list-item-title">Выделение</div>
                        <div class="list-item-text">Объявление будет в течение 7 дней выделено цветом в поиске.</div>
                    </li>
                    <li class="content-list-item">
                        <img class="icon" src="images/icons/number.svg" style="height: 50px;" alt="">
                        <div class="list-item-title">7 поднятий</div>
                        <div class="list-item-text">Объявление 6 раз поднимется на первое место в результатах поиска.</div>
                    </li>
                </ul>
                <div class="bottom flex">
                    <div class="bottom-item bottom-item-text"><b>Экономия</b> 47% <span class="small">от стоимости услуг</span></div>
                    <div class="bottom-item bottom-item-prices">
                        <div class="old-price">2 001 RUB</div>
                        <div class="price">Цена: 1 059 RUB</div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <a href="#" class="button accept-btn">Применить пакет "Турбо продажа"</a>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>