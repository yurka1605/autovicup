const SELECTORS = {
    ACCORDION: ['question-answer-accordion'],
    CAROUSEL: ['reviews-slider'],
    SELECT: {
        CITY: 'select-city',
    },
};
const FAILED_REQUESTS = {
    cities: null,
}
const cities = [];

$(document).ready(function() {
    initializeOwlCarousels();
    initilizeAccordions();
    initilizeCities();
});

function initializeOwlCarousels() {
    SELECTORS.CAROUSEL.forEach(selector => {
        const newCarousel = $(`.${selector}`).owlCarousel({
            loop: true,
            margin: 10,
            autoplayHoverPause: true,
            autoplayTimeout: 9000,
            nav: false,
            autoplay: true,
            autoHeight: true,
            items: 1
        });

        $(`.${selector}__next-arrow`).click(() => newCarousel.trigger('next.owl.carousel'));
        $(`.${selector}__prev-arrow`).click(() => newCarousel.trigger('prev.owl.carousel'));
    });
}

async function initilizeAccordions() {
    const response = await fetch("../json/question.json");
    const data = await response.json();
    SELECTORS.ACCORDION.forEach(selector => {
        const node = $(`#${selector}`);
        data[selector].forEach(question => {
            node.append(`<h3>${question.head}</h3>`);
            node.append(`<div>${question.text}</div>`);
        });
        node.accordion({
            collapsible: true,
        });
    });
}

async function initilizeCities() {
    try {
        const response = await fetch("../json/city.json");
        cities.push(...(await response.json()));
        FAILED_REQUESTS.cities = false;
    } catch (error) {
        FAILED_REQUESTS.cities = true;
    }
    
    const node = $(`#${SELECTORS.SELECT.CITY}`);
    const cookiesCity = $.cookie('city');
    cities?.forEach(city => {
        node.append(`<option value="${city.code}" ${cookiesCity === city.code ? 'selected' : ''}>${city.name}</option>`);
    });
    node.niceSelect();

    node.on('change', (event) => {
        $.cookie('city', event.target.value);
        changeLocation(event.target.value);
    });

    const geo = navigator.geolocation;
    if(geo) {
        geo.getCurrentPosition(successGeoLocation.bind(this, node));
    }
}

function successGeoLocation(node, {coords}) {
    let currentCity;
    let currentDistanse;
    cities.forEach(city => {
        if ((YMaps.location.region && YMaps.location.region?.toLowerCase() === city.region.toLowerCase()) || !YMaps.location.region) {
            const [lat, lon] = city.geolocation.split(',').map(el => +el);
            const newDistance = calculateTheDistance(lat, lon, YMaps.location.latitude || coords.latitude, YMaps.location.longitude || coords.longitude);
            if (!currentCity || newDistance < currentDistanse) {
                currentCity = city;
                currentDistanse = newDistance;
            }
        }
    });

    if (currentCity) {
        $(`#${SELECTORS.SELECT.CITY} option:selected`)?.prop('selected', false);
        $(`#${SELECTORS.SELECT.CITY} option[value=${currentCity.code}]`).prop('selected', true);
        node.niceSelect('update');
        // changeLocation(currentCity.code);
    }
}

function changeLocation(cityCode) {
    location.href = `${location.protocol}//${cityCode}.${location.host}${location.port}`;
}

function calculateTheDistance(x1, y1, x2, y2) {
    return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
}