<?php
include 'components/header2.php';
?>
    <div class="section profile-nav profile-separator profile-info">
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
                <form action="#" method="get" id="profile-info-form">
                    <div class="profile-info__links">
                        <div class="item">
                            <div class="title">Объявления</div>
                            <div class="details">
                                <div class="value">
                                    <span class="info">27</span>
                                    (из них 2 активных)
                                </div>
                                <div class="link-wrapper">
                                    <a href="#" class="link">Перейти к списку<br> объявлений</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">Баланс</div>
                            <div class="details">
                                <div class="value">
                                    <span class="info">0,00 руб</span>
                                </div>
                                <div class="link-wrapper">
                                    <a href="#" class="link">Перейти в кошелек</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">Автопополнение</div>
                            <div class="details">
                                <div class="value">
                                    <span class="info">0,00 руб</span>
                                </div>
                                <div class="link-wrapper">
                                    <a href="#" class="link">Включить</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">Отзывы</div>
                            <div class="details">
                                <div class="value">
                                    <span class="info">28</span>
                                </div>
                                <div class="link-wrapper">
                                    <a href="#" class="link">Перейти в раздел<br> отзывы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-info__email flex">
                        <div class="item">
                            <div class="email">benediktys@mail.ru</div>
                            <div class="text">Частное лицо, номер пользователя - 3268599</div>
                        </div>
                        <div class="item">
                            <div class="status icon-check">Подтверждён</div>
                        </div>
                    </div>
                    <div class="profile-post-ad__location profile-location">
                        <div class="top">
                            <div class="top-title">Фотография</div>
                            <div class="photo-container">
                                <label class="label-wrapper label-wrapper-photo">
                                    <input class="input-photo" type="file" name="PHOTO">
                                    <span class="text">Д</span>
                                    <span class="pencil-img-wrapper">
                                    <img class="pencil-img" src="images/icons/pencil2.svg" alt="">
                                </span>
                                </label>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item flex">
                                <div class="item-title">Имя</div>
                                <div class="item-value field-wrapper">
                                    <label class="label-wrapper">
                                        <input type="text" class="name field-item" name="NAME">
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="item-title">Фамилия</div>
                                <div class="item-value field-wrapper">
                                    <label class="label-wrapper">
                                        <input type="text" class="last-name field-item" name="LAST_NAME">
                                    </label>
                                </div>
                            </div>
                            <div class="item block-item flex">
                                <div class="item-title">Город</div>
                                <div class="item-value block-item-value flex">
                                    <div class="field-wrapper selectric-wrapper selectric-map-city gen-location">
                                        <label class="label-wrapper">
                                            <input class="location-input" type="text" name="LOCATION" value="Москва" autocomplete="off">
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






                                    <select name="METRO" class="metro">
                                        <option selected value="1">Метро</option>
                                        <option value="2">Авиамоторная1</option>
                                        <option value="3">Авиамоторная2</option>
                                        <option value="4">Авиамоторная3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="map-open">+ Определить место на карте</div>
                            </div>
                            <div class="item street-item">
                                <div class="flex">
                                    <div class="item-title">Улица</div>
                                    <div class="item-value field-wrapper">
                                        <label class="label-wrapper">
                                            <input type="text" class="map-street" name="STREET" placeholder="На пример: ул. Ленина 25">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="map" class="profile-map" data-address="г. Москва, Нахимовский пр-т., 36"></div>
                    </div>
                    <div class="profile-info__phone">
                        <div class="title">Телефон</div>
                        <br>
                        <div class="phone-wrapper">
                            <div class="phone-text">+7 (926) 697-96-73</div>
                            <div class="phone-input-wrapper">
                                <input type="tel" name="PHONE" class="phone-input">
                                <div class="icon-check phone-edit-btn"></div>
                            </div>
                            <img class="phone-img phone-edit-btn" src="images/icons/pencil3.svg" alt="">
                        </div>
                        <br>
                        <div class="status icon-check">Подтверждён</div>
                        <br>
                        <div class="details">27 объявлений</div>
                    </div>
                    <div class="profile-info__fields profile-info__seller">
                        <div class="title-h title-h2">Для всех продавцов</div>
                        <div class="field-wrapper field-wrapper-type field-wrapper-type-main flex-alc">
                            <div class="field-title">Тип питомца</div>
                            <label class="label-wrapper">
                                <select name="TYPE">
                                    <option value="1"></option>
                                    <option value="2">Тип питомца1</option>
                                    <option value="3">Тип питомца2</option>
                                    <option value="4">Тип питомца3</option>
                                </select>
                            </label>
                            <div class="field-info">
                                <div class="add-more-field add-more-field-type">+ добавить ещё<br> тип питомца</div>
                            </div>
                        </div>
                        <div class="field-wrapper field-wrapper-specialization field-wrapper-specialization-main flex-alc">
                            <div class="field-title">Специализация</div>
                            <label class="label-wrapper">
                                <select name="SPECIALIZATION">
                                    <option value="1"></option>
                                    <option value="2">Специализация1</option>
                                    <option value="3">Специализация2</option>
                                    <option value="4">Специализация3</option>
                                </select>
                            </label>
                            <div class="field-info">
                                <div class="add-more-field add-more-field-specialization">+ добавить ещё<br> специализацию</div>
                            </div>
                        </div>
                        <div class="field-wrapper field-wrapper-textarea flex-als">
                            <div class="field-title">Информация о продавце</div>
                            <div class="field-container">
                                <textarea name="TEXT"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="profile-info__fields profile-info__organization">
                        <div class="title-h title-h2">Для организаций</div>
                        <div class="field-wrapper flex-alc">
                            <div class="field-title">Выберите тип аккаунта</div>
                            <label class="label-wrapper">
                                <select name="BITE">
                                    <option value=""></option>
                                    <option value="2">Прикус1</option>
                                    <option value="3">Прикус2</option>
                                    <option value="4">Прикус3</option>
                                </select>
                            </label>
                        </div>
                        <div class="field-wrapper flex-alc">
                            <div class="field-title">Название питомника или заводской приставки/приюта</div>
                            <label class="label-wrapper">
                                <input type="text" class="field-item field-item-clarification" name="TITLE">
                            </label>
                        </div>
                        <div class="documents">
                            <div class="document">
                                <div class="title">Копия родословной самки животного, способность к репродукции</div>
                                <label class="label-wrapper label-wrapper-document">
                                    <input class="input-document" type="file" name="DOCUMENT">
                                    <span class="input-text button button3">Выбрать фаил</span>
                                </label>
                            </div>
                            <div class="document">
                                <div class="title">Копия свидетельства о регистрации питомника или заводской приставки*</div>
                                <label class="label-wrapper label-wrapper-document">
                                    <input class="input-document" type="file" name="DOCUMENT">
                                    <span class="input-text button button3">Выбрать фаил</span>
                                </label>
                            </div>
                            <div class="document">
                                <div class="title">Если животное в совладении, то прикрепить договор оренды</div>
                                <label class="label-wrapper label-wrapper-document">
                                    <input class="input-document" type="file" name="DOCUMENT">
                                    <span class="input-text button button3">Выбрать фаил</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="profile-info__bottom">
                        <p>* Для получения статуса PRO необходимо предоставить документы подтверждающие что вы не ослы
                            Владеете всем по чесноку</p>
                        <div class="buttons">
                            <div class="button button3">Отмена</div>
                            <div class="button color4 button-connect">СОХРАНИТЬ</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>