<div class="pop-ups gen-wrapper">
    <div class="pop-up" id="pop-up__registration">
        <div class="pop-up__container  pop-up__registration-container size-1">
            <div class="pop-up__close icon-close"></div>
            <div class="title">Регистрация</div>
            <form action="#" method="get" id="registration-form">
                <div class="field-wrapper">
                    <label class="label-wrapper">
                        <input type="text" name="NAME" placeholder="Ваше имя">
                    </label>
                </div>
                <div class="field-wrapper">
                    <label class="label-wrapper">
                        <input type="email" name="EMAIL" placeholder="Электронная почта">
                    </label>
                </div>
                <div class="field-wrapper flex">
                    <label class="label-wrapper">
                        <input type="tel" name="PHONE" placeholder="Телефон">
                    </label>
                    <div class="field-info">Только мобильные номера телефонов</div>
                </div>
                <div class="field-wrapper">
                    <label class="label-wrapper password-label">
                        <input type="password" name="PASSWORD" placeholder="Пароль">
                        <span class="images">
                            <img class="image-hide active" src="images/icons/hide.png" alt="">
                            <img class="image-show" src="images/icons/show.png" alt="">
                        </span>
                    </label>
                </div>
                <div class="field-wrapper">
                    <label class="label-wrapper">
                        <input type="password" name="PASSWORD_CHECK" placeholder="Подтверждение пароля">
                    </label>
                </div>
                <p>Нажимая кнопку зарегистрироваться вы принимаете условия <a href="#">пользовательского соглашения</a></p>
                <button class="button color3">Зарегистрироваться</button>
            </form>
        </div>
    </div>
    <div class="pop-up" id="pop-up__entrance">
        <div class="pop-up__container  pop-up__entrance-container size-1">
            <div class="pop-up__close icon-close"></div>
            <div class="pop-up__items flex">
                <div class="pop-up__item pop-up__item-left">
                    <div class="item-left-title">PETFINDER MAKES ADOPTING EASIER</div>
                    <ul class="item-left-list">
                        <li class="list-item">Donec sollicitudin molestie malesuada sollicitudin.</li>
                        <li class="list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta.</li>
                        <li class="list-item">Donec sollicitudin molestie malesuada.</li>
                        <li class="list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="pop-up__item pop-up__item-right">
                    <form action="#" method="get" id="entrance-form">
                        <div class="title">Вход на сайт</div>
                        <div class="field-wrapper">
                            <label class="label-wrapper">
                                <input type="email" name="EMAIL" placeholder="Электронная почта">
                            </label>
                        </div>
                        <div class="field-wrapper last-field-wrapper">
                            <label class="label-wrapper password-label">
                                <input class="password-input-img" type="password" name="PASSWORD" placeholder="Пароль">
                                <span class="images">
                                    <img class="image-hide active" src="images/icons/hide.png" alt="">
                                    <img class="image-show" src="images/icons/show.png" alt="">
                                </span>
                            </label>
                        </div>
                        <div class="password-restore-wrapper">
                            <div class="password-restore" data-window="pop-up__restore">Забыли пароль?</div>
                        </div>
                        <button class="button color3">Войти</button>
                    </form>
                    <div class="title title-secondary">У вас ещё нет акаунта?</div>
                    <div class="button button-reg color4" data-window="pop-up__registration">Зарегистрироваться</div>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up__restore">
        <div class="pop-up__container  pop-up__restore-container size-1">
            <div class="pop-up__close icon-close"></div>
            <div class="pop-up__items flex">
                <div class="pop-up__item pop-up__item-left">
                    <div class="item-left-title">PETFINDER MAKES ADOPTING EASIER</div>
                    <ul class="item-left-list">
                        <li class="list-item">Donec sollicitudin molestie malesuada sollicitudin.</li>
                        <li class="list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta.</li>
                        <li class="list-item">Donec sollicitudin molestie malesuada.</li>
                        <li class="list-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="pop-up__item pop-up__item-right">
                    <form action="#" method="get" id="restore-form">
                        <div class="title">Восстановление доступа</div>
                        <div class="field-wrapper">
                            <label class="label-wrapper">
                                <input type="email" name="EMAIL" placeholder="Электронная почта">
                            </label>
                        </div>
                        <button class="button color3">Сбросить текущий пароль</button>
                    </form>
                    <p class="entrance-wrapper"><span class="entrance" data-window="pop-up__entrance">Войдите,</span> если вспомнили пароль</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up__complain">
        <div class="pop-up__container  pop-up__complain-container size-2">
            <div class="pop-up__close icon-close"></div>
            <div class="title-wrapper"><span class="title">Пожаловаться на объявление</span></div>
            <div class="content">
                <div class="sub-content">Что именно не так?</div>
                <form action="#" method="get" id="complain-form">
                    <ul class="list">
                        <li>
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="1">
                                <span class="radio-text">Объява не по теме</span>
                            </label>
                        </li>
                        <li>
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="2">
                                <span class="radio-text">Это не животное а человек</span>
                            </label>
                        </li>
                        <li>
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="3">
                                <span class="radio-text">Это не реклама а спам</span>
                            </label>
                        </li>
                        <li>
                            <label class="label-wrapper">
                                <input class="radio-input" type="radio" name="OPTION" value="4">
                                <span class="radio-text">Недопустимый контент, фото порнаграфического содержания</span>
                            </label>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up__complain-text">
        <div class="pop-up__container pop-up__complain-text-container size-2">
            <div class="pop-up__close icon-close"></div>
            <div class="title-wrapper"><span class="title">Пожаловаться на объявление</span></div>
            <div class="content">
                <div class="sub-content">Что именно не так?</div>
                <form action="#" method="get" id="complain-text-form">
                    <textarea name="TEXT" placeholder="Напишите ваш комментарий"></textarea>
                    <div class="buttons">
                        <button class="button color4">Отправить</button>
                        <div class="button cancel-btn">Отмена</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up__parents">
        <div class="pop-up__container pop-up__parents-container">
            <div class="pop-up__close icon-close"></div>
            <div class="title">Родители</div>
            <div class="items">
                <div class="item">
                    <div class="item-content flex">
                        <div class="image" style="background-image: url(images/parent1.jpg)"></div>
                        <div class="text">
                            <div class="item-title">Мама:</div>
                            <p>Шикарная сучка голубых кровей, которую вожделеет каждый!</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content flex">
                        <div class="image" style="background-image: url(images/parent2.jpg)"></div>
                        <div class="text">
                            <div class="item-title">Папа:</div>
                            <p>Знатный кабель с большими причендалами. Привит, помыт и готов к эксплуатации </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up__parents-add">
        <div class="pop-up__container pop-up__parents-add-container">
            <div class="pop-up__close icon-close"></div>
            <div class="title">Родители</div>
            <div class="items">
                <div class="item">
                    <div class="field-wrapper field-wrapper-textarea flex-als">
                        <div class="field-title">Мама (описание):</div>
                        <div class="field-container">
                            <textarea name="TEXT"></textarea>
                        </div>
                    </div>
                    <div class="field-wrapper field-wrapper-photo flex-als">
                        <div class="field-title">Фотография</div>
                        <div class="photo-container">
                            <label class="label-wrapper label-wrapper-photo editable">
                                <input class="input-photo editable-input" type="file" name="PHOTO">
                                <img class="camera-img" src="images/icons/photo.svg" alt="">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="field-wrapper field-wrapper-textarea flex-als">
                        <div class="field-title">Папа (описание):</div>
                        <div class="field-container">
                            <textarea name="TEXT"></textarea>
                        </div>
                    </div>
                    <div class="field-wrapper field-wrapper-photo flex-als">
                        <div class="field-title">Фотография</div>
                        <div class="photo-container">
                            <label class="label-wrapper label-wrapper-photo editable">
                                <input class="input-photo editable-input" type="file" name="PHOTO">
                                <img class="camera-img" src="images/icons/photo.svg" alt="">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-basket">
        <div class="container">
            <div class="inner flex">
                <div class="item amount-item">
                    <div class="title">Корзина</div>
                    <div class="amount">3 096 RUB</div>
                </div>
                <a href="#" class="item button color4">Перейти к оплате</a>
            </div>
        </div>
    </div>
    <div class="tooltip-drop-layer">
        <div class="tooltip-drop-container"></div>
    </div>
</div>