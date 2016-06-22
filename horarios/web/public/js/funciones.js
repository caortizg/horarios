function ajax(loadurl,container){
    $.ajax({
        type: 'POST',
        url: loadurl,
        success: function(data) {   
            $(container).html(data);
        },
    });  
}