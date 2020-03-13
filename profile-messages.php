<?php
include 'components/header2.php';
?>
    <div class="section profile-separator profile-messages profile-nav">
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
                <div class="profile-messages__info">
                    <div class="sort-wrapper">
                        <select name="SORT">
                            <option value="1">По любому объявлению</option>
                            <option value="2">Только по моим объявлениям</option>
                        </select>
                    </div>
                    <div class="ads-items-blocks">
                        <div class="ads-items-block active">
                            <div class="ads-panel not-active">
                                <div class="select-all icon-check"></div>
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
                                                        <div class="title-wrapper"><a href="#" class="title">Питомник FABLEDBEAR (ФАБЛЕДБЕАР)
                                                                Питомник FABLEDBEAR (ФАБЛЕДБЕАР)</a></div>
                                                        <div class="text">Собака кусака зернистая cобака кусака зернистая</div>
                                                        <div class="message">Удачи и до встречи!</div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="date read">6 ноября</div>
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
                                                        <div class="title-wrapper"><a href="#" class="title">Собака Кусака зернистая</a></div>
                                                        <div class="text">Собака, улыбака рыжая сучка дрючка 50 000 руб</div>
                                                        <div class="message">Удачи и до встречи!</div>
                                                    </div>
                                                    <div class="content-item content-item-secondary">
                                                        <div class="date sent">22 ноября</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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