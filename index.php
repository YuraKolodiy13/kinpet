<?php
include 'components/header.php';
?>
    <div class="section">
        <div class="top-info" style="background-image: url(images/top-img2.jpg)">
            <div class="container">
                <div class="inner">
                    <div class="top-info__title">Найдите своего любимчика</div>
                    <p>Поиск домашних животных среди тысяч объявлений от лучших
                        заводчиков, питомников и частных лиц со всей России</p>
                    <form class="flex" action="#" method="get" id="search-form">
                        <div class="field-wrapper field-wrapper-search">
                            <label class="label-wrapper">
                                <span class="icon-search"></span>
                                <input type="text" name="SEARCH" placeholder="Вид питомца, порода или название питомника" autocomplete="off">
                            </label>
                            <div class="search-results type-results">
                                <ul class="search-results-list">
                                    <li class="search-results-item-wrapper"><span class="search-results-item item">Вид питомца, порода </span></li>
                                    <li class="search-results-item-wrapper"><span class="search-results-item item">Вид питомца, порода </span></li>
                                    <li class="search-results-item-wrapper"><span class="search-results-item item">Вид питомца, порода </span></li>
                                    <li class="search-results-item-wrapper"><span class="search-results-item item">Вид питомца, порода </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="field-wrapper field-wrapper-location">
                            <label class="label-wrapper">
                                <span class="icon-location"></span>
                                <span class="input-placeholder">Город</span>
                                <input class="location-input" type="text" name="LOCATION" autocomplete="off">
                                <span class="icon-arrow-up"></span>
                            </label>
                            <div class="location-results type-results">
                                <ul class="location-results-list">
                                    <li class="location-results-item-wrapper first-level">
                                        <span class="location-results-item item">Республика Адыгея</span>
                                        <ul class="sub-list">
                                            <li class="location-results-item-wrapper second-level">
                                                <span class="location-results-item item">Май Кот</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="location-results-item-wrapper first-level">
                                        <span class="location-results-item item">Алтайский край</span>
                                        <ul class="sub-list">
                                            <li class="location-results-item-wrapper second-level">
                                                <span class="location-results-item item">Барнаул</span>
                                            </li>
                                            <li class="location-results-item-wrapper second-level">
                                                <span class="location-results-item item">Бийск</span>
                                            </li>
                                            <li class="location-results-item-wrapper second-level">
                                                <span class="location-results-item item">Рублёвск</span>
                                            </li>
                                            <li class="location-results-item-wrapper second-level">
                                                <span class="location-results-item item">Рублёвск</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="button color4">Найти</button>
                    </form>
                </div>
            </div>
            <img class="top-img1" src="images/top1.png" alt="">
            <img class="top-img2" src="images/top2.png" alt="">
            <img class="top-img3" src="images/top3.png" alt="">
            <img class="top-img4" src="images/bird.png" alt="">
        </div>
        <div class="messaging">
            <div class="container">
                <div class="messaging__items flex">
                    <div class="messaging__item messaging__item-vertical">
                        <div class="messaging__item-content">
                            <div class="messaging__images">
                                <img style="width: 23px;" class="messaging__image" src="images/icons/check.svg" alt="">
                                <img style="width: 31px;" class="messaging__image" src="images/icons/kiti.svg" alt="">
                                <img style="width: 28px;" class="messaging__image" src="images/icons/heart.svg" alt="">
                            </div>
                            <div class="messaging__title">Получи скидку 30 %</div>
                            <p>Вы встретили своего питомца на Petfinds?<br>
                                Поделитесь отзывом и фотографией.</p>
                        </div>
                    </div>
                    <div class="messaging__item messaging__item-link" data-window="pop-up__entrance">
                        <img class="messaging__avatars" src="images/avatars.jpg" alt="">
                        <div class="messaging__title">Присоединитесь к нашему сообществу</div>
                        <p>Вы встретили своего питомца на Petfinds?
                            Поделитесь <a href="#">отзывом</a> и фотографией.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular">
            <div class="container">
                <div class="popular__top flex">
                    <div class="popular__top-title">Популярные питомцы в <span>Москве</span></div>
                    <div class="popular__top-link-wrapper">
                        <a href="#" class="popular__top-link icon-right-open">Все питомцы</a>
                    </div>
                </div>
                <div class="popular__items flex">
                    <div class="popular__item two" style="background-image: url(images/pop1.png);">
                        <div class="title-h title-h2"><a href="#">Собаки</a></div>
                        <ul class="popular__item-list">
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item icon-right-open" href="#">Все породы</a></li>
                        </ul>
                    </div>
                    <div class="popular__item two" style="background-image: url(images/pop2.png)">
                        <div class="title-h title-h2"><a href="#">Кошки</a></div>
                        <ul class="popular__item-list">
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item icon-right-open" href="#">Все породы</a></li>
                        </ul>
                    </div>
                    <div class="popular__item three" style="background-image: url(images/pop3.png)">
                        <div class="title-h title-h2"><a href="#">Птицы</a></div>
                        <ul class="popular__item-list">
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item icon-right-open" href="#">Все породы</a></li>
                        </ul>
                    </div>
                    <div class="popular__item three" style="background-image: url(images/pop4.png)">
                        <div class="title-h title-h2"><a href="#">Птицы</a></div>
                        <ul class="popular__item-list">
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item icon-right-open" href="#">Все породы</a></li>
                        </ul>
                    </div>
                    <div class="popular__item three" style="background-image: url(images/pop5.png)">
                        <div class="title-h title-h2"><a href="#">Птицы</a></div>
                        <ul class="popular__item-list">
                            <li class="list-item-wrapper"><a class="list-item" href="#">Birmans</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">British Shorthairs</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Exotics</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Norwegian Forest</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Mixed Breeds</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Persians</a></li>
                            <li class="list-item-wrapper"><a class="list-item" href="#">Ragdolls</a></li>
                            <li class="list-item-wrapper"><a class="list-item icon-right-open" href="#">Все породы</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="help" style="background-image: url(images/help.jpg)">
            <div class="container">
                <div class="help__content">
                    <div class="help__title">Мы здесь, чтобы помочь!</div>
                    <p>Бездомные животные, приюты и другие нуждаются в нашей помощи, мы не безразличны к судьбам братьев наших меньших.</p>
                    <a href="#" class="button color3">Поможем вместе</a>
                </div>
            </div>
        </div>
        <div class="main-text">
            <div class="container">
                <h1>Kinpet - это зашибись поиск!</h1>
                <p>В интернет-магазине одежды и обуви Lamoda.ru каждый может выбрать и купить одежду, обувь или аксессуар в 2 клика.В каталоге интернет-магазина Lamoda.ru
                    более
                    1000 брендов мужской, женской и детской обуви и одежды разных ценовых категорий, всего более 2 000 000 товаров. Кроме того, у нас есть аксессуары,
                    косметика и
                    парфюмерия, спортивные товары, и ассортимент постоянно пополняется!</p>
                <h3>Большой выбор животных</h3>
                <p>В интернет-магазине одежды и обуви Lamoda.ru каждый может выбрать и купить одежду, обувь или аксессуар в 2 клика.В каталоге интернет-магазина Lamoda.ru
                    более
                    1000 брендов мужской, женской и детской обуви и одежды разных ценовых категорий, всего более 2 000 000 товаров. Кроме того, у нас есть аксессуары,
                    косметика и
                    парфюмерия, спортивные товары, и ассортимент постоянно пополняется!</p>
                <p>Со многими производителями Lamoda.ru сотрудничает напрямую, в остальных случаях мы выбираем надежных, проверенных поставщиков. Мы гарантируем
                    подлинность товара,
                    что подтверждается сертификатами.</p>
                <h3>Большой выбор животных</h3>
                <p>В интернет-магазине одежды и обуви Lamoda.ru каждый может выбрать и купить одежду, обувь или аксессуар в 2 клика.
                    В каталоге интернет-магазина Lamoda.ru</p>
            </div>
        </div>
        <div class="tabbers">
            <div class="container">
                <div class="tabber">
                    <div class="tabs-titles">
                        <div class="tab-title active">Собаки</div>
                        <div class="tab-title">Кошки</div>
                        <div class="tab-title">Грызуны</div>
                        <div class="tab-title">Птицы</div>
                        <div class="tab-title">Рыбки</div>
                        <div class="tab-title">Лошади</div>
                        <div class="tab-title">Рептилии</div>
                    </div>
                    <div class="tabs-contents">
                        <div class="tab-content active">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals1</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals2</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals3</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals4</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals5</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals6</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tabber">
                    <div class="tabs-titles">
                        <div class="tab-title active">Отзывы о заводчиках</div>
                        <div class="tab-title">Отзывы о приютах</div>
                        <div class="tab-title">Статьи</div>
                    </div>
                    <div class="tabs-contents">
                        <div class="tab-content active">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Ragdolls</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Siamese</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Orientals</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals1</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <ul class="tab-content-list">
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Bengals2</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Birmans</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">British Shorthairs</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Exotics</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Norwegian Forest</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Mixed Breeds</a></li>
                                <li class="tab-content-item-wrapper"><a class="tab-content-item" href="#">Persians</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional">
            <div class="container">
                <div class="additional__items flex">
                    <div class="additional__item">
                        <p>Зарегистрируйте своё жилье - заработайте милиён или даже два</p>
                        <p><b>Опубликуйте свои интимные фотки в инстаграмм</b></p>
                        <div class="button color4 size2 additional__item-registration" data-window="pop-up__registration">Подробнее</div>
                    </div>
                    <div class="additional__item">
                        <p>Подпишись на рассылку Секретных предложений</p>
                        <p>Получишь ещё мильён</p>
                        <form class="flex bg-fields" action="#" method="get" id="subscribe-form">
                            <input type="email" name="EMAIL" placeholder="Введите адрес почты">
                            <button class="button color4 size2">Подписаться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>