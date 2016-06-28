$(document).ready(function(){
    $('#actividad_usuario_empresa').parent('div').hide();
    $('#actividad_usuario_actividadEmpresa').parent('div').hide();
    $('#actividad_usuario_tipo').on('change',function(){
        var opc=$(this).val();
        if(opc=='2'){
          $('#actividad_usuario_empresa').parent('div').show();
          $('#actividad_usuario_empresa').val('');
          $('#actividad_usuario_actividadEmpresa').parent('div').show();
          $('#actividad_usuario_actividadEmpresa').val('');
        }else{
          $('#actividad_usuario_empresa').parent('div').hide();
          $('#actividad_usuario_actividadEmpresa').parent('div').hide();
        }
    });
    
    $('#actividad_usuario_empresa').on('change',function(){
        var empresa_id=$(this).val();
        cargarActividadEmpresa(empresa_id);
    });
});

function cargarActividadEmpresa(empresa_id){
    $.ajax({
    // la URL para la petición
    url : $('#getActividadEmpresaAjax').val(),
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { empresa_id : empresa_id },
 
    // especifica si será una petición POST o GET
    type : 'POST',
 
    // el tipo de información que se espera de respuesta
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        console.log(json);
        var key;
        var select='';
        for(key=0;key < json.length ;key++){
            var id=json[key].id;
            var nombre=json[key].name;
           select += '<option value="'+id+'">'+nombre+'</option>'; 
        }
        var sele_final='<option value="">Seleccione</option>'+select;
        $('#actividad_usuario_actividadEmpresa').html(sele_final);
        $('#actividad_usuario_actividadEmpresa').focus();
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    }
 
});
}

