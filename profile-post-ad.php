<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-post-ad">
        <div class="container">
            <form action="#" method="get" id="profile-post-ad-form">
                <div class="title-h title-h2">Подать объявление</div>
                <div class="profile-post-ad__top flex-als">
                    <div class="top-main">
                        <div class="title">Контактная информация</div>
                        <div class="item flex">
                            <div class="item-title email-title">Электронная почта</div>
                            <div class="item-value email-value">benediktys@mail.ru</div>
                        </div>
                        <div class="item flex message-option">
                            <div class="item-title">Разрешить сообщения</div>
                            <div class="item-value reg-checkbox-value">
                                <label class="reg-label-field">
                                    <input type="checkbox" name="MESSAGE" value="1" class="reg-checkbox-input">
                                    <span class="reg-checkbox-field"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item flex-als">
                            <div class="item-title">Ваше имя</div>
                            <div class="item-value item-name-value">Денис</div>
                            <div class="edit"><div class="edit-btn">Изменить</div></div>
                        </div>
                        <div class="item flex phone-item">
                            <div class="item-title">Телефон</div>
                            <div class="item-value phone-value">
                                <select name="PHONE">
                                    <option selected value="1">+7 (926) 697-96-73</option>
                                    <option value="2">Другой номер</option>
                                </select>
                                <span class="text">Только мобильные номера</span>
                            </div>
                        </div>
                        <div class="item flex-als-pt new-phone-item">
                            <div class="item-title">Новый номер</div>
                            <div class="item-value new-phone-value">
                                <input type="tel" class="field-item" name="NEW_PHONE">
                            </div>
                        </div>
                    </div>
                    <div class="top-aside">
                        <p>Все объявления должны соответствовать правилам KinPet</p>
                        <p>&nbsp;</p>
                        <p>Не подавайте одно и то же объявление повторно. <a href="#">Почему?</a></p>
                        <p>Не указывайте телефонов, электронную почту или адрес сайта в описании или на фото.</p>
                        <p>Не предлагайте <a href="#">запрещённые товары и услуги</a></p>
                    </div>
                </div>
                <div class="profile-post-ad__type">
                    <div class="title-h title-h2">Подать объявление</div>
                    <ul class="list">
                        <li class="list-item-wrapper">
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="1" checked>
                                <span class="radio-text">Заводчик / питомник</span>
                            </label>
                        </li>
                        <li class="list-item-wrapper">
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="2">
                                <span class="radio-text">Физическое лицо</span>
                            </label>
                        </li>
                        <li class="list-item-wrapper">
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="3">
                                <span class="radio-text">Приют</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="profile-location">
                    <div class="title-h title-h2">Место положение</div>
                    <div class="items">
                        <div class="item flex">
                            <div class="item-title">Город</div>
                            <div class="item-value shorten">
                                <select name="CITY" class="map-city">
                                    <option selected value="Москва">Москва</option>
                                    <option value="Санкт-Петербург">Санкт-Петербург</option>
                                    <option value="Москва2">Москва2</option>
                                    <option value="Москва3">Москва3</option>
                                </select>
                            </div>
                        </div>
                        <div class="item flex">
                            <div class="item-title">Метро</div>
                            <div class="item-value shorten">
                                <select name="METRO">
                                    <option selected value="1">Авиамоторная</option>
                                    <option value="2">Авиамоторная1</option>
                                    <option value="3">Авиамоторная2</option>
                                    <option value="4">Авиамоторная3</option>
                                </select>
                            </div>
                        </div>
                        <div class="item flex">
                            <div class="item-title">Улица</div>
                            <div class="item-value field-wrapper">
                                <label class="label-wrapper">
                                    <input type="text" class="map-street" name="STREET" placeholder="На пример: ул. Ленина 25">
                                </label>
                            </div>
                            <div class="field-clarification flex">
                                <div class="clarification-img-wrapper">
                                    <img class="clarification-img" src="images/icons/business.svg" alt="">
                                </div>
                                <div class="text">Улица и номер дома не будут показаны в объявлении</div>
                            </div>
                        </div>
                    </div>
                    <div id="map" class="profile-map" data-address="г. Москва, Нахимовский пр-т., 36"></div>
                </div>
                <div class="profile-post-ad__category">
                    <div class="title-h title-h2">Выберите катигорию</div>
                    <div class="items">
                        <div class="item">
                            <div class="title">Категория</div>
                            <ul class="list">
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="CATEGORY" value="1">
                                        <span class="radio-text">Собаки</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="CATEGORY" value="2">
                                        <span class="radio-text">Кошки</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="CATEGORY" value="3">
                                        <span class="radio-text">Птицы</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="CATEGORY" value="4">
                                        <span class="radio-text">Лошади</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="title">Породы</div>
                            <ul class="list">
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="BREED" value="1">
                                        <span class="radio-text">-</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="BREED" value="2">
                                        <span class="radio-text">Акита</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="BREED" value="3">
                                        <span class="radio-text">Хаски</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="BREED" value="4">
                                        <span class="radio-text">Бульдог</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="BREED" value="5">
                                        <span class="radio-text">Бельгийский гриффон</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="title">Вид объявления</div>
                            <ul class="list">
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="TYPE" value="1">
                                        <span class="radio-text">-</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="TYPE" value="2">
                                        <span class="radio-text">Продажа</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="TYPE" value="3">
                                        <span class="radio-text">В добрые руки</span>
                                    </label>
                                </li>
                                <li class="list-item-wrapper">
                                    <label class="label-wrapper">
                                        <input class="radio-input" type="radio" name="TYPE" value="4">
                                        <span class="radio-text">В дар (бесплатно)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="profile-post-ad__fields">
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Название объявления</div>
                        <label class="label-wrapper">
                            <input type="text" class="field-item field-item-clarification" name="TITLE">
                        </label>
                        <div class="field-info">
                            <div class="field-info-wrapper flex">
                                <div class="img-wrapper">
                                    <img class="image" src="images/icons/business.svg" alt="">
                                </div>
                                <div class="text">Улица и номер дома не будут показаны в объявлении, улица и номер дома не будут показаны в объявлении</div>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Дата рождения</div>
                        <label class="label-wrapper shorten">
                            <input type="text" class="field-item" name="DATE" id="datepicker" autocomplete="off">
                        </label>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Прикус</div>
                        <label class="label-wrapper shorten">
                            <select name="BITE">
                                <option value=""></option>
                                <option value="2">Прикус1</option>
                                <option value="3">Прикус2</option>
                                <option value="4">Прикус3</option>
                            </select>
                        </label>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Ожибаемы окрас</div>
                        <label class="label-wrapper">
                            <input type="text" class="field-item field-item-clarification" name="COLOR">
                        </label>
                        <div class="field-info">
                            <div class="field-info-wrapper flex">
                                <div class="img-wrapper">
                                    <img class="image" src="images/icons/business.svg" alt="">
                                </div>
                                <div class="text">Улица и номер дома не будут показаны в объявлении, улица и номер дома не будут показаны в объявлении</div>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Ожидаемый рост</div>
                        <label class="label-wrapper">
                            <input type="text" class="field-item field-item-clarification" name="HEIGHT">
                        </label>
                        <div class="field-info">
                            <div class="field-info-wrapper flex">
                                <div class="img-wrapper">
                                    <img class="image" src="images/icons/business.svg" alt="">
                                </div>
                                <div class="text">Улица и номер дома не будут показаны в объявлении, улица и номер дома не будут показаны в объявлении</div>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Вес сейчас</div>
                        <label class="label-wrapper shorten">
                            <select name="WEIGHT">
                                <option value="1"></option>
                                <option value="2">Вес1</option>
                                <option value="3">Вес2</option>
                                <option value="4">Вес3</option>
                            </select>
                        </label>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Индетификатор</div>
                        <label class="label-wrapper shorten">
                            <select name="IDENTIFIER">
                                <option value="1"></option>
                                <option value="2">Индетификатор1</option>
                                <option value="3">Индетификатор2</option>
                                <option value="4">Индетификатор3</option>
                            </select>
                        </label>
                    </div>
                    <div class="field-wrapper field-wrapper-docs field-wrapper-docs-main flex-als-pt">
                        <div class="field-title">Документы</div>
                        <label class="label-wrapper">
                            <select name="DOCUMENT">
                                <option value="1"></option>
                                <option value="2">Документ1</option>
                                <option value="3">Документ2</option>
                                <option value="4">Документ3</option>
                            </select>
                        </label>
                        <div class="field-info">
                            <div class="add-more-field add-more-field-docs">+ Добавить ещё документ</div>
                        </div>
                    </div>
                    <div class="field-wrapper field-wrapper-inoculations field-wrapper-inoculations-main flex-als-pt">
                        <div class="field-title">Прививки</div>
                        <label class="label-wrapper">
                            <select name="INOCULATION">
                                <option value="1"></option>
                                <option value="2">Прививки1</option>
                                <option value="3">Прививки2</option>
                                <option value="4">Прививки3</option>
                            </select>
                        </label>
                        <div class="field-info">
                            <div class="add-more-field add-more-field-inoculations">+ Добавить ещё документ</div>
                        </div>
                    </div>
                    <div class="field-wrapper field-wrapper-add-more flex-alc">
                        <div class="field-title">Родители</div>
                        <label class="label-wrapper shorten">
                            <span class="add-info" data-window="pop-up__parents-add">+ Добавить информацию о родителях</span>
                        </label>
                    </div>
                    <div class="field-wrapper field-wrapper-textarea flex-als-pt">
                        <div class="field-title">Описание объявления</div>
                        <div class="field-container">
                            <textarea name="TEXT"></textarea>
                            <div class="textarea-info">Подробно опишите товар или услугу. Не указывайте в объявлении телефон e-mail - для этого
                                есть отдельные поля
                            </div>
                        </div>
                    </div>
                    <div class="field-wrapper field-wrapper-amount flex-als-pt">
                        <div class="field-title">Цена</div>
                        <label class="label-wrapper">
                            <input class="input-number-only" type="text" name="AMOUNT">
                        </label>
                        <div class="currency">RUB</div>
                    </div>
                    <div class="field-wrapper field-wrapper-photos flex-alc-start">
                        <div class="field-title-wrapper">
                            <div class="field-title">Фотографии</div>
                            <div class="sub-title">Вы можете прикрепить не более 10 фотографий</div>
                        </div>
                        <div class="photos-container">
                            <div class="photo-container">
                                <label class="label-wrapper label-wrapper-photo">
                                    <input class="input-photo" type="file" name="PHOTO">
                                    <img class="camera-img" src="images/icons/photo.svg" alt="">
                                </label>
                                <span class="photo-icon icon-cw-circle"></span>
                                <span class="photo-icon icon-close-gen"></span>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrapper flex-als-pt">
                        <div class="field-title">Видео с YouTube</div>
                        <label class="label-wrapper">
                            <input type="text" class="field-item" name="VIDEO" placeholder="На пример: https:// youporn.com/dogestile">
                        </label>
                        <div class="field-info">
                            <div class="field-info-wrapper flex">
                                <div class="img-wrapper">
                                    <img class="image" src="images/icons/business.svg" alt="">
                                </div>
                                <div class="text">Улица и номер дома не будут показаны в объявлении, улица и номер дома не будут показаны в объявлении</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-post-ad__publish flex-alc">
                    <div class="text">Объявление будет размещено 30 дней</div>
                    <button class="button">Продолжить</button>
                </div>
            </form>
        </div>
    </div>
<?php
include 'components/footer.php';
?>