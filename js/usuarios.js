$(document).ready(function(){   
    $("#guardarUsuario").click(function(e){
        e.preventDefault();
        $.ajax({
            url : 'guardarUsuario',
            data : {
                primer_nombre : $('#primer_nombre').val(),
                segundo_nombre : $('#segundo_nombre').val(),
                primer_apellido : $('#primer_apellido').val(),
                segundo_apellido : $('#segundo_apellido').val(),
                tipo : $('#tipo').val(),
                email : $('#email').val(),
                password : $('#password').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    window.location.href="/servitel/panel/listarUsuarios";
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    
    $("#actualizarUsuario").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../actualizarUsuario',
            data : {
                uid : $('#uid').val(),
                primer_nombre : $('#primer_nombre').val(),
                segundo_nombre : $('#segundo_nombre').val(),
                primer_apellido : $('#primer_apellido').val(),
                segundo_apellido : $('#segundo_apellido').val(),
                email : $('#email').val(),
                tipo : $('#tipo').val(),
                password : $('#password').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../index/'+$('#uid').val());
                    // window.location.href="/servitel/usuario/index/"+$('#uid').val();
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    $("#submit").click(function(e){
        e.preventDefault();
    });
  
    $("#eliminarUsuario").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../eliminarUsuario',
            data : {
                uid : $('#uid').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../../panel/listarUsuarios');
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
  
  $("#cambiarContrasena").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../actualizarContrasena',
            data : {
                uid : $('#uid').val(),
                password : $('#password').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../index/'+$('#uid').val());
                    // window.location.href="/servitel/usuario/index/"+$('#uid').val();
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
  
  
});