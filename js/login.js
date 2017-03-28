$(document).ready(function(){   
    
    $("#login_button").click(function(e){
        e.preventDefault();
        log_in_ajax();
    });
    
    $('#username,#pass').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            log_in_ajax();  
        }
    }); 
    
    function log_in_ajax(){       
        $.ajax({
            url : 'welcome/login',
            data : {
                email : $('#email').val(),
                pass : $('#password').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.login == "succes"){
                    window.location = 'panel';
                }else{
                    $("#fail_login").html('<p style="color:#FF7070"><b>Correo o contraseña invalida<b></p>');
                }
            },
            error : function(){

            }
        });                      
    };
});