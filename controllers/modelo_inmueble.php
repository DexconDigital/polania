<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("108-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 90;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        echo '
             <div class="property-block col-12 col-sm-6 col-lg-4 col-xl-4">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="detalle-inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" alt=""></a>
                                    <div class="sale">' . $api['Gestion'] . '</div>
                                    <div class="price">';
        if ($api['Gestion'] == 'Arriendo/venta') {
            echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
        } else if ($api['Gestion'] == 'Arriendo') {
            echo '$' . $api['Canon'];
        } else {
            echo '$' . $api['Venta'];
        }
        echo ' </div>
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box" style="min-height: 9.3rem;">
                                        <h3><a href="images/no_image.png">' . $api['Tipo_Inmueble'] . '</a></h3>
                                        <div class="location"><span class="icon flaticon-location-pin"></span> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</div>
                                        <div class="text-justify">' . $descripcion . '</div>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <ul class="row justify-content-center">
                                            <li class="col-auto"><span class="icon flaticon-squares"></span>' . $api['AreaConstruida'] . 'm<sup>2</sup></li>
                                            <li class="col-auto"><span class="icon flaticon-bed-1"></span>' . $api['Alcobas'] . '</li>
                                            <li class="col-auto"><span class="icon flaticon-bathtube-with-shower"></span>' . $api['banios'] . '</li>
                                            <li class="col-auto"><span class="icon flaticon-garage"></span>' . $api['garaje'] . '</li>
                                            <li class="col-auto">Codigo: ' . $codigo . '</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

        ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("108-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 90;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '<br>...';
        }
        echo '
    <div class="property-block col-12 col-sm-6 col-lg-4 col-xl-4">
      <div class="inner-box">
        <div class="image">
            <a href="detalle-inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" alt=""></a>
            <div class="sale">' . $api['Gestion'] . ' </div>
            <div class="price">$';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo ' </div>
        </div>
        <div class="lower-content">
            <div class="upper-box" style="min-height: 9.3rem;">
                <h3><a href="images/no_image.png">' . $api['Tipo_Inmueble'] . '</a></h3>
                <div class="location"><span class="icon flaticon-location-pin"></span> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</div>
                <div class="text-justify">' . $descripcion . '</div>
            </div>
            <div class="lower-box clearfix">
                <ul class="row justify-content-center">
                    <li class="col-auto"><span class="icon flaticon-squares"></span>' . $api['AreaConstruida'] . 'm<sup>2</li>
                    <li class="col-auto"><span class="icon flaticon-bed-1"></span>' . $api['Alcobas'] . '</li>
                    <li class="col-auto"><span class="icon flaticon-bathtube-with-shower"></span>' . $api['banios'] . '</li>
                    <li class="col-auto"><span class="icon flaticon-garage"></span>' . $api['garaje'] . '</li>
                    <li class="col-auto">Codigo: ' . $codigo . '</li>
                </ul>
            </div>
        </div>
    </div>
</div>
 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("108-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '


                                <div class="col-12 p-0 d-flex">
                                    
                                        <div class="col-6 mt-5 p-0">
                                            <a href="detalle-inmueble.php?co=' . $codigo . '">
                                            <img src="' . $imagen . '"  style="width: 100%;height: 100%;object-fit: cover;" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 mt-5 ">
                                            <div>
                                                <h3>' . $api['Tipo_Inmueble'] . '</h3>
                                            </div>
                                            <div class="mb-3">
                                                <h4>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</h4>
                                            </div>
                                            <div class="">
                                                <h3>' . $api['Gestion'] . '</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
    ';
    }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
