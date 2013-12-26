<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$detalleCod = $_GET["det"];

$detalle = array(
    "0" => array(
        "paginas" => "0",
        "editoral" => "ND",
        "lengua" => "ND",
        "isbn" => "ND",
        "resumen" => "ND"
    ),
    
    "10001" => array(
        "paginas" => "640",
        "editoral" => "TEMAS DE HOY",
        "lengua" => "CASTELLANO",
        "isbn" => "9788499981833",
        "resumen" => "La joven modista Sira Quiroga abandona Madrid en los meses previos al alzamiento "
        . "arrastrada por el amor desbocado hacia un hombre a quien apenas conoce. Juntos se "
        . "instalan en Tanger una ciudad mundana exotica y vibrante donde todo lo impensable "
        . "puede hacerse realidad. Incluso la traicion y el abandono.Sola y acuciada po r deudas "
        . "ajenas Sira se traslada a Tetuan la capital del Protectorado espanol en Marruecos. "
        . "Con argucias inconfesables y ayudada por amistades de reputacion dudosa forja una nueva "
        . "identidad y logra poner en marcha un selecto atelier en el que atiende a clientas de origenes "
        . "remotos y presentes insospechados.A partir de entonces con la contienda espanola recien "
        . "terminada y la europea a punto de comenzar el destino de la protagonista queda ligado a un "
        . "punado de personajes historicos entre los que destacan Juan Luis Beigbeder el enigmatico y "
        . "escasamente conocido ministro de AsuntosExteriores del primer franquismo su amante la "
        . "excentrica Rosalinda Fox y el agregado naval Alan Hillgarth jefe de la inteligencia britanica "
        . "en Espana durante la segunda guerra mundial. Entre todos ellos la empujaran hacia un arriesgado "
        . "compromiso en el que las telas las puntadas y los patrones de su oficio se convertiran en la "
        . "fachada visible de algo mucho mas turbio y peligroso. Escrita en una prosa esplendida El tiempo "
        . "entre costuras avanza con ritmo imparable por los mapas la memoria y la nostalgia "
        . "transportandonos hasta los legendarios enclaves coloniales del norte de Africa al Madrid "
        . "proaleman de la inmediata posguerra y a una Lisboa cosmopolita repleta de espias oportunistas y "
        . "refugiados sin rumbo.El tiempo entre costuras es una aventura apasionante en la que los talleres "
        . "de alta costura el glamour de los grandes hoteles las conspiraciones politicas y las oscuras "
        . "misiones de los servicios secretos se funden con la lealtad hacia aquellos a quienes queremos y "
        . "con el poder irrefrenable del amor."
    ),
    "10002" => array(
        "paginas" => "416",
        "editoral" => "PLANETA",
        "lengua" => "CASTELLANO",
        "isbn" => "9788408118282",
        "resumen" => "Pideme lo que quieras, o dejame, de Megan Maxwell, autora de obras como "
        . "Niyomismalose o Te esperare toda mi vida, es el tercer y ultimo volumen de la serie de "
        . "narrativa erotica mas morbosa y adictiva que esta arrasando en nuestro pais: Pideme lo "
        . "que quieras (Pideme lo que quieras y Pideme lo que quieras, ahora y siempre). E sta serie "
        . "ha cosechado muy buenas criticas por sus dos primeros libros y eso ha provocado un aluvion "
        . "de peticiones para la publicacion de esta tercera parte. Pideme lo que quieras, o dejame "
        . "es una intensa y atrevida historia de amor, plagada de morbo y erotismo, en la que los "
        . "protagonistas luchan por preservar su relacion, a pesar de que el precio que tendran que "
        . "pagar por ello puede ser demasiado caro. La aclamada Megan Maxwell concluye de este modo "
        . "una de las sagas eroticas mas populares de nuestro pais"
    )
);

$respuesta = $detalle[$detalleCod]["resumen"];
if (strlen(trim($respuesta)) != "") {
    echo json_encode($detalle[$detalleCod]);
} else {
    echo json_encode($detalle["0"]);
}