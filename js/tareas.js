$(document).ready(function(){   
    $("#guardarTarea").click(function(e){
        e.preventDefault();
        $.ajax({
            url : 'guardarTarea',
            data : {
                titulo : $('#titulo').val(),
                cliente : $('#cliente').val(),
                descripcion : $('#descripcion').val(),
                prioridad : $('#prioridad').val(),
                estatus : $('#estatus').val(),
                progreso : $('#progreso').val(),
                responsable : $('#responsable').val(),
                fecha_inicio : $('#fecha_inicio').val(),
                fecha_fin : $('#fecha_fin').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../panel/listarTareas');
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    
    $("#actualizarTarea").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../actualizarTarea',
            data : {
                id : $('#id').val(),
                titulo : $('#titulo').val(),
                cliente : $('#cliente').val(),
                prioridad : $('#prioridad').val(),
                descripcion : $('#descripcion').val(),
                estatus : $('#estatus').val(),
                progreso : $('#progreso').val(),
                responsable : $('#responsable').val(),
                fecha_inicio : $('#fecha_inicio').val(),
                fecha_fin : $('#fecha_fin').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../index/'+$('#id').val());
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
  
    $("#eliminarTarea").click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../eliminarTarea',
            data : {
                id : $('#id').val()
            },
            type: 'POST',
            dataType : 'json',
            success : function(data){
                if (data.estatus === "success"){
                    location.assign('../../panel');
                }else{
                    alert("Ha ocurrido un error");
                }
            }
        });
    });
    
    $('#cliente').select2({
       placeholder: 'Cliente',
       ajax: {
        url: "/servitel/cliente/buscarClientes",
        dataType: 'json',
        type: 'POST',
        delay: 250,
        data: function (params) {
          return {
            key: params.term // search term
          };
        },
        processResults: function (data, params) {
          return {
            results: data
          };
        },
        cache: true
      },
      minimumInputLength: 2
    });
    
    $('#responsable').select2({
       placeholder: 'Responsable',
       ajax: {
        url: "/servitel/usuario/buscarUsuarios",
        dataType: 'json',
        type: 'POST',
        delay: 250,
        data: function (params) {
          return {
            key: params.term // search term
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used

          return {
            results: data
          };
        },
        cache: true
      },
      minimumInputLength: 2
    });
  
});