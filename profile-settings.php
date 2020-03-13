<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-settings profile-nav">
        <div class="container">
            <div class="side-menu-icon-wrapper">
                <img class="side-menu-icon" src="images/icons/side-menu.svg" alt="">
                <div class="side-menu-icon-text icon-right-open">меню</div>
            </div>
            <div class="mob-overlay"></div>
            <div class="profile-aside">
                <div class="icon-close side-icon-close"></div>
                <ul class="profile-aside-list">
                    <li class="list-item-wrapper"><a href="#" class="list-item">Мои объявления</a></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Сообщения</a></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Управление счтом</a></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Тарифы</a></li>
                    <li class="list-item-wrapper active"><span class="list-item">Настройки</span></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Поддержка</a></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Информация о продавце</a></li>
                    <li class="list-item-wrapper"><a href="#" class="list-item">Отчётные документы</a></li>
                </ul>
            </div>
            <div class="profile-main">
                <form action="#" method="get" id="profile-settings">
                    <div class="profile-settings__options">
                        <div class="title-h title-h2">Настройка уведомлений</div>
                        <p>Сайт имеет право присылать системные вуведомления без возможности отписки от них</p>
                        <div class="items">
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Персональные подборки</div>
                                    <p>Подборки интересующих объявлений и категорий</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION1" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Сообщения</div>
                                    <p>Уведомлений о новых сообщениях в мессенджере</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION2" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Акции</div>
                                    <p>Индивидуальные скидки и специальные предложения</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION3" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Участие в исследованиях</div>
                                    <p>На основе ваших ответов мы сделаем наш сайт лучше</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION4" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Новости</div>
                                    <p>Информация о компаниях и новых функциях Сайта</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION5" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="item flex">
                                <div class="text">
                                    <div class="item-title">Советы от Сайта</div>
                                    <p>Рекомендации по эффективной работе с сайтом</p>
                                </div>
                                <div class="item-option">
                                    <label class="reg-label-field">
                                        <input type="checkbox" name="OPTION1" value="1" class="reg-checkbox-input">
                                        <span class="reg-checkbox-field"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-settings__password">
                        <div class="title-h title-h2">Смена пароля</div>
                        <p>Введите свой текущий пароль, новый пароль, и повторите ввод нового пароля, чтобы исключить возможность опечатки.</p>
                        <div class="items">
                            <div class="field-wrapper flex-als-pt">
                                <div class="field-title">Текущий пароль</div>
                                <label class="label-wrapper">
                                    <input type="password" class="field-item" name="C_PASSWORD">
                                </label>
                            </div>
                            <div class="field-wrapper flex-als-pt">
                                <div class="field-title">Новый пароль</div>
                                <label class="label-wrapper">
                                    <input type="password" class="field-item" name="N_PASSWORD">
                                </label>
                            </div>
                            <div class="field-wrapper flex-als-pt">
                                <div class="field-title">Повторите пароль</div>
                                <label class="label-wrapper password-label">
                                    <input type="password" class="password-input-img field-item" name="PASSWORD_CHECK">
                                    <span class="images">
                                        <img class="image-hide active" src="images/icons/hide.png" alt="">
                                        <img class="image-show" src="images/icons/show.png" alt="">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button class="button">Сохранить</button>
                    </div>
                </form>
                <div class="profile-settings__remove">
                    <div class="title-h title-h2">Удаление аккаунта</div>
                    <p>Если вы хотите на всегда удалить свою учётную запись и все свои объявления,
                        то нажмите на кнопку “Перейти к удалению учётной записи”</p>
                    <a href="#" class="button">Перейти к удалению учётной записи</a>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>