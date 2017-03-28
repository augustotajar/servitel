$(document).ready(function(){   
    
    $("#disconnect").click(function(e){
        e.preventDefault();
        $.ajax({
            url : 'welcome/disconect',
            success : function(){
                location.reload();
            },
            error : function(){

            }
        });
    });
});