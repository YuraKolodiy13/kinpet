<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-conversation profile-nav">
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
                <div class="profile-conversation__details">
                    <div class="ads-items-block active">
                        <div class="ads-panel">
                            <div class="back-btn icon-right-open reg-link">Назад</div>
                            <div class="options">
                                <div class="option option-block">
                                    Заблокировать
                                    <img class="colored-icon icon" src="images/icons/block.svg" style="width: 16px;" alt=""/>
                                    <img class="gray-icon icon" src="images/icons/block-gray.svg" style="width: 16px;" alt=""/>
                                </div>
                                <div class="option option-remove">
                                    Удалить
                                    <img class="colored-icon icon" src="images/icons/remove.svg" style="height: 17px;" alt=""/>
                                    <img class="gray-icon icon" src="images/icons/remove-gray.svg" style="height: 17px;" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="conversation-block">
                        <div class="top flex">
                            <a href="#" class="item-image" style="background-image: url(images/ads.jpg)"></a>
                            <div class="item-content flex">
                                <div class="content-item content-item-main">
                                    <div class="content-item-wrapper">
                                        <div class="title-wrapper"><a href="#" class="title">Собака Кусака зернистая</a></div>
                                        <div class="address">Адрес: Москва Виноградова 18</div>
                                    </div>
                                    <div class="bottom-item-wrapper">
                                        <div class="phone">Показать телефон</div>
                                    </div>
                                </div>
                                <div class="content-item content-item-secondary">
                                    <div class="price">Цена не указана</div>
                                    <a href="#" class="link">Питомник</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="incoming-line">
                                <p>Как на счёт завтра? По бырому? даю 2500 в час!</p>
                                <div class="info">
                                    <div class="time">15:17</div>
                                    <div class="date">03.05.2018</div>
                                </div>
                            </div>
                            <div class="outgoing-line">
                                <p>Тогда можно не по бырому!</p>
                                <div class="info">
                                    <div class="time">15:17</div>
                                    <div class="date">03.05.2018</div>
                                </div>
                            </div>
                            <div class="incoming-line">
                                <p>договорились, если всё понравиться оставлю на кинпете хороший отзыв
                                    о вас и вашем мастерстве случки ;)</p>
                                <div class="info">
                                    <div class="time">15:17</div>
                                    <div class="date">03.05.2018</div>
                                </div>
                            </div>
                            <div class="outgoing-line">
                                <p>До встречи</p>
                                <div class="info read">
                                    <div class="status">Просмотрено</div>
                                    <div class="time">15:17</div>
                                    <div class="date">03.05.2018</div>
                                    <!-- use class "sent" for one check -->
                                </div>
                                <!--<div class="status-wrapper">
                                    <div class="status read">Просмотрено</div>
                                </div>-->
                            </div>
                        </div>
                        <div class="bottom">
                            <form action="#" method="get" class="conversation-submit-form">
                                <div class="attach-files">
                                    <label class="attach-doc attach-label">
                                        <input type="file" name="DOC" class="attach-field">
                                        <img class="icon" src="images/icons/attach.svg" style="height: 20px;" alt=""/>
                                    </label>
                                    <label class="attach-photo attach-label">
                                        <input type="file" name="PHOTO" class="attach-field">
                                        <img class="icon" src="images/icons/camera.svg" style="height: 18px;" alt=""/>
                                    </label>
                                </div>
                                <div class="text-container">
                                    <!--<input type="text" name="TEXT" class="message-input-field">-->
                                    <textarea class="message-textarea-field" rows="1" name="TEXT"></textarea>
                                    <button class="send-message">
                                        <img class="icon" src="images/icons/mail.svg" style="width: 34px;" alt=""/>
                                        Отправить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'components/footer.php';
?>