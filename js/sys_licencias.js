$(document).ready(function () {
    $("#licencias_form").submit(function (a) {
        a.preventDefault();
        $("#guardar_intqui").trigger("click")
    });
    
    if($('#tipo_licencia').val() == 1){
       $('.paga').show();
    }else{
       $('.paga').hide();
       $("#cantidad_total").val(1);
       $("#cantidad_actual").val(1);
    }    
    
    $("#tipo_licencia").change(function(){
        if($('#tipo_licencia').val() == 1){
           $('.paga').show();
           $("#cantidad_total").val(0);
           $("#cantidad_actual").val(0);
        }else{
           $('.paga').hide();
           $("#cantidad_total").val(1);
           $("#cantidad_actual").val(1);
        }      
    });   

    
    $("#licencias_container #guardar_intqui").bind("click", function () {
        !0 == validar() && $.ajax({
            url: "sys_licencias/save",
            data: {
                idusuario: $("#usuario").val(),
                cantidad_total: $("#cantidad_total").val(),
                cantidad_actual: $("#cantidad_actual").val(),
                tipo_licencia : $('#tipo_licencia').val()
            },
            success: function (a) {
                $.jGrowl(a, {
                    header: '<b style="color: red">Mensaje</b>'
                });
                $("#licencias_form").find(":text,textarea").val("");
                actualizarGrid()
            }
        })
    }).button({
        icons: {
            primary: "ui-icon-disk"
        }
    });
    $("#licencias_container #cambios_intqui").bind("click",
        function () {
            !0 == validar() && $.ajax({
                url: "sys_licencias/update",
                data: {
                    idlicencias: $("#idlicencias").val(),
                    cantidad_total: $("#cantidad_total").val(),
                    cantidad_actual: $("#cantidad_actual").val(),
                    tipo_licencia : $('#tipo_licencia').val()
                },
                success: function (a) {
                    $.jGrowl(a, {
                        header: '<b style="color: red">Mensaje</b>'
                    });
                    $("#licencias_form").find('input[type="text"],textarea,#idlicencias').val("");
                    actualizarGrid();
                    $("#cambios_intqui").hide().prev("button").fadeIn("normal")
                }
            })
        }).button({
        icons: {
            primary: "ui-icon-disk"
        }
    });
    $("#licencias_container #limpiar_intqui").bind("click", function () {
        $("#licencias_form").find('input[type="text"],textarea,#idlicencias').val("");
        $("#cambios_intqui").hide().prev("button").fadeIn("normal")
    }).button({
        icons: {
            primary: "ui-icon-trash"
        }
    });
    $("#modificar_intqui").bind("click", function () {
        if (0 < $("#result_licencias table tr.ui-state-hover").length) {
            var a = $.parseJSON("" + $("#result_licencias table tr.ui-state-hover td:last-child").html() + "");
            $.each(a, function (a, b) {
                $("#" + a).val(html_entity_decode(b))
            });
            $("#usuario").trigger("addItem",[{"title": $("#usuarioname").val(), "value": $("#idusuario").val()}]);
            $("#vtab ul li:first-child").trigger("click");
            $("#cambios_intqui").prev("button").hide().next().fadeIn("normal")
        } else tip("#modificar_intqui", "Debe seleccionar un registro")
        if($('#tipo_licencia').val() == 1){
           $('.paga').show();
        }else{
           $('.paga').hide();
           $("#cantidad_total").val(1);
           $("#cantidad_actual").val(1);
        }    
    }).button({
        icons: {
            primary: "ui-icon-pencil"
        }
    });
    $("#eliminiar_intqui").bind("click", function () {
        0 < $("#result_licencias table tr.ui-state-hover").length ? $("#dialog-confirm-licencias").dialog("open") : tip("#eliminiar_intqui", "Debe seleccionar un registro")
    }).button({
        icons: {
            primary: "ui-icon-close"
        }
    });
    $("#licencias_form").validator();
    $("#busqueda_intqui").bind("focus", function () {
        $(this).val("")
    }).qtip({
        content: {
            text: "Puede buscar por: nombre de el Intervencion Quirurgica."
        },
        position: {
            my: "bottom right",
            at: "top left"
        },
        style: {
            classes: "ui-tooltip-green"
        }
    });
    $("#buscar_licencias").bind("click",
        function () {
            "" != $("#busqueda_intqui").val() && $.ajax({
                url: "sys_licencias/grid",
                data: {
                    order: $("#orden_licencias").val(),
                    search: $("#busqueda_intqui").val(),
                    per_page: ""
                },
                success: function (a) {
                    $("#result_licencias").html(a);
                    $("#eliminiar_intqui,#modificar_intqui").fadeOut("normal")
                }
            })
        });
    $("#actualizar_intqui").bind("click", function () {
        actualizarGrid()
    }).button({
        icons: {
            primary: "ui-icon-arrowrefresh-1-s"
        }
    });
    $("#orden_licencias").change(function () {
        "" != $(this).val() && $.ajax({
            url: "sys_licencias/grid",
            data: {
                order: $(this).val(),
                search: "",
                per_page: ""
            },
            success: function (a) {
                $("#result_licencias").html(a);
                $("#eliminiar_intqui,#modificar_intqui").fadeOut("normal")
            }
        })
    });
    $("#result_licencias").delegate("table tr:not(:first-child)", {
        mouseenter: function () {
            $(this).removeClass("td_leave").addClass("td_hover")
        },
        mouseout: function () {
            $(this).removeClass("td_hover").addClass("td_leave")
        },
        click: function () {
            $(this).hasClass("ui-state-hover") ? ($("#eliminiar_intqui,#modificar_intqui").fadeOut("normal"), $(this).removeClass("ui-state-hover"), $("#idlicencias").val(""), $("#licencias_form").find(":text,textarea").val(""),
                $("#cambios_intqui").hide().prev("button").fadeIn("normal")) : ($("#eliminiar_intqui,#modificar_intqui").fadeIn("normal"), $(this).closest("table").find("tr.ui-state-hover").removeClass("ui-state-hover"), $(this).addClass("ui-state-hover"), $("#idlicencias").val($(this).attr("ids")))
        }
    });
    $("#dialog-confirm-licencias").dialog({
        resizable: !1,
        height: 200,
        autoOpen: !1,
        modal: !0,
        buttons: {
            "Borrar Registro": function () {
                $(this).dialog("close");
                $.ajax({
                    url: "sys_licencias/delete",
                    data: {
                        idlicencia: $("#idlicencias").val()
                    },
                    dataType: "json",
                    success: function (a) {
                        1 ==
                            a.sucess && actualizarGrid();
                        $.jGrowl(a.mensaje, {
                            header: '<b style="color: red">Mensaje</b>'
                        })
                    }
                })
            },
            Cancel: function () {
                $(this).dialog("close")
            }
        }
    });
    actualizarGrid = function () {
        $.ajax({
            url: "sys_licencias/grid",
            data: {
                order: "idlicencia asc",
                search: "",
                per_page: ""
            },
            success: function (a) {
                $("#result_licencias").html(a);
                $("#eliminiar_intqui,#modificar_intqui").fadeOut("normal")
            }
        })
    };
    validar = function () {
        return "" == $("#nombre").val() ? (showTip("#nombre", "Este campo es requerido."), $("#nombre").focus(), !1) : !0
    }
    
    $('#usuario').fcbkcomplete({        
        json_url: "sys_licencias/find_usuarios",
        width: 280,
        addontab: true,                   
        maxitems: 1,
        height: 5,
        cache: false
    }); 
});