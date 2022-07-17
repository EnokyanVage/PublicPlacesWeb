ymaps.ready(init);

let data_location = $(".map_item").attr("data-local");

let spl = data_location.split(",")
console.log(spl)
function init() {
    var myMap = new ymaps.Map("map", {
            center: [spl[1], spl[0]],
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        })

    myMap.geoObjects
        .add(new ymaps.Placemark([spl[1], spl[0]], {
            balloonContent: '<strong>серобуромалиновый</strong> цвет'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }))
}


