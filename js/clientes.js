$(document).ready(function(){   
    $("#guardarCliente").click(function(e){
        e.preventDefault();
        $.ajax({
            url : 'guardarCliente',
            data : {
                nombre : $('#nombre').val(),
                rif : $('#rif').val(),
                email : $('#email').val(),
                telefono1 : $('#telefono1').val(),
                telefono2 : $('#telefono2').val(),
                direccion : $('#direccion').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    window.location.href="/servitel/panel/listarClientes";
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    
    $("#actualizarCliente").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../actualizarCliente',
            data : {
                id : $('#id').val(),
                nombre : $('#nombre').val(),
                rif : $('#rif').val(),
                email : $('#email').val(),
                telefono1 : $('#telefono1').val(),
                telefono2 : $('#telefono2').val(),
                direccion : $('#direccion').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../index/'+$('#id').val());
                    // window.location.href="/servitel/cliente/index/"+$('#id').val();
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    $("#submit").click(function(e){
        e.preventDefault();
    });
  
    $("#eliminarCliente").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../eliminarCliente',
            data : {
                id : $('#id').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../../panel/listarClientes');
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
  
});