<?php
include 'components/header.php';
?>
    <div class="section archive__page breed__page">
        <div class="main-content">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs-wrapper">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="#">Собаки</a></li>
                        <li><span>Породы собак</span></li>
                    </ul>
                </div>
                <div class="main-content-wrapper flex">
                    <div class="side-menu-icon-wrapper">
                        <img class="side-menu-icon" src="images/icons/side-menu.svg" alt="">
                        <div class="side-menu-icon-text icon-right-open">фильтр</div>
                    </div>
                    <div class="mob-overlay"></div>
                    <div class="archive__content article-content block-order">
                        <div class="archive__content-top">
                            <h1>Собака в Москве</h1>
                            <p>Вы встретили своего питомца на Petfinds? Поделитесь отзывом и фотографией, видео или ещё, чем захотите питомца на Petfinds? Поделитесь отзывом и
                                фотографией.</p>
                            <div class="archive__content-items">
                                <div class="breed__content-item flex">
                                    <a href="#" class="item-image-wrapper" style="background-image: url(images/breed.jpg)"></a>
                                    <div class="item-content">
                                        <div class="title-wrapper"><a href="#" class="title">Лупоглазка Хаска</a></div>
                                        <p>Популярность: <span class="text-num">21</span> место среди <span class="text-num">241</span> породы собак</p>
                                        <div class="items flex">
                                            <div class="info-item">
                                                <div class="item-title">Возраст</div>
                                                <div class="item-details">11-14 лет</div>
                                            </div>
                                            <div class="info-item">
                                                <div class="item-title">Группа породы</div>
                                                <div class="item-details">терьер</div>
                                            </div>
                                        </div>
                                        <div class="buttons flex">
                                            <a href="#" class="more-btn button color4">подробнее</a>
                                            <a href="#" class="buy-btn button color4">Купить</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="breed__content-item flex">
                                    <a href="#" class="item-image-wrapper" style="background-image: url(images/breed2.jpg)"></a>
                                    <div class="item-content">
                                        <div class="title-wrapper"><a href="#" class="title">Лупоглазка Хаска</a></div>
                                        <p>Популярность: <span class="text-num">21</span> место среди <span class="text-num">241</span> породы собак</p>
                                        <div class="items flex">
                                            <div class="info-item">
                                                <div class="item-title">Возраст</div>
                                                <div class="item-details">11-14 лет</div>
                                            </div>
                                            <div class="info-item">
                                                <div class="item-title">Группа породы</div>
                                                <div class="item-details">терьер</div>
                                            </div>
                                        </div>
                                        <div class="buttons flex">
                                            <a href="#" class="more-btn button color4">подробнее</a>
                                            <a href="#" class="buy-btn button color4">Купить</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="breed__content-item flex">
                                    <a href="#" class="item-image-wrapper" style="background-image: url(images/breed.jpg)"></a>
                                    <div class="item-content">
                                        <div class="title-wrapper"><a href="#" class="title">Лупоглазка Хаска</a></div>
                                        <p>Популярность: <span class="text-num">21</span> место среди <span class="text-num">241</span> породы собак</p>
                                        <div class="items flex">
                                            <div class="info-item">
                                                <div class="item-title">Возраст</div>
                                                <div class="item-details">11-14 лет</div>
                                            </div>
                                            <div class="info-item">
                                                <div class="item-title">Группа породы</div>
                                                <div class="item-details">терьер</div>
                                            </div>
                                        </div>
                                        <div class="buttons flex">
                                            <a href="#" class="more-btn button color4">подробнее</a>
                                            <a href="#" class="buy-btn button color4">Купить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-pagination-wrapper">
                                <div class="page-pagination">
                                    <span class="pagination-prev passive">
                                      <span class="pagination-prev-icon"></span>
                                    </span>
                                    <ul class="pagination-list">
                                        <li class="active-wrapper"><span class="item active">1</span></li>
                                        <li><a class="item" href="#">2</a></li>
                                        <li><a class="item" href="#">3</a></li>
                                        <li><a class="item" href="#">4</a></li>
                                        <li><a class="item" href="#">5</a></li>
                                        <li><a class="item" href="#">6</a></li>
                                        <li><a class="item" href="#">...</a></li>
                                        <li><a class="item" href="#">30</a></li>
                                    </ul>
                                    <a href="#" class="pagination-next">
                                        <span class="pagination-next-icon"></span>
                                    </a>
                                </div>
                                <div class="pagination-info">1-30 из 241 Найденных</div>
                            </div>
                        </div>
                    </div>
                    <div class="side-bar">
                        <div class="icon-close side-icon-close"></div>
                        <form action="#" method="get" id="side-simple-search-form">
                            <div class="title">Породы</div>
                            <label class="label-wrapper icon-search">
                                <input type="text" name="SEARCH" placeholder="Поиск по породам">
                            </label>
                        </form>
                        <ul class="breed-filter-list">
                            <li class="breed-filter-block">
                                <span class="title icon-arrow-up">Размер</span>
                                <ul class="breed-filter-block-list">
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="SIZE" value="1" class="breed-input" checked>
                                            <span class="breed-title">Карликовые</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="SIZE" value="2" class="breed-input">
                                            <span class="breed-title">Маленькие</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="SIZE" value="3" class="breed-input">
                                            <span class="breed-title">Средние</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="SIZE" value="4" class="breed-input">
                                            <span class="breed-title">Крупные</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="SIZE" value="5" class="breed-input">
                                            <span class="breed-title">Гигантские</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="breed-filter-block">
                                <span class="title icon-arrow-up">Обучаемость</span>
                                <ul class="breed-filter-block-list">
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="LEARNING" value="1" class="breed-input" checked>
                                            <span class="breed-title">Нет</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="LEARNING" value="2" class="breed-input">
                                            <span class="breed-title">Сложность</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="LEARNING" value="3" class="breed-input">
                                            <span class="breed-title">Средние</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="LEARNING" value="4" class="breed-input">
                                            <span class="breed-title">Просто</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="LEARNING" value="5" class="breed-input">
                                            <span class="breed-title">Легко</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="breed-filter-block">
                                <span class="title icon-arrow-up">Содержание</span>
                                <ul class="breed-filter-block-list">
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="KEEPING" value="1" class="breed-input" checked>
                                            <span class="breed-title">Содержание1</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="KEEPING" value="2" class="breed-input">
                                            <span class="breed-title">Содержание2</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="breed-filter-block">
                                <span class="title icon-arrow-up">Здоровье</span>
                                <ul class="breed-filter-block-list">
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="HEALTH" value="1" class="breed-input" checked>
                                            <span class="breed-title">Здоровье1</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="HEALTH" value="2" class="breed-input">
                                            <span class="breed-title">Здоровье2</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="breed-filter-block">
                                <span class="title icon-arrow-up">Группа МКФ</span>
                                <ul class="breed-filter-block-list">
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="GROUP" value="1" class="breed-input" checked>
                                            <span class="breed-title">Группа1</span>
                                        </label>
                                    </li>
                                    <li class="breed-item-wrapper">
                                        <label class="breed-label">
                                            <input type="checkbox" name="GROUP" value="2" class="breed-input">
                                            <span class="breed-title">Группа2</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a class="side-bar-img-wrapper" href="#"><img class="side-bar-img" src="images/side-bar.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="archive__page-text">
            <div class="container">
                <h2>Большой выбор животных</h2>
                <p>В интернет-магазине одежды и обуви Lamoda.ru каждый может выбрать и купить одежду, обувь или аксессуар в 2 клика.
                    В каталоге интернет-магазина Lamoda.ru более 1000 брендов мужской, женской и детской обуви и одежды разных ценовых категорий, всего более 2 000 000
                    товаров.
                    Кроме того, у нас есть аксессуары, косметика и парфюмерия, спортивные товары, и ассортимент постоянно пополняется!</p>
                <p>Со многими производителями Lamoda.ru сотрудничает напрямую, в остальных случаях мы выбираем надежных, проверенных поставщиков. Мы гарантируем
                    подлинность товара,
                    что подтверждается сертификатами.</p>
                <h3>Большой выбор животных</h3>
                <p><a href="#">Прогулка у дома</a></p>
                <h3>Популярные теги</h3>
                <p><a href="#">Высушеный корм </a></p>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>