//Requiere archivo de token.js
//Requiere archivo de validadores.js
// Requiere variables de PHP que se traen por medio de URL

// Las relaciones de los id con los atributos deben ser las siguientes para no reemplazar todo el codigo.
// html          javascript
// ubicacion                           data.ciudad || data.barrio || data.zona || data.depto
// gestion                             data.oper
// precio                              data.precio
// areaConstruida                      data.AreaConstruida
// codigo                               data.codigoInmueble
// areaTotal                           data.AreaLote
// alcobas                             data.alcobas
// banos                               data.banos
// tipo_Inmueble                       data.Tipo_Inmueble
// administracion                      data.Administracion
// descripcion                         data.descripcionlarga
// video                               data.video
// lista_caracteristicas_internas      data.caracteristicasInternas
// lista_caracteristicas_externas      data.caracteristicasExternas

// ********* las siguientes variables se usan solo sie xiste formulario y asesor en la pagina
// formulario                 correo_asesor
// agente                     asesor


if (codigoInmueble != null || codigoInmueble != 0) {
   $.ajax({
      url: 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' + codigoInmueble,
      async: true,
      type: 'GET',
      beforeSend: function (xhr) {
         xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
      },
      'dataType': "json",
      success: function (data) {
         if (data.msn == "Inmueble NO Disponible") {
            alert("No se encontro inmueble");
         } else {
            console.log(data);
            //   Valida informacion que se trae del API
            existeElemento(data.Administracion, '#administracion');
            existeElemento(data.EdadInmueble, '#edad_inmueble');
            // Fin de validadores
            // Definir variables
            var carrousel = '', caracteristicasExternas = '', caracteristicasInternas;
            // fin de variables
            if(data.fotos == undefined){
               carrousel +=
                '<div class="carousel-item active">' +
                     '<img src="'+IMG_DEFAULT+'" alt=""/>' +
                '</div>';
            }else{
               carrousel += '<div class="carousel-item active">' +
                  '<img src="' + data.fotos[0].foto + '">' +
               '</div>'
               for (var i = 1; i < Object.keys(data.fotos).length; i++) {
                  carrousel += '<div class="carousel-item">' +
                     '<img  src="' + data.fotos[i].foto + '">' +
                     '</div>';
               }
            }
            
            // Recorrer caracteristicas inmuebles
            if (data.caracteristicasExternas != undefined){
               $("#caracteristicas_externas").css("display", "block");
               for (var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++) {
                  caracteristicasExternas += '<li>' + data
                  .caracteristicasExternas[x].Descripcion + '</li>';
               }
            }
            if (data.caracteristicasInternas != undefined) {
               $("#caracteristicas_internas").css("display", "block");
               for (var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++) {
                     caracteristicasInternas += '<li>' + data.caracteristicasInternas[x].cantidad + data
                        .caracteristicasInternas[x].Descripcion + '</li>';
               }
            }
            $(".carousel-inner").append(carrousel);
            $('#ubicacion').append(data.ciudad + ', ' + data.depto + ', ' + data.barrio);
            $('#gestion').append(data.oper);
            $('#areaConstruida').append(Math.trunc(data.AreaConstruida) + 'mts<sup>2</sup>');
            $('#areaTotal').append(Math.trunc(data.AreaLote) + 'mts<sup>2</sup>');
            $('#alcobas').append(data.alcobas);
            $('#banos').append(data.banos);
            $('#tipo_inmueble').append(data.Tipo_Inmueble);
            $('#administracion').append(data.Administracion);
            $('#descripcion').append(data.descripcionlarga);
            $('#codigo').append(codigoInmueble);
            $('#garaje').append(data.garaje);
            $('#precio').append(data.precio);
            $('#video').append(data.video);
            $('#edad_inmueble').append(data.EdadInmueble +" años");
            $('#lista_caracteristicas_internas').append(caracteristicasInternas);
            $('#lista_caracteristicas_externas').append(caracteristicasExternas);
            
            // datos asesor
            var asesor ="", correo_asesor ="";
            if(data.asesor[0] != undefined){
               asesor += '<h3>'+data.asesor[0].ntercero+'</h3>'+
               '<span class="mt-4 mb-4">Agente inmobiliario</span><br>'+
               '<a href="+57'+data.asesor[0].celular+'" class="mb-4"><i class="fas fa-phone mr-3"></i> '+data.asesor[0].celular+'</a><br>'+
               '<a href="wa.me/57'+data.asesor[0].celular+'" class="mb-4"><i class="fab fa-whatsapp mr-3"></i> '+data.asesor[0].celular+'</a>';
               correo_asesor+='<input type="hidden" id="correo" name="correo" value="'+data.asesor[0].correo+'">';
            }
            $('#agente').append(asesor);
            $('#formulario').append(correo_asesor);
         }
      }
   });
}