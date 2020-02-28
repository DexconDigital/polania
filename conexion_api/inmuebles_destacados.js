// Requiere archivo token.js
// Requiere archivo validadores.js
// Requiere archivo modelo_inmueble.js

// valor random
var ramdon = Math.floor((Math.random() * 10) + 1);

$.ajax({
      url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/4/limit/0',
       type: 'GET',
       beforeSend: function (xhr) {
       xhr.setRequestHeader(
          'Authorization',
          'Basic ' + btoa('Authorization:'+TOKEN));
       },
       'dataType': "json",
       success:function(destacados){
         var inmuebles = destacados.Inmuebles;

         if(destacados == "Sin resultados"){
               contenedor_inmueble += '<h1 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h1>';
                $("#propiedades_destacadas").append(contenedor_inmueble);
         }else{
            modelo_inmueble_destacados(inmuebles);
            $("#propiedades_destacadas").append(contenedor_inmueble);
         }
       }              
   });