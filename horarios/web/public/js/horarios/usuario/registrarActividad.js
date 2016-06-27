$(document).ready(function(){
    $('#actividad_usuario_empresa').parent('div').hide();
    $('#actividad_usuario_tipo').on('change',function(){
        var opc=$(this).val();
        if(opc=='2'){
          $('#actividad_usuario_empresa').parent('div').show();
          $('#actividad_usuario_empresa').val('');
        }else{
          $('#actividad_usuario_empresa').parent('div').hide();
        }
    });
});

