// El paginador recibe parametros por, convertir esos parametros de php a la variable pagina.
function paginador(actual) {

    if (actual == 'ant') {
        pagina--;
        location.href = 'inmuebles.php?pag='+pagina+'#inm';
    }
    if (actual == 'sig') {
        pagina++;
        location.href = 'inmuebles.php?pag='+pagina+'#inm';
    }
    return pagina;
}

if(pagina == 0 || pagina == null || pagina == undefined || pagina ==""){
    pagina = 1;
}

$.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'+pagina+'/total/12/departamento/0/ciudad/'+ciudad+'/zona/0/barrio/'+barrio+'/tipoInm/'+tipo_inmueble+'/tipOper/'+gestion+'/areamin/0/areamax/0/valmin/'+min+'/valmax/'+max+'/campo/0/order/0/banios/'+banos+'/alcobas/'+alcobas+'/garajes/0/sede/0/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
    xhr.setRequestHeader(
        'Authorization',
        'Basic ' + btoa('Authorization:'+TOKEN));
    },
    'dataType': "json",
    success:function(data)
    {   
        if(data == "Sin resultados"){
            contenedor_inmueble +=
            '<div class="row justify-content-center">'+
            '<div class="col-12">'+
            '<h1 class="text-center">No se encuentran inmuebles con tu busqueda.</h1>'+
            '</div>'+
            '<div class="col-12 col-md-4">'+
            '<a href="#hero" class="btn btn-primary btn-lg btn-block">Volver a Buscar</a>'+
            '</div>'+
            '</div>';
            $("#inm").append(contenedor_inmueble);
            $(".previus").css("display","none");
            $(".next").css("display","none");
        }else{
        var inmuebles = data.Inmuebles;
        var paginas = data.datosGrales;
        console.log(paginas);
        modelo_inmueble(inmuebles);
        validarpagina(pagina, cantidadPaginas(paginas.totalPagina, paginas.totalInmuebles));
        // // paginador
        // var contador = 0;
        
        // while(contador < cantidadPaginas(paginas.totalPagina, paginas.totalInmuebles)){
        //         contador++;
        //         pag += '<li class="page-item">'+
        //         '<a class="page-link" href="inmuebles.php?pag='+contador+'#inm">'+contador+'</a>'+
        //         '</li>';
        // }
        // $('.lista-paginas').append(pag);
        // fin paginador
        $("#inm").append(contenedor_inmueble);
        }
    }     
   });
