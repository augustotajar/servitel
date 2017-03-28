$(document).ready(function(){
    function publicar_ajax(){       
        $.ajax({
            url : 'blog/publicar',
            data : {
                titulo : $('#titulo').val(),
                texto : $('#texto').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.publicar == "succes"){
                    window.location = 'blog';
                }else{
                    alert("Ha ocurrido un error");
                }
            },
            error : function(){

            }
        });                      
    };    
    
    $("#publicar").click(function(e){
        e.preventDefault();
        publicar_ajax();
    });
    
});