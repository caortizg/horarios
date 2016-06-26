/* global urlBase */

// Obtiene la ul que contiene la colección de etiquetas


// configura una enlace "Agregar una etiqueta"
var $addTagLink = $('<a href="#" class="btn btn-success add_tag_link" title="Agregar">+</a>');
var $newLinkLi = $('<li></li>').append($addTagLink);

function addTagForm(collectionHolder, $newLinkLi) {
    // Obtiene los datos del prototipo explicado anteriormente
    var prototype = collectionHolder.data('prototype');

    // Consigue el nuevo índice
    var index = collectionHolder.data('index');

    // Sustituye el '__name__' en el prototipo HTML para que
    // en su lugar sea un número basado en cuántos elementos hay
    var newForm = prototype.replace(/__name__/g, index);

    // Incrementa en uno el índice para el siguiente elemento
    collectionHolder.data('index', index + 1);

    // Muestra el formulario en la página en un elemento li,
    // antes del enlace 'Agregar una etiqueta'
    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);
    addTagFormDeleteLink($newFormLi);
}
function addTagFormDeleteLink($tagFormLi) {
    var $removeFormA = $('<a href="#" class="btn btn-danger" title="Eliminar">-</a>');
    $tagFormLi.append($removeFormA);

    $removeFormA.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $tagFormLi.remove();
    });
}
function eliminarFranja(franja){
    $('#franja_'+franja.attr('id')).remove();
}

$(document).ready(function () {
    // Añade el ancla "Agregar una etiqueta" y las etiquetas li y ul
    var collectionHolder = $('ul.actividadfranja');
    collectionHolder.append($newLinkLi);
    $("#actividad_franja_vincular_actividadfranja").parent().remove();

    // cuenta las entradas actuales en el formulario (p. ej. 2),
    // la usa como índice al insertar un nuevo elemento (p. ej. 2)
    collectionHolder.data('index', collectionHolder.find(':input').length);

    $addTagLink.on('click', function (e) {
        // evita crear el enlace con una "#" en la URL
        e.preventDefault();

        // añade una nueva etiqueta form (ve el siguiente bloque de código)
        addTagForm(collectionHolder, $newLinkLi);
    });
    $('.eliminarFranja').on('click',function(){
        eliminarFranja($(this));
    });
});