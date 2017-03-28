$(document).ready(function(){  
    $( ".archivos tr" ).mouseenter(function() {
        $( this ).toggleClass( "selected_file" );
    });
    $( ".archivos tr" ).mouseleave(function() {
        $( this ).toggleClass( "selected_file" );
    });
    $( ".archivos tr" ).click(function() {
        if($( this ).hasClass("selected_file")){            
            $.ajax({
                url : '../allowFile',
                data : {
                    archivo : $(this).attr("archivo")
                },
                type: 'POST',
                dataType : 'json',
                success : function(data){
                    if (data.estatus === "success"){              
                        window.open('/servitel'+data.enlace,"new");
                        $.ajax({
                            url : '../unAllowFile',
                            data : {
                                ruta : data.ruta
                            },
                            type: 'POST',
                            dataType : 'json',
                            success : function(a){
                                if (a.estatus === "success"){                       
                                   // alert("Succes");
                                }else{
                                    alert("Ha ocurrido un error");
                                }
                            }
                        });
                    }else{
                        alert("Ha ocurrido un error");
                    }
                }
            });
        }
    });
  
});