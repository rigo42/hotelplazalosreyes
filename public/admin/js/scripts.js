//localhost
var URL = window.location.origin;

if(URL === "http://localhost"){
    URL += "/hotelplazalosreyes/";
}else{
    URL += "/";
}

$(document).ready(function(){

    //Dinamismo
    $(".estado").click(function(e){
        e.preventDefault();
        $(".estado").removeClass("seleccionado");
        $(".nuevo").removeClass("seleccionado");
        $(this).addClass("seleccionado");

        var id = "#cuerpoPagina";
        var search = $("input[name='search']").val();
        var url = $(id).attr("data-url");
        var estado = $(this).attr("data-estado");
        var datos = {
            search:search,
            url:url,
            estado:estado
        };
        ajaxMostrarBasico(datos,url,id);
    });

    $(".nuevo").click(function(e){
        e.preventDefault();
        $(".nuevo").removeClass("seleccionado");
        $(".estado").removeClass("seleccionado");
        $(this).addClass("seleccionado");

        var id = "#cuerpoPagina";
        var url = $(this).attr("data-nuevo");
        var datos = {
            
        };
        ajaxMostrarBasico(datos,url,id);
    });

    $("input[name='search']").keyup(function(e){
        e.preventDefault();
        if(e.keyCode === 13){
            var id = "#cuerpoPagina";
            var estado = $(".seleccionado").attr("data-estado");
            var search = $(this).val();
            var url = $(id).attr("data-url");
            var datos = {
                search:search,
                url:url,
                estado:estado
            };
            ajaxMostrarBasico(datos,url,id);
        }
    });

});

//SIRVE: Para setearle un titulo a la pagina
//PORQUE: Por que el usaurio identificara en que pagina esta si lee el tittle
function titlePage(id,titulo){
    $(".sidebar-item").removeClass("selected");
    $(id).addClass("selected");
    $("#titulo").html(titulo);
}

function notificacion(tipo,mensaje){
    if(tipo === "success"){
        toastr.success(mensaje);
    }if(tipo === "info"){
        toastr.info(mensaje);
    }if(tipo === "warning"){
        toastr.warning(mensaje);
    }if(tipo === "error"){
        toastr.error(mensaje);
    }
}

function filePreview(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(id).html('');
            $(id+" + img").remove();
            $(id).after('<img style="cursor: pointer;" class="img-fluid" title="Cambiar imagen" src="'+e.target.result+'" />');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function ajaxMostrarBasico(datos,url,id){
    $.ajax({
        type: "GET",
        url: url,
        data: datos,
        cache: false,
        beforeSend: function() {
            $(id).html('<img src="'+URL+'public/admin/img/sistema/espere.gif" alt="reload" width="20" height="20">');
        },
        success: function(data){
            $(id).html(data);
        },error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                notificacion('error','No conectado, verifica la conexión');
            } else if (jqXHR.status == 404) {
                notificacion('error','Error: 404, pagina no encontrada');
                urlError = URL+"error404";
                datos = {
                    page : url
                };
                ajaxMostrarBasico(datos,urlError,id);
            } else if (jqXHR.status == 403) {
                notificacion('error','Error: 403, Esta solicitud, no es permitida.');
            }  else if (jqXHR.status == 500) {
                notificacion('error','Error 500, fallo en el servidor');
            } else if (exception === 'parsererror') {
                notificacion('error','Error en el parceo de datos');
            } else if (exception === 'timeout') {
                notificacion('error','Se agoto la espera de tiempo');
            } else if (exception === 'abort') {
                notificacion('error','Recuperar ajax fallo');
            } else {
               notificacion('error',jqXHR.responseText);
            }
        }
    });
}

