(function ($) {
    "use strict"; // Start of use strict

    //add class for main menu links a
    $('nav ul li a').addClass('page-scroll');

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation - scrollspy
    $('#mainNav').affix({
        offset: {
            top: 20
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();


    //ymaps.ready(init);
    //
    //function init(){
    //
    //    var myMap;
    //
    //    myMap = new ymaps.Map("ojakhuriMap", {
    //        center: [55.7652, 37.63836],
    //        zoom: 17,
    //        controls: []
    //    });
    //
    //    var myPlacemark = new ymaps.Placemark([55.7649, 37.63836] , {},
    //        { iconLayout: 'default#image',
    //            iconImageHref: 'http://blog.karmanov.ws/files/APIYaMaps1/min_marker.png',
    //            iconImageSize: [40, 51],
    //            iconImageOffset: [-20, -47] });
    //
    //    myMap.geoObjects.add(myPlacemark);
    //
    //}



    ymaps.ready(init);

    function init() {

        ////YandexApi ojakhuri map
        var ojakhuriMap = new ymaps.Map("ojakhuriMap", {
                center: [55.88109941, 37.41951084],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            OjakhuryPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.88109941, 37.41951084]

                }
            });

        ojakhuriMap.geoObjects
            .add(OjakhuryPlacemark);

        ////YandexApi khinkali map
        var khinkaliMap = new ymaps.Map("khinkaliMap", {
                center: [55.73798651, 37.56442454],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            khinkaliPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.73798651, 37.56442454]

                }
            });

        khinkaliMap.geoObjects
            .add(khinkaliPlacemark);

        ////YandexApi khinkali map
        var khinkaliMap = new ymaps.Map("ojakhuriMap3", {
                center: [55.73798651, 37.56442454],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            khinkaliPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.73798651, 37.56442454]

                }
            });

        khinkaliMap.geoObjects
            .add(khinkaliPlacemark);

    };


})(jQuery); // End of use strict
