<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-refill profile-nav">
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
                <div class="profile-refill__input">
                    <div class="title">Пополнение счёта</div>
                    <div class="input-wrapper">
                        <input class="input-number-only" type="text" name="AMOUNT">
                        <span class="currency">RUB</span>
                    </div>
                </div>
                <div class="profile-refill__method">
                    <div class="title">Выберите способ пополнения:</div>
                    <ul class="list">
                        <li class="item-wrapper">
                            <a href="#" class="item">Банковская карта</a>
                            <img class="image" src="images/method1.jpg" alt="" style="margin-top: -19px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">Сбербанк Онлайн</a>
                            <img class="image" src="images/method2.jpg" alt="" style="margin-top: -25px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">Яндекс Деньги</a>
                            <img class="image" src="images/method3.jpg" alt="" style="margin-top: -26px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">Оплата наличными</a>
                            <img class="image" src="images/method4.jpg" alt="" style="margin-top: -22px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">Банковским переводом</a>
                            <img class="image" src="images/method5.jpg" alt="" style="margin-top: -23px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">QIWI Кошелёк</a>
                            <img class="image" src="images/method6.jpg" alt="" style="margin-top: -25px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">QIWI Терминал</a>
                            <img class="image" src="images/method7.jpg" alt="" style="margin-top: -25px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">Web Money</a>
                            <img class="image" src="images/method8.jpg" alt="" style="margin-top: -24px;">
                        </li>
                        <li class="item-wrapper">
                            <a href="#" class="item">SMS</a>
                            <img class="image" src="images/method9.jpg" alt="" style="margin-top: -22px;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>