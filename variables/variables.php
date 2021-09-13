<?php

$nombre_inmobiliaria = "Polania Inmobiliaria";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/logo.png",
		"alt" => "Logo Inmobiliaria Polania"
	],
];

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
// $redes_sociales = [
	// "facebook" => [
		// "link" => "https://www.facebook.com/andinainmobiliariamed/",
		// "icono" => "fab fa-facebook-f",
		// "imagen" => "images/facebook.png"
	// ],
	// "twitter" => [
		// "link" => "https://twitter.com/inmobiliariagya",
		// "icono" => "fab fa-twitter",
		// "imagen" => "images/twitter.png"
	// ],
	// "instagram" => [
		// "link" => "https://www.instagram.com/andinainmobiliaria/",
		// "icono" => "fab fa-instagram",
		// "imagen" => "images/instagram.png"
	// ],
// ];

//datos de contacto 
$datos_contacto = [
		"direccion" => [
			"direccion" => "Calle 73 No. 9 – 42 Oficina 406 – Bogotá D.C.",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "6017023437",
			"imprimir" => "(601) 702 3437 ",
			"icono" => "fas fa-phone-alt",
		],
		"celular" => [
			"link"=> "+573213879190",
			"imprimir" => " 321 387 9190",
			"icono" => "fas fa-mobile-alt",
		],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573213879190&text=&source=&data=",
			"imprimir" => "321 387 9190",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => [
			"correo" => "info@polania.co",
			"icono" => "far fa-envelope",
		],
		"horario" => [
			"horario" => "Lunes a viernes de 8:00 am a 1:00 pm y de 2:00 pm a 5:00 pm - Sábado 9:00 am a 12:00 m",
			"icono" => "fas fa-calendar-alt",
		],
];

//logos aliados
$logos_aliados = [
	0 => "images/protecta.png",
	1 => "images/simi.png",
	2 => "images/metrocuadrado.png",
	3 => "images/inmove.png",
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",//en negrita
		"parrafos" => [
			0 => "Somos una agencia inmobiliaria familiar con tradición de dos generaciones establecida en Bogotá y con más de 40 años de experiencia en el sector, especializada en la administración de inmuebles en arrendamiento, compraventa y arrendamiento sin mandato (corretaje). El trato cercano, honesto y ético durante todo el proceso es nuestra mayor identidad.",
			1 => "Nuestras alianzas estratégicas con otras inmobiliarias y la implementación de tecnologías nos permiten seguir prestando un servicio íntegro, eficiente y responsable que fortalece día a día la unión y fidelidad con nuestros clientes.",
		],
	],

	"mision" => [
		"titulo" => "Misión",//en negrita
		"parrafo" => "Ofrecer soluciones integrales y efectivas para satisfacer las necesidades inmobiliarias de nuestros clientes que protegen el patrimonio de nuestros propietarios y los derechos de nuestros arrendatarios.",
	],
	"vision" => [
		"titulo" => "Visión",//en negrita
		"parrafo" => "En el año 2025 seremos reconocidos por nuestros grupos de interés como una de las más efectivas, comprometidas y confiables firmas inmobiliarias en La ciudad de Bogotá y otras ciudades de Colombia.",
	],
	"valores" => [
             0 => "<strong>1. Orientación al cliente:</strong> Nos enfocamos en la satisfacción oportuna de las necesidades y expectativas de nuestros clientes, comprendiendo que más propietarios y arrendatarios son personas y familias que buscan mejorar y proteger su calidad de vida y proteger su patrimonio.",
             1 => "<strong>2. Innovación:</strong> Tenemos en cuenta las necesidades de nuestros grupos de interés y nos apoyamos en la tecnología y la innovación para contribuir soluciones a los desafíos de la vida actual y el mercado inmobiliario.",
             2 => "<strong>3. Transparencia:</strong> Estamos comprometidos con la transparencia y el respeto por los derechos de todos nuestros grupos de interés.",
             3 => "<strong>4. Trabajo en equipo:</strong> Nuestros clientes son el centro y razón de ser de nuestra empresa. Trabajamos como un solo equipo para conectarnos con nuestros clientes y sus objetivos.",
	],
];


// imaganes varias
$imagenes = [
	"quienes_somos" => [
		'imagen' => 'images/banner_quienes_somos.jpg',
		'alt' => 'Imagen'
	],
	"inmuebles" => [
		'imagen' => 'images/banner_inmuebles.jpg',
		'alt' => 'Imagen'
	],
	"detalle" => [
		'imagen' => 'images/banner_detalle_inmueble.jpg',
		'alt' => 'Imagen'
	],
	"blog" => [
		'imagen' => 'images/banner_blog.jpg',
		'alt' => 'Imagen'
	],
	"contacto" => [
		'imagen' => 'images/banner_contacto.jpg',
		'alt' => 'Imagen'
	],
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"asesoria" => "fas fa-gavel",
];
	
//textos servicios
$texto_servicios = [
	"arriendos" => [
		"titulo" => "Arriendos",
			"parrafos" => [
				0 => "Administración de bienes inmuebles en calidad de mandatarios.",
				1 => "Permanente promoción de los inmuebles en medios digitales.",
				2 => "Elaboración de contratos, recaudos y pagos.",
				3 => "Elaboración detallada del inventario para la entrega del inmueble.",
				4 => "Búsqueda especializada a requerimientos en vivienda, locales y oficinas.",
				5 => "Servicio en línea para la gestión y consulta de sus inmuebles desde la comodidad de su hogar.",
			],
	],
	
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafos" => [
			0 => "Asesoría para la fijación del precio en el mercado local de referencia.",
			1 => "Permanente promoción y comercialización de los inmuebles en medios digitales.",
			2 => "Asesoría en trámites legales, promesa de compraventa, escrituración, registro y demás trámites inmobiliarios.",
			3 => "Acompañamiento en el proceso de compraventa hasta la finalización del negocio.",
		],	
	],
	"asesorias" =>[
		"titulo" => "Asesorías Jurídicas",
		"parrafos" => [
			0 => "En contratos de arrendamiento, procesos Ejecutivos y de Restitución.",
			1 => "Conciliaciones extrajudiciales en asuntos civiles y de familia.",
			2 => "Sucesiones.",
		],
	],
];
?>