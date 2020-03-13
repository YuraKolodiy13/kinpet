<?php
include 'components/header3.php';
?>
    <div class="section ordering">
        <div class="main-content">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs-wrapper">
                        <li><a href="index.php">Главная</a></li>
                        <li><span>Связаться с продавцом</span></li>
                    </ul>
                </div>
                <div class="main-content-wrapper">
                    <div class="ordering-title">Связаться с продавцом</div>
                    <div class="ordering__product flex">
                        <div class="image-wrapper">
                            <a href="#" class="image" style="background-image: url(images/cat1.jpg)"></a>
                            <div class="favorite-icons" data-window="pop-up__entrance">
                                <span class="icon icon-heart"></span>
                                <span class="icon icon-heart-empty"></span>
                            </div>
                        </div>
                        <div class="item-content flex">
                            <div class="top">
                                <div class="title-wrapper">
                                    <a class="title" href="#">Хаски в Москве</a>
                                </div>
                                <div class="info">№ 525087455 размещено сегодня в 20:31</div>
                                <div class="address-wrapper">
                                    <a href="#" class="address icon-location">г. Москва, Петрашка д. 22</a>
                                </div>
                                <div class="amounts price-discount">
                                    <div class="req-amount-wrapper">
                                        <span class="req-amount">25 000</span><span class="req-currency currency">RUB</span>
                                    </div>
                                    <div class="old-amount-wrapper">
                                        <span class="old-amount">25 000</span><span class="currency">RUB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="details">Не для продажи на территории РФ Не для продажи на территории РФ Не для</div>
                        </div>
                    </div>
                    <div class="ordering__arrangement flex">
                        <div class="block block-form">
                            <div class="title">Отправить сообщение продавцу</div>
                            <form action="#" method="get" id="arrangement-form">
                                <div class="items">
                                    <div class="item flex-alc-start">
                                        <div class="field-title">Имя:</div>
                                        <div class="field-wrapper">
                                            <input type="text" class="field-item" name="NAME">
                                        </div>
                                    </div>
                                    <div class="item flex-alc-start">
                                        <div class="field-title">Телефон:</div>
                                        <div class="field-wrapper">
                                            <input type="tel" class="field-item" name="PHONE">
                                        </div>
                                    </div>
                                    <div class="item flex-alc-start">
                                        <div class="field-title">Эл почта:</div>
                                        <div class="field-wrapper">
                                            <input type="email" class="field-item" name="EMAIL">
                                        </div>
                                    </div>
                                    <div class="item flex-als-pt">
                                        <div class="field-title">Сообщение:</div>
                                        <div class="field-wrapper">
                                            <textarea name="TEXT"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="button color4">отправить</button>
                            </form>
                        </div>
                        <div class="block block-info">
                            <div class="title">Позвонить продавцу</div>
                            <div class="link-wrapper">
                                <a class="link" href="tel:+74951654456">+7 (495) 165-44-56</a>
                            </div>
                            <p>Скажите что вы нашли объыявление на PETFINDS</p>
                            <p>&nbsp;</p>
                            <p><b>Внимание!</b> НЕ соглашайтесь на предоплату.
                                Оплата только по факту! утром деньги
                                и вечером деньги... а стулья потом можеит быть.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>