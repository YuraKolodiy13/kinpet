$(document).ready(function () {

    /**********************************************************************CONTROL CSS TRANSITION*/

    $(".css-transitions-after-page-load").each(function (index, element) {
        $(element).removeClass("css-transitions-after-page-load");
    });

    /**********************************************************************SCROLL BAR WIDTH*/

    var width = document.body.clientWidth;

    var scrollDiv = document.createElement("div");
    scrollDiv.className = "scrollbar-measure";
    document.body.appendChild(scrollDiv);

    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;

    document.body.removeChild(scrollDiv);

    if (scrollbarWidth > 0) {
        width = width + scrollbarWidth;
    }

    /**********************************************************************CHECK TOUCH*/

    var clickHandler = ('ontouchstart' in document.documentElement ? "touchstart" : "click");

    /**********************************************************************MAP*/

    var city = $(".map-city").val();

    $(".map-city").change(function () {
        city = $(this).val();
        $(".map-street").keyup();
    });

    var sUrl = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";

    function getScript(source, callback) {
        var el = document.createElement('script');
        el.onload = callback;
        el.src = source;
        document.body.appendChild(el);
    }

    function contactsMapInit() {
        var address = $(".profile-map").attr("data-address");
        var geocoder = ymaps.geocode(address);

        geocoder.then(
            function (result) {
                var coords = result.geoObjects.get(0).geometry.getCoordinates(),
                    myMap = new ymaps.Map('map', {
                        center: coords,
                        zoom: 16,
                        controls: ['zoomControl', 'geolocationControl']
                    }),
                    marker = new ymaps.Placemark(coords, result, {
                        iconLayout: 'default#image',
                        iconImageHref: 'images/icons/marker.svg',
                        iconImageSize: [41, 52],
                        iconImageOffset: [-21, -52]
                    });

                myMap.behaviors.disable('scrollZoom');
                myMap.geoObjects.add(marker);
                myMap.container.fitToViewport(true);
                var position = myMap.getGlobalPixelCenter();
                myMap.setGlobalPixelCenter([position[0], position[1]]);

                $(".map-street").keyup(function () {
                    $(".profile-map").attr("data-address", city + ", " + $(this).val());
                    address = $(".profile-map").attr("data-address");
                    geocoder = ymaps.geocode(address);

                    console.log(city + ", " + $(this).val());
                    geocoder.then(
                        function (result) {
                            coords = result.geoObjects.get(0).geometry.getCoordinates();
                            marker.geometry.setCoordinates(coords);
                            myMap.setCenter([coords[0], coords[1]]);
                        }
                    );
                });
            }
        );
    }

    function contactsMap() {
        if ($('#map').hasClass('profile-map')) {
            getScript(sUrl, function () {
                ymaps.ready(function () {
                    contactsMapInit();
                });
            });
        }
    }

    contactsMap();

    /**********************************************************************MENU TOGGLE*/

    $("#open-menu").click(function () {
        $(this).toggleClass("opened");
    });

    if (width < 1025) {
        $("#main-menu .menu-item-has-children").append("<span class='menu-button'></span>");
        $("#main-menu .menu-button").click(function () {
            $(this).prev().slideToggle(300);
            $(this).toggleClass("active");
        });

        $(".profile-menu").click(function () {
            $(this).toggleClass("active");
        });

        $(document).on("click", ".ads-item .more-options", function () {
            $(this).toggleClass("active");
        });

        $(".user-image-wrapper").click(function () {
            $(this).toggleClass("active");
        });

        function headerScroll() {
            if (window.pageYOffset > 0) {
                $("header").addClass("header-scroll")
            } else {
                $("header").removeClass("header-scroll")
            }
        }

        headerScroll();

        window.onscroll = function () {
            headerScroll();
        };
    }

    /**********************************************************************MOBILE SIDEBAR*/

    $(".side-menu-icon-wrapper").click(function () {
        $(".mob-overlay, .side-bar, .profile-aside").addClass("active");
        $("html, body").addClass("menu-opened");
    });

    $(".mob-overlay, .side-icon-close").click(function () {
        $(".mob-overlay, .side-bar, .profile-aside").removeClass("active");
        $("html, body").removeClass("menu-opened");
    });

    /**********************************************************************MOBILE SINGLE*/

    if (width < 992) {
        if ($(".product-single").length) {
            var details = $(".product-single__details")[0].outerHTML;
            $(".product-single__details").remove();
            $(details).insertAfter($(".product-single__photos"));
        }
    }

    /**********************************************************************SWIPER*/

    var swiper = new Swiper('.products-slider-swiper', {
        slidesPerView: 4,
        /*autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },*/
        speed: 600,
        navigation: {
            nextEl: '.products-slider-next',
            prevEl: '.products-slider-prev'
        },
        breakpoints: {
            991: {
                slidesPerView: 3
            },
            767: {
                slidesPerView: 2
            },
            479: {
                slidesPerView: 1
            }
        }
    });

    var galleryTop = new Swiper('.gallery-top', {
        centeredSlides: true,
        slidesPerView: 1,
        slideToClickedSlide: true,
        allowTouchMove: false,
        loop: true,
        loopedSlides: 4,
        loopAdditionalSlides: 4,
        simulateTouch: true

    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        centeredSlides: true,
        spaceBetween: 10,
        touchRatio: 0.2,
        slidesPerView: 4,
        freeModeMomentumRatio: 0.5,
        freeModeMomentumBounce: false,
        freeModeSticky: true,
        slideToClickedSlide: true,
        loop: true,
        loopedSlides: 4,
        loopAdditionalSlides: 4,
        navigation: {
            nextEl: '.main-slider-next',
            prevEl: '.main-slider-prev'
        },
        breakpoints: {
            575: {
                slidesPerView: 3
            },
            479: {
                slidesPerView: 2
            }
        }
    });

    if ($(".gallery-top").length) {
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }

    var swiper = new Swiper('.similar-swiper', {
        slidesPerView: 4,
        spaceBetween: 35,
        centeredSlides: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        loop: true,
        speed: 600,
        navigation: {
            nextEl: '.gen-slider-next',
            prevEl: '.gen-slider-prev'
        },
        breakpoints: {
            991: {
                slidesPerView: 3,
                spaceBetween: 25
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            500: {
                slidesPerView: 1
            }
        }
    });

    /**********************************************************************GALLERY*/

    $('.gallery-image').fancybox({
        loop: true,
        clickContent: false,
        transitionDuration: 100,
        animationDuration: 500,
        animationEffect: "fade",
        buttons: [
            'slideShow',
            'fullScreen',
            'thumbs',
            'download',
            'close'
        ],
        thumbs: {
            autoStart: true
        },
        slideShow: {
            autoStart: false,
            speed: 4000
        },
        afterShow: function (instance) {
            galleryTop.slideToLoop(instance.currIndex);
        }
    });

    $(".main-slider-slide").click(function (e) {
        var index = galleryTop.realIndex;
        $('.gallery-image').eq(index).click();
    });

    /******************************************************************************TOOLTIP*/

    if (width > 1024) {
        $(".tooltip-btn-gen").hover(function () {
            $(this).closest(".tooltip-block").addClass("primary-position");
        }, function () {
            $(this).closest(".tooltip-block").removeClass("primary-position");
        });
    } else {
        $(".tooltip-btn-gen").click(function () {
            $(".tooltip-btn-gen").removeClass("active");
            $(".tooltip-block").removeClass("primary-position");
            $(this).closest(".tooltip-block").addClass("primary-position");
            $(this).addClass("active");
        });
    }

    $(document).on(clickHandler, function (e) {
        var container = $(".tooltip-gen");
        if (container.has(e.target).length === 0) {
            $(".tooltip-btn-gen").removeClass("active");
            $(".tooltip-block").removeClass("primary-position");
        }
    });

    if (width > 1320) {
        $(".tooltip-btn").hover(function () {
            var content = $(this).next().html();
            $(".tooltip-drop-container").html(content);
            var btnPos = $(this).offset();
            var btnWidth = $(this).innerWidth();
            var btnHeight = $(this).innerHeight();
            $(".tooltip-drop-container").offset({left: btnPos.left + (btnWidth / 2) - 79, top: btnPos.top + btnHeight + 18});
            $(".tooltip-drop-container").addClass("active");
        }, function () {
            $(".tooltip-drop-container").removeClass("active");
        });
    } else {
        $(".tooltip-btn").click(function () {
            var content = $(this).next().html();
            $(".tooltip-drop-container").html(content);
            $(".tooltip-drop-layer").addClass("active");
        });
    }

    $(window).bind(clickHandler, function (event) {
        if ($(event.target).hasClass("active") && $(event.target).hasClass("tooltip-drop-layer")) {
            $(event.target).removeClass("active");
        }
    });

    /******************************************************************************SELECTRIC*/

    function selectricTrigger() {
        $('select').selectric();

        setTimeout(function () {
            $.each($('.selectric-wrapper'), function () {
                $(this).find("ul").addClass("items-list");
            });
        }, 100);
    }

    selectricTrigger();

    $(".selectric-button").click(function (event) {
        event.preventDefault();
    });

    /******************************************************************************SIDE SEARCH STYLE*/

    $.each($('#side-search-form .option, .selectric-metro'), function () {
        var index = $(this).find("[selected]").index();
        if (index == 0) {
            $(this).find(".selectric-wrapper").addClass("all-selected");
            if ($(this).hasClass("selectric-metro")) {
                $(this).addClass("all-selected");
            }
        }
    });

    $("#side-search-form select, .selectric-metro select").change(function () {
        if ($(this).val() == 1) {
            $(this).closest(".selectric-wrapper").addClass("all-selected");
        } else {
            $(this).closest(".selectric-wrapper").removeClass("all-selected");
        }
    });

    /**********************************************************************INPUT LABEL & TYPE*/

    $(".location-input").focus(function () {
        $(".input-placeholder").addClass("active");
    });

    $("#search-form input, .gen-location input").focusout(function () {
        if ($(this).hasClass("location-input") && $(this).prop("value") === "") {
            $(".input-placeholder").removeClass("active");
        }
        $(this).closest(".field-wrapper").find(".icon-arrow-up").removeClass("active");
    });

    $("#search-form input, .gen-location input").on("input", function () {
        $(this).closest(".field-wrapper").find(".type-results").addClass("active");
        $(this).closest(".field-wrapper").find(".icon-arrow-up").addClass("active");
    });

    $(".type-results .item").click(function () {
        var value = $(this).text();
        $(this).closest(".field-wrapper").find("input").val(value);
        $(this).closest(".field-wrapper").find(".type-results").removeClass("active");
    });

    $(document).on("click", function (e) {
        var container = $(".type-results");

        if (container.has(e.target).length === 0) {
            $(".type-results").removeClass("active");
        }
    });

    $('select').on('selectric-before-open', function () {
        $(".type-results").removeClass("active");
    });

    /**********************************************************************TABS*/

    $(".tab-title").click(function () {
        $(this).parent().find(".tab-title").removeClass("active");
        $(this).addClass("active");
        $(this).parent().next().find(".tab-content").removeClass("active").eq($(this).index()).addClass("active");
    });

    /**********************************************************************SHOW PASSWORD*/

    $(".password-label .images").click(function () {
        var element = $(this).parent().find("input");
        if (element.attr("type") === "password") {
            element.attr("type", "text");
            $(".image-hide").removeClass("active");
            $(".image-show").addClass("active");
        } else {
            element.attr("type", "password");
            $(".image-hide").addClass("active");
            $(".image-show").removeClass("active");
        }
    });

    /**********************************************************************SINGLE ADD COMMENT*/

    if ($('#comments-form').length) {
        var textarea = $('#comments-form')[0].outerHTML;
    }


    $(".reply-title").click(function (event) {

        if (!$(this).hasClass("active")) {
            var name = $(this).closest(".comment-content").children(".comment-content-info").find(".comment-content-name").text();
            $("#comments-form-additional").remove();
            $(".reply-title").removeClass("active");
            $(this).next().prepend(textarea);
            $(".single__comments-bottom #comments-form").find(".cancel-comment").removeClass("primary-cancel-comment");
            $(".single__comments-bottom #comments-form").attr("id", "comments-form-additional");
            $(this).next().children(".comments-form").find(".to-user").text(name);
            $(this).addClass("active");

            $('#comments-form-additional').validate({
                submitHandler: function (form) {
                    /*form.submit();*/
                    $("#comments-form-additional").remove();
                    $(".reply-title").removeClass("active");
                },
                lang: 'ru',
                rules: {
                    TEXT: {
                        required: true,
                        minlength: 2
                    }
                }
            });
        }
    });

    $(".single__content").on("click", ".cancel-comment", function (event) {
        if ($(this).hasClass("primary-cancel-comment")) {
            $(this).closest(".comments-form").find("textarea").val("");
        } else {
            $(this).closest(".reply-container").prev().removeClass("active");
            $(this).closest(".comments-form").remove();
        }
    });


    /**********************************************************************SIDE BAR*/

    $(".side-menu-items-title, .breed-filter-block .title, #simplify-search-form .items-title").click(function (event) {
        $(this).next().slideToggle();
        $(this).toggleClass("down");
    });

    /**********************************************************************PHONE MASK*/

    $.each($('input[type="tel"]'), function () {
        $(this).inputmask({"mask": "+7 (999) 999-99-99", showMaskOnHover: false});
    });

    /**********************************************************************POP-UP TRIGGER*/

    $("[data-window]").click(function (event) {
        var id = $(this).attr('data-window');
        $("#" + id).addClass("active");
    });

    $(window).bind(clickHandler, function (event) {
        if ($(event.target).hasClass("active") || $(event.target).hasClass("pop-up__close")) {
            $(event.target).closest(".pop-up.active").removeClass("active");
        }
    });

    /**********************************************************************TEXTAREA FOCUS*/

    $(".single__page").on("focusin", "#comments-form textarea, #comments-form-additional textarea", function (event) {
        $(this).closest("form").addClass('active');
    });

    $(".single__page").on("focusout", "#comments-form textarea, #comments-form-additional textarea", function (event) {
        $(this).closest("form").removeClass('active');
    });

    /**********************************************************************LIKE & DISLIKE*/

    $(".single__recommendation-item.icon-like").click(function (event) {
        if ($(".single__recommendation-items").hasClass("decreased") || $(".single__recommendation-items").hasClass("inactive")) {
            var number = parseInt($(".single__recommendation-summary .num").text()) + 1;
            $(".single__recommendation-summary .num").text(number);
            $(".single__recommendation-items").addClass("increased").removeClass("decreased").removeClass("inactive");
        }
    });

    $(".single__recommendation-item.icon-dislike").click(function (event) {
        if ($(".single__recommendation-items").hasClass("increased")) {
            var number = parseInt($(".single__recommendation-summary .num").text()) - 1;
            $(".single__recommendation-summary .num").text(number);
            $(".single__recommendation-items").addClass("decreased").removeClass("increased");
        }
    });

    /**********************************************************************POP-UP CLOSE*/

    $(".pop-up__entrance-container .button-reg, .pop-up__entrance-container .password-restore").click(function (event) {
        $("#pop-up__entrance").removeClass("active");
    });

    $(".pop-up__restore-container .entrance").click(function (event) {
        $("#pop-up__restore").removeClass("active");
    });


    /**********************************************************************CATALOG VIEW*/

    $(".view-list .icon").click(function (event) {
        $(".view-list .icon").removeClass("active");
        $(this).addClass("active");
    });

    $('.icon-hor-list').click(function () {
        $(".catalog__content-items").addClass("hor-items");
        $(".icon-ver-list").removeClass("active");
        $(this).addClass("active");
    });

    $('.icon-ver-list').click(function () {
        $(".catalog__content-items").removeClass("hor-items");
        $(".icon-hor-list").removeClass("active");
        $(this).addClass("active");
    });


    $(".favorite-icons").click(function (event) {
        $(this).toggleClass("active");
    });

    /**********************************************************************PROFILE TABBER*/

    $(".ads-tab").click(function (event) {
        var index = $(this).index();
        $(".ads-tab").removeClass("active").eq(index).addClass("active");
        $(".ads-items-block").removeClass("active").eq(index).addClass("active");
    });

    /**********************************************************************PROFILE ADS PANEL & CHECK BUTTONS*/

    $(".ads-panel .select-all").click(function (event) {
        $(this).toggleClass("active");
        if (!$(this).hasClass("active")) {
            $(this).closest(".ads-panel").addClass("not-active");
            $(this).closest(".ads-panel").find(".option").removeClass("active");
            $(this).closest(".ads-items-block").find(".ads-item").addClass("not-active");
            $(this).closest(".ads-items-block").find(".input-field").prop('checked', false);
        } else {
            $(this).closest(".ads-panel").removeClass("not-active");
            $(this).closest(".ads-items-block").find(".ads-item").removeClass("not-active");
            $(this).closest(".ads-items-block").find(".input-field").prop('checked', true);
        }
        activeOption();
    });

    $(".ads-item .input-field").change(function () {
        $(this).closest(".ads-item").toggleClass("not-active");
        if ($(this).closest(".ads-item").hasClass("not-active")) {
            $(this).closest(".ads-items-block").find(".ads-panel").addClass("not-active");
            $(this).closest(".ads-items-block").find(".select-all").removeClass("active");
        }
        $(".ads-items-block").each(function () {
            if ($(this).find(".input-field:checked").length) {
                $(this).find(".ads-panel").removeClass("not-active");
            } else {
                $(this).find(".option").removeClass("active");
            }
        });
        activeOption();
    });

    $(".ads-item .more-item").click(function () {
        $(this).toggleClass("active");
    });

    $(".ads-panel .option, .ads-item .bottom-item").click(function () {
        $(this).toggleClass("active");
        activeOption();
    });

    function activeOption() {
        if ($(".ads-panel .option.active").length || $(".ads-item .bottom-item.active").length) {
            $(".fixed-basket").addClass("active");
        } else {
            $(".fixed-basket").removeClass("active");
        }
    }

    /**********************************************************************ID SCROLL*/

    $(".fixed-menu-item, .bs__list-item, .announcement-link").click(function (event) {
        event.preventDefault();
        var id = $(this).attr('href'), top = $(id).offset().top - 80;
        if (!$(".product-single").length) {
            top = top + 68;
        }
        if (id == "#ps-check-list") {
            top = top + 50;
        }
        $('html, body').animate({scrollTop: top}, 400);
    });

    /**********************************************************************STICKY HEADER*/

    var header = document.getElementById("header");
    var sticky = header.offsetTop + 110;

    function stickyHeader() {
        if (window.pageYOffset >= sticky) {
            $(".fixed-menu").addClass('active');

        } else {
            $(".fixed-menu").removeClass('active');
        }
    }

    stickyHeader();


    /**********************************************************************STICKY ASIDE*/

    if ($('.product-single__details').length) {
        if (width > 991) {
            setTimeout(function () {
                var sticky = $('.product-single__details .inner').offset().top - 25 - 68;
                if (width <= 1024) {
                    sticky = sticky - 50;
                }

                function stickyAside() {
                    var listY = document.getElementById('ps-check-list').getBoundingClientRect().top;
                    if (width <= 1024) {
                        listY = listY - 50;
                    }
                    var elHeight = $(".product-single__details .inner").outerHeight() + 25 + 68;
                    if (window.pageYOffset >= sticky) {
                        $('.product-single__details .inner').addClass("sticky");
                        if (listY <= elHeight) {
                            $('.product-single__details .inner').addClass("sticky-bottom");
                        } else {
                            $('.product-single__details .inner').removeClass("sticky-bottom");
                        }
                    } else {
                        $('.product-single__details .inner').removeClass("sticky");
                    }
                }

                if (width > 991) {
                    stickyAside();
                    window.onscroll = function () {
                        stickyAside();
                        stickyHeader();
                    };
                }
            }, 500);
        }
    }

    /**********************************************************************CANCEL COMPLAIN*/

    $("#complain-text-form .cancel-btn").click(function (event) {
        $("#pop-up__complain-text").removeClass("active");
        $("#pop-up__complain").addClass("active");
    });

    /**********************************************************************SHORT LIST*/

    $(".list-toggle-btn").click(function () {
        $(".list-toggle").toggleClass("full");
        $(this).text($(this).text() == 'посмотреть весь чек-лист' ? 'скрыть чек-лист' : 'посмотреть весь чек-лист');
    });

    /**********************************************************************INPUT NUMBER*/

    if ($(".profile-refill").length) {
        $(".input-number-only").val("1 200").focus();
    }

    $(".profile-refill__input").on('change keyup', '.input-number-only', function () {
        var val = $(this).val();
        val = val.replace(/\s+/g, '');
        if (!/^[1-9][0-9]*$/.test(val)) {
            $(this).addClass("error");
            $(".profile-refill__method").addClass("not-valid-method");
        } else {
            $(this).removeClass("error");
            $(".profile-refill__method").removeClass("not-valid-method");
        }
        val = addCommas(val);
        console.log(val);
        $(this).val(val);
    });

    $(".profile-main").on('click', '.not-valid-method .item', function (event) {
        event.preventDefault();
    });

    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ' ' + '$2');
        }
        return x1 + x2;
    }

    /**********************************************************************CATEGORIES*/

    $(".profile-post-ad__category .radio-input").click(function () {
        $(this).closest(".item").addClass("active");
        if ($(this).closest(".item").is(":last-child")) {
            $(".profile-post-ad__fields").addClass("active");
        } else {
            $(".profile-post-ad__fields").removeClass("active");
        }
    });

    /**********************************************************************FIELD INFO*/

    $(".field-item-clarification").focus(function () {
        $(this).closest(".field-wrapper").addClass("active");
    });

    $(".field-item-clarification").blur(function () {
        $(this).closest(".field-wrapper").removeClass("active");
    });

    /**********************************************************************DATEPICKER*/

    $("#datepicker").datepicker({
        dateFormat: 'dd/mm/yy',
        onSelect: function () {
            $("#datepicker").blur();
        }
    });

    /**********************************************************************ADD FIELDS*/

    var field1Length = $(".field-wrapper-docs").length + 1;
    var field1Select = $(".field-wrapper-docs-main select").html();

    var field2Length = $(".field-wrapper-inoculations").length + 1;
    var field2Select = $(".field-wrapper-inoculations-main select").html();

    var field3Length = $(".field-wrapper-specialization").length + 1;
    var field3Select = $(".field-wrapper-specialization-main select").html();

    var field4Length = $(".field-wrapper-type").length + 1;
    var field4Select = $(".field-wrapper-type-main select").html();

    $(".add-more-field-docs").click(function () {
        var field1 = '<div class="field-wrapper field-wrapper-docs flex-als-pt">\n' +
            '<div class="field-title">Документы-' + field1Length + '</div><label class="label-wrapper"><select name="DOCUMENT' + field1Length + '">' +
            field1Select + '</select></label></div>';

        $(field1).insertBefore($(".field-wrapper-inoculations")[0]);
        field1Length = field1Length + 1;

        setTimeout(function () {
            selectricTrigger();
        }, 0);
    });

    $(".add-more-field-inoculations").click(function () {
        var field2 = '<div class="field-wrapper field-wrapper-inoculations flex-als-pt">\n' +
            '<div class="field-title">Прививки-' + field2Length + '</div><label class="label-wrapper"><select name="INOCULATION' + field2Length + '">' +
            field2Select + '</select></label></div>';

        $(field2).insertBefore($(".field-wrapper-add-more")[0]);
        field2Length = field2Length + 1;

        setTimeout(function () {
            selectricTrigger();
        }, 0);
    });


    $(".add-more-field-specialization").click(function () {
        var field3 = '<div class="field-wrapper field-wrapper-specialization flex-als-pt">\n' +
            '<div class="field-title">Специализация-' + field3Length + '</div><label class="label-wrapper"><select name="SPECIALIZATION' + field3Length + '">' +
            field3Select + '</select></label></div>';

        $(field3).insertBefore($(".field-wrapper-textarea")[0]);
        field3Length = field3Length + 1;

        setTimeout(function () {
            selectricTrigger();
        }, 0);
    });

    $(".add-more-field-type").click(function () {
        var field4 = '<div class="field-wrapper field-wrapper-type flex-als-pt">\n' +
            '<div class="field-title">Тип питомца-' + field4Length + '</div><label class="label-wrapper"><select name="TYPE' + field4Length + '">' +
            field4Select + '</select></label></div>';

        $(field4).insertBefore($(".field-wrapper-specialization-main")[0]);
        field4Length = field4Length + 1;

        setTimeout(function () {
            selectricTrigger();
        }, 0);
    });

    /**********************************************************************PROFILE PHOTO*/

    if ($('.photo-container').length) {
        var photoElem = $('.photo-container:last-child')[0].outerHTML;
    }

    $(document).on('click', '.photo-icon.icon-close-gen', function (e) {
        $(this).closest(".photo-container").remove();
    });

    $(document).on('change', '.input-photo', function (e) {
        readURL(this);
    });

    $(document).on('change', '.input-document', function (e) {
        readURL2(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).closest(".label-wrapper-photo").attr("style", "background-image: url(" + e.target.result + ")");
                $(input).closest(".photo-container").addClass("with-photo");
            };
            reader.readAsDataURL(input.files[0]);
            if (!$(input).hasClass("editable-input")) {
                $(".photos-container").append(photoElem);
            }
        } else {
            $(input).closest(".label-wrapper-photo").removeAttr("style");
            $(input).closest(".photo-container").removeClass("with-photo");
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            $(input).next().text(input.files[0].name);
        } else {
            $(input).next().text("Выбрать фаил");
        }
    }

    /******************************************************************************SHORT*/

    $(".map-open").click(function () {
        if (!$("#map.active").length) {
            $("#map").addClass("active");
        }
        $("#map, .street-item").slideToggle();
        $(this).text($(this).text() == '+ Определить место на карте' ? '- Определить место на карте' : '+ Определить место на карте');
    });

    /******************************************************************************PHONE EDIT*/

    $(".profile-info__phone .phone-img").click(function () {
        var value = $(".profile-info__phone .phone-text").text();
        $(".profile-info__phone .phone-input").val(value);
        $(".profile-info__phone .phone-wrapper").addClass("edit");
    });

    $(".profile-info__phone .icon-check").click(function () {
        var phone = $(".profile-info__phone .phone-input").val();
        if (/^\+\d\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/.test(phone)) {
            $(".profile-info__phone .phone-input").removeClass("error");
            $(".profile-info__phone .phone-wrapper").removeClass("edit");
        } else {
            $(".profile-info__phone .phone-input").addClass("error");
        }
    });

    /**********************************************************************PROFILE NEW PHONE*/

    $(".phone-value select").change(function () {
        if ($(this).val() == 2) {
            $(".new-phone-item").addClass("active");
        } else {
            $(".new-phone-item").removeClass("active");
        }
    });

    /**********************************************************************ORIENTATION*/

    $(window).on("orientationchange", function (event) {
        location.reload();
    });

    /**********************************************************************TEXTAREA*/

    if ($('.message-textarea-field').length) {
        var textarea = document.querySelector('.message-textarea-field');
        textarea.addEventListener('keydown', autosize);

        function autosize() {
            var el = this;
            setTimeout(function () {
                el.style.cssText = 'height:auto; padding:0';
                el.style.cssText = 'height:' + el.scrollHeight + 'px';
            }, 0);
        }
    }

    /**********************************************************************FORM VALIDATION*/

    $('#subscribe-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
        },
        lang: 'ru',
        rules: {
            EMAIL: {
                required: true,
                email: true
            }
        }
    });

    $('#registration-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
            $(".pop-up").removeClass("active");
        },
        lang: 'ru',
        rules: {
            NAME: {
                required: true,
                minlength: 2
            },
            EMAIL: {
                required: true,
                email: true
            },
            PHONE: {
                required: true,
                pattern: /^\+\d\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}/
            },
            PASSWORD: {
                required: true,
                minlength: 6
            },
            PASSWORD_CHECK: {
                required: true,
                equalTo: 'input[name="PASSWORD"]'
            }
        }
    });

    $('#entrance-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
            $(".pop-up").removeClass("active");
        },
        lang: 'ru',
        rules: {
            EMAIL: {
                required: true,
                email: true
            },
            PASSWORD: {
                required: true,
                minlength: 6
            }
        }
    });

    $('#restore-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
            $(".pop-up").removeClass("active");
        },
        lang: 'ru',
        rules: {
            EMAIL: {
                required: true,
                email: true
            }
        }
    });

    $('#comments-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
        },
        lang: 'ru',
        rules: {
            TEXT: {
                required: true,
                minlength: 2
            }
        }
    });

    $("#complain-form .radio-input").change(function () {
        $("#pop-up__complain").removeClass("active");
        $("#pop-up__complain-text").addClass("active");
    });

    $('#complain-text-form').validate({
        submitHandler: function (form) {
            /*form.submit();*/
            $(".pop-up").removeClass("active");
        },
        lang: 'ru',
        rules: {
            TEXT: {
                required: true,
                minlength: 2
            }
        }
    });

    $(".field-title").click(function () {
        $("#datepicker").blur();
        console.log("dfgfd")
    });

    $('#profile-post-ad-form').validate({
        lang: 'ru',
        rules: {
            TITLE: {
                required: true,
                minlength: 2
            },
            DATE: {
                required: true,
                pattern: /^\d{2}\/\d{2}\/\d{4}/
            },
            AMOUNT: {
                number: true
            }
        },
        messages: {
            TITLE: "Введите название объявления",
            DATE: "Введите дату"
        }
    });

    $('#profile-settings').validate({
        lang: 'ru',
        rules: {
            C_PASSWORD: {
                required: true,
                minlength: 6
            },
            N_PASSWORD: {
                required: true,
                minlength: 6
            },
            PASSWORD_CHECK: {
                required: true,
                equalTo: 'input[name="N_PASSWORD"]'
            }
        },
        messages: {
            PASSWORD_CHECK: "Пароли не совпадают"
        }
    });

    $('#arrangement-form').validate({
        lang: 'ru',
        rules: {
            NAME: {
                required: true,
                minlength: 2
            },
            PHONE: {
                required: true,
                pattern: /^\+\d\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}/
            },
            EMAIL: {
                required: true,
                email: true
            },
            TEXT: {
                required: true,
                minlength: 2
            }
        },
        messages: {
            PASSWORD_CHECK: "Пароли не совпадают"
        }
    });

});

