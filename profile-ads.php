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
                <div class="profile-start__ads">
                    <div class="ads-tabs">
                        <div class="ads-tab active">Активные <span class="quantity">4</span></div>
                        <div class="ads-tab">На модерации <span class="quantity">8</span></div>
                        <div class="ads-tab">Завершённые <span class="quantity">1</span></div>
                    </div>
                    <div class="ads-items-blocks">
                        <div class="ads-items-block active">
                            <div class="ads-panel not-active">
                                <div class="select-all icon-check"></div>
                                <div class="options">
                                    <div class="option turbo-sale">
                                        Турбо-продажа
                                        <img class="colored-icon icon" src="images/icons/rocket.svg" style="width: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/rocket-gray.svg" style="width: 15px;" alt=""/>
                                    </div>
                                    <div class="option fast-sale">
                                        Быстрая продажа
                                        <img class="colored-icon icon" src="images/icons/light.svg" style="height: 17px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/light-gray.svg" style="height: 17px;" alt=""/>
                                    </div>
                                    <div class="option premium">
                                        Премиум
                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                    </div>
                                    <div class="option highlight">
                                        Выделить
                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                    </div>
                                    <div class="option raise">
                                        Поднять
                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="ads-items">
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main column-align">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                            <div class="more-options">
                                                                <span class="more-options-title">ещё</span>
                                                                <ul class="more-options-list">
                                                                    <li class="more-item-wrapper">
                                                                        <span class="more-item remove">Снять с публикации</span>
                                                                        <img class="colored-icon icon" src="images/icons/close.svg" style="width: 14px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/close-gray.svg" style="width: 14px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper premium">
                                                                        <span class="more-item">Премиум - размещение</span>
                                                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper highlight">
                                                                        <span class="more-item">Выделить</span>
                                                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper raise">
                                                                        <span class="more-item">Поднятьв поиске</span>
                                                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper statistics">
                                                                        <span class="more-item">Статистика просмотров</span>
                                                                        <img class="colored-icon icon" src="images/icons/view.svg" style="width: 16px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/view-gray.svg" style="width: 16px;" alt=""/>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="bottom-title">Продать быстрее:</div>
                                            <ul class="bottom-items">
                                                <li class="bottom-item">Турбо-продажа</li>
                                                <li class="bottom-item">Быстрая продажа</li>
                                                <li class="bottom-item">Премиум</li>
                                                <li class="bottom-item">Выделить</li>
                                                <li class="bottom-item">Поднять</li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads2.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main column-align">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                            <div class="more-options">
                                                                <span class="more-options-title">ещё</span>
                                                                <ul class="more-options-list">
                                                                    <li class="more-item-wrapper">
                                                                        <span class="more-item remove">Снять с публикации</span>
                                                                        <img class="colored-icon icon" src="images/icons/close.svg" style="width: 14px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/close-gray.svg" style="width: 14px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper premium">
                                                                        <span class="more-item">Премиум - размещение</span>
                                                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper highlight">
                                                                        <span class="more-item">Выделить</span>
                                                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper raise">
                                                                        <span class="more-item">Поднятьв поиске</span>
                                                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper statistics">
                                                                        <span class="more-item">Статистика просмотров</span>
                                                                        <img class="colored-icon icon" src="images/icons/view.svg" style="width: 16px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/view-gray.svg" style="width: 16px;" alt=""/>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="bottom-title">Продать быстрее:</div>
                                            <ul class="bottom-items">
                                                <li class="bottom-item">Турбо-продажа</li>
                                                <li class="bottom-item">Быстрая продажа</li>
                                                <li class="bottom-item">Премиум</li>
                                                <li class="bottom-item">Выделить</li>
                                                <li class="bottom-item">Поднять</li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ads-items-block">
                            <div class="ads-panel not-active">
                                <div class="select-all icon-check"></div>
                                <div class="options">
                                    <div class="option turbo-sale">
                                        Турбо-продажа
                                        <img class="colored-icon icon" src="images/icons/rocket.svg" style="width: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/rocket-gray.svg" style="width: 15px;" alt=""/>
                                    </div>
                                    <div class="option fast-sale">
                                        Быстрая продажа
                                        <img class="colored-icon icon" src="images/icons/light.svg" style="height: 17px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/light-gray.svg" style="height: 17px;" alt=""/>
                                    </div>
                                    <div class="option premium">
                                        Премиум
                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                    </div>
                                    <div class="option highlight">
                                        Выделить
                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                    </div>
                                    <div class="option raise">
                                        Поднять
                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="ads-items">
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main column-align">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                            <div class="more-options">
                                                                <span class="more-options-title">ещё</span>
                                                                <ul class="more-options-list">
                                                                    <li class="more-item-wrapper">
                                                                        <span class="more-item remove">Снять с публикации</span>
                                                                        <img class="colored-icon icon" src="images/icons/close.svg" style="width: 14px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/close-gray.svg" style="width: 14px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper premium">
                                                                        <span class="more-item">Премиум - размещение</span>
                                                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper highlight">
                                                                        <span class="more-item">Выделить</span>
                                                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper raise">
                                                                        <span class="more-item">Поднятьв поиске</span>
                                                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper statistics">
                                                                        <span class="more-item">Статистика просмотров</span>
                                                                        <img class="colored-icon icon" src="images/icons/view.svg" style="width: 16px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/view-gray.svg" style="width: 16px;" alt=""/>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads2.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main column-align">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                            <div class="more-options">
                                                                <span class="more-options-title">ещё</span>
                                                                <ul class="more-options-list">
                                                                    <li class="more-item-wrapper">
                                                                        <span class="more-item remove">Снять с публикации</span>
                                                                        <img class="colored-icon icon" src="images/icons/close.svg" style="width: 14px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/close-gray.svg" style="width: 14px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper premium">
                                                                        <span class="more-item">Премиум - размещение</span>
                                                                        <img class="colored-icon icon" src="images/icons/star.svg" style="width: 17px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/star-gray.svg" style="width: 17px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper highlight">
                                                                        <span class="more-item">Выделить</span>
                                                                        <img class="colored-icon icon" src="images/icons/pencil.svg" style="width: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/pencil-gray.svg" style="width: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper raise">
                                                                        <span class="more-item">Поднятьв поиске</span>
                                                                        <img class="colored-icon icon" src="images/icons/number.svg" style="height: 15px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/number-gray.svg" style="height: 15px;" alt=""/>
                                                                    </li>
                                                                    <li class="more-item-wrapper statistics">
                                                                        <span class="more-item">Статистика просмотров</span>
                                                                        <img class="colored-icon icon" src="images/icons/view.svg" style="width: 16px;" alt=""/>
                                                                        <img class="gray-icon icon" src="images/icons/view-gray.svg" style="width: 16px;" alt=""/>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ads-items-block">
                            <div class="ads-panel not-active">
                                <div class="select-all icon-check"></div>
                                <div class="options">
                                    <div class="option activate no-icon">Активировать</div>
                                    <div class="option delete no-icon">Удалить</div>
                                </div>
                            </div>
                            <div class="ads-items">
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action action-icon">
                                                                Активировать и поднять
                                                                <img class="action-arrow-icon" src="images/icons/arrow.svg" alt="">
                                                            </div>
                                                            <div class="action">Активировать</div>
                                                            <div class="action delete">Удалить</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="ads-item not-active">
                                    <form action="#" method="get">
                                        <div class="top flex">
                                            <label class="label-field">
                                                <input type="checkbox" name="ITEM" value="1" class="input-field">
                                                <span class="icon-field icon-check"></span>
                                            </label>
                                            <div class="item-container flex">
                                                <a href="#" class="item-image" style="background-image: url(images/ads2.jpg)"></a>
                                                <div class="item-content flex">
                                                    <div class="content-item content-item-main">
                                                        <div class="title-wrapper"><a class="title" href="#">Собака Кусака зернистая</a></div>
                                                        <div class="content-item-wrapper">
                                                            <div class="amount">9 500 RUB</div>
                                                            <div class="scale-wrapper">
                                                                <div class="scale" style="width: 60%;"></div>
                                                            </div>
                                                            <div class="info">Срок размещения истекает 25.12.2018</div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action action-icon">
                                                                Активировать и поднять
                                                                <img class="action-arrow-icon" src="images/icons/arrow.svg" alt="">
                                                            </div>
                                                            <div class="action">Активировать</div>
                                                            <div class="action delete">Удалить</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="content-item-secondary-wrapper">
                                                            <a class="edit" href="#">Редактировать</a>
                                                        </div>
                                                        <div class="view-wrapper">
                                                            <div class="view">155</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- if no ads then use this block
                    <div class="ads-items">
                        <div class="ads-item">
                            <div class="status">Активные</div>
                            <div class="content">
                                <div class="no-ads-text">Пока у вас нет объявлений.</div>
                            </div>
                        </div>
                    </div>
                    -->
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