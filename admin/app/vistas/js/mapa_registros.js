let markers = [];
let map;
let coordenadas;
let registros_datos;
$(document).ready(function () {

    actualizarMapa();

});

function actualizarMapa() {

    coordenadas = getActiveCheckbox();
    registros_datos = getRegistrosDatos();
    console.log(registros_datos);
    initMap();
    addMarks();
    //drop();

}

function getActiveCheckbox() {

    coordenadas = [];
    $('input[type="checkbox"]').each(function () {

        if ($(this).prop('checked')) {
            coordenadas.push(
                {lat: parseFloat($(this).attr('data-lat')), lng: parseFloat($(this).attr('data-lng'))}
            );
        }
    });

    return coordenadas;

}

function getRegistrosDatos() {

    registros_datos = [];
    $('input[type="checkbox"]').each(function () {

        if ($(this).prop('checked')) {

            registros_datos.push(
                {name: $(this).attr('data-name'), img: $(this).attr('data-image')}
            )
        }
    });

    return registros_datos;
}

function checkAll(proyecto) {

    console.log(proyecto);
    $('input[name="'+proyecto+'"]').prop('checked',true);

}

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 19.4978, lng: -99.1269}
    });
}

function addMarks() {

    clearMarkers();

    for (let i = 0; i < coordenadas.length; i++)
    {

        let contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">'+registros_datos[i]["name"]+'</h1>' +
            '<div id="bodyContent">' +
            '<p>' +
            '<img src="'+registros_datos[i]["img"]+'" style="height: 200px; width: 200px" alt="'+'">' +
            '</p>' +
            '</div>' +
            '</div>';

        let infoWindow = new google.maps.InfoWindow({
            content: contentString
        });

        let marker = new google.maps.Marker({
            position: coordenadas[i],
            map: map,
            title: '(Ayers Rock)'
        });
        marker.addListener('click', function () {
            infoWindow.open(map, marker);
        });

    }
}

function clearMarkers() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
}