function ajaxEjecutarBasico(datos,url,msg,id,gif){
    $.ajax({
        type: "POST",
        url: url,
        data: datos,
        cache: false,
        beforeSend: function() {
            $(id).html('<img src="'+URL+'public/admin/img/sistema/espere.gif" alt="reload" width="20" height="20">');
        },
        success: function(data){
            if(data == "" || data == " "){
                notificacion("success",msg);
            }else{
                notificacion("error",data);
            }
        },error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                notificacion('error','No conectado, verifica la conexión');
            } else if (jqXHR.status == 404) {
                notificacion('error','Error: 404, pagina no encontrada');
                urlError = URL+"error404";
                datos = {
                    page : url
                };
                ajaxMostrarBasico(datos,urlError,id);
            } else if (jqXHR.status == 403) {
                notificacion('error','Error: 403, Esta solicitud, no es permitida.');
            } else if (jqXHR.status == 500) {
                notificacion('error','Error 500, fallo en el servidor');
            } else if (exception === 'parsererror') {
                notificacion('error','Error en el parceo de datos');
            } else if (exception === 'timeout') {
                notificacion('error','Se agoto la espera de tiempo');
            } else if (exception === 'abort') {
                notificacion('error','Recuperar ajax fallo');
            } else {
               notificacion('error',jqXHR.responseText);
            }
        },complete: function() {
            $(id).html(gif);
        }
    });
}

function ajaxEjecutarAvanzado(datos,url,msg,id,gif){
    $.ajax({
        type: "POST",
        url: url,
        data: datos,
        contentType: false,
        processData : false,
        beforeSend: function() {
            $(id).html('<img src="'+URL+'public/admin/img/sistema/espere.gif" alt="reload" width="20" height="20">');
        },
        success: function(data){
            if(data == "" || data == " "){
                notificacion("success",msg);
            }else{
                notificacion("error",data);
            }
        },error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                notificacion('error','No conectado, verifica la conexión');
            } else if (jqXHR.status == 404) {
                notificacion('error','Error: 404, pagina no encontrada');
                urlError = URL+"error404";
                datos = {
                    page : url
                };
                ajaxMostrarBasico(datos,urlError,id);
            } else if (jqXHR.status == 403) {
                notificacion('error','Error: 403, Esta solicitud, no es permitida.');
            } else if (jqXHR.status == 500) {
                notificacion('error','Error 500, fallo en el servidor');
            } else if (exception === 'parsererror') {
                notificacion('error','Error en el parceo de datos');
            } else if (exception === 'timeout') {
                notificacion('error','Se agoto la espera de tiempo');
            } else if (exception === 'abort') {
                notificacion('error','Recuperar ajax fallo');
            } else {
               notificacion('error',jqXHR.responseText);
            }
        },complete: function() {
            $(id).html(gif);
        }
    });
}

function iniciarSesion(datos,url){
    $.ajax({
        type: "POST",
        url: url,
        data: datos,
        cache: false,
        beforeSend: function() {
            $('#mensajeAdminLogin').html('<img src="'+URL+'public/admin/img/sistema/espere.gif" alt="reload" width="20" height="20">');
        },
        success: function(data){
            if(data == 1){
                window.location=URL;
            }else{
                notificacion("error",data);
            }
        },error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                notificacion('error','No conectado, verifica la conexión');
            } else if (jqXHR.status == 404) {
                notificacion('error','Error: 404, pagina no encontrada');
                urlError = URL+"error404";
                datos = {
                    page : url
                };
                ajaxMostrarBasico(datos,urlError,id);
            } else if (jqXHR.status == 403) {
                notificacion('error','Error: 403, Esta solicitud, no es permitida.');
            } else if (jqXHR.status == 500) {
                notificacion('error','Error 500, fallo en el servidor');
            } else if (exception === 'parsererror') {
                notificacion('error','Error en el parceo de datos');
            } else if (exception === 'timeout') {
                notificacion('error','Se agoto la espera de tiempo');
            } else if (exception === 'abort') {
                notificacion('error','Recuperar ajax fallo');
            } else {
               notificacion('error',jqXHR.responseText);
            }
        },complete: function() {
            $('#mensajeAdminLogin').html("");
        }
    });
}

function cerrarSesion(url){
    $.ajax({
        type: "GET",
        url: url,
        data: {},
        cache: false,
        success: function(data){
            window.location=URL+"login";
        }
    });
}