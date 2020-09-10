let total_imagen_inputs = 1;
let latitud = -25.363;
let longitud = 131.044;
$(document).ready(function () {

    let contenedor = $('#contenedor-imagenes');
    let btn_add_imgen = $('#btn-add-input-imagen');
    let btn_send = $('#btn-send-registro');
    let formulario = $('#censo-form');
    let btn_show_map = $('.btn-show-map');

    formulario.submit(function (eve) {

        eve.preventDefault();
        sendRegistro(this);

    });

    btn_add_imgen.click(function (eve) {

        eve.preventDefault();
        addImageInput(contenedor,total_imagen_inputs);

    });

});

function sendRegistro(formulario) {


    $.ajax({

        type: 'POST',
        url: '../../controladores/censoController.php',
        data: new FormData(formulario),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){

        },
        success: function(msg){

            if (msg = 'ok')
            {

                swal({
                    type: "success",
                    title: "El Registro ha sido guardado correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {

                        window.location = "proyectos";

                    }
                });

            }
            else
            {

                swal({
                    type: "error",
                    title: "Compruebe que el registro este correctamente llenado.",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if (result.value) {

                        window.location = "proyectos";

                    }
                })

            }

        }

    });


}


function addImageInput(contenedor) {


    if (total_imagen_inputs < 5)
    {

        contenedor.append(
            '<div>'+
            '<br>' +
            '<button type="button" class="btn btn-xs btn-danger" id="btn-remove-input-image" onclick="removeImageInput(this)">' +
            '<span class="fa fa-close"></span></button>' +
            '<input type="file" class="nuevaFotoLumi" name="nuevaFotoLumi[]">' +
            '<br>'+
            '</div>'
        );

        total_imagen_inputs++;

    }

}

function removeImageInput(element) {

    $(element).parent().remove();
    total_imagen_inputs--;


}

function showMap(element) {
    latitud = parseFloat($(element).attr('data-lat'));
    longitud = parseFloat($(element).attr('data-lng'));
    console.log(latitud +' '+ longitud);
    initMap();
}

function initMap() {
    let myLatLng = {lat: latitud, lng: longitud};

    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 20,
        center: myLatLng
    });

    let marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}

