$('.advantages-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    accessibility: true,
    arrows: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ]
}

);

$('.partners-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    accessibility: true,
    arrows: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ]
}

);

var mobyMenu = new Moby({
    menu: $('#main-nav'), // The menu that will be cloned
    mobyTrigger: $('#main-menu-button'), // Button that will trigger the Moby menu to open
    template: '<div class="moby-wrap"><div class="moby-close"><span class="moby-close-icon"></span>Закрыть</div><div class="moby-menu"></div></div>'
});

// ymaps.ready(init);
//
// function init() {
//     // Создание экземпляра карты.
//     var myMap = new ymaps.Map('map', {
//         center: [59.939095, 30.315868],
//         zoom: 12
//     }, {
//         searchControlProvider: 'yandex#search'
//     });
//
//     // Загрузка YMapsML-файла.
//     ymaps.geoXml.load('https://saintshamon.github.io/js/data.xml')
//         .then(function (res) {
//             // Добавление геообъектов на карту.
//             myMap.geoObjects.add(res.geoObjects);
//             // Вызывается в случае неудачной загрузки YMapsML-файла.
//         }, function (error) {
//             alert('Ошибка: ' + error);
//         });
// }

ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [59.939095, 30.315868],
        zoom: 9
    }, {
        searchControlProvider: 'yandex#search'
    });

    // Создаем многоугольник, используя вспомогательный класс Polygon.
    var myPolygon = new ymaps.Polygon([
            // Указываем координаты вершин многоугольника.
            [
                [60.051904, 30.092951],
[60.039174, 29.977318],
[60.023385, 29.820482],
[60.010524, 29.716597],
[59.924749, 29.664482],
[59.899765, 29.661367],
[59.883128, 29.689040],
[59.869166, 29.761619],
[59.859149, 29.801767],
[59.828920, 29.822080],
[59.815112, 29.847281],
[59.812263, 29.905699],
[59.822516, 29.976399],
[59.816008, 30.074381],
[59.812659, 30.115867],
[59.799615, 30.156030],
[59.825123, 30.230226],
[59.834333, 30.276978],
[59.819255, 30.305437],
[59.809985, 30.330843],
[59.827540, 30.438505],
[59.847282, 30.460325],
[59.865332, 30.527808],
[59.891554, 30.524470],
[59.946791, 30.541562],
[59.966471, 30.553355],
[59.981894, 30.512894],
[60.013631, 30.470894],
[60.044888, 30.432668],
[60.054838, 30.397611],
[60.091500, 30.368601],
[60.098914, 30.293366],
[60.080237, 30.190952],
[60.058960, 30.144405],
[60.051904, 30.092951]
            ]
        ],
        // Описываем свойства геообъекта.
        {
            // Содержимое балуна.
            balloonContentHeader: "Бесплатная доставка",
            balloonContentBody: "улица Симонова, 7к1",
        },
        {
        // Описываем опции геообъекта.
        // Цвет заливки.
        fillColor: '#fecc50',
        // Цвет обводки.
        strokeColor: '#fecc50',
        // Общая прозрачность (как для заливки, так и для обводки).
        opacity: 0.5,
        // Ширина обводки.
        strokeWidth: 5,
        // Стиль обводки.
        strokeStyle: 'shortdash',
        // Тип заливки фоном.
        fillMethod: 'stretch',
        // Убираем видимость обводки.
        stroke: false
    }
    );

    // Добавляем многоугольник на карту.
    myMap.geoObjects.add(myPolygon);
}
