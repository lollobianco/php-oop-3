<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/classi/employe.php';



$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'jazz'   => new Generi('jazz','icona-horror'),
  'rock'   => new Generi('rock','icona-rock'),
];
//var_dump( $generi );


$prodotti = [

  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
  new Cd('titolo','autore',29.90,$generi['jazz'],true,'copertina',10 ),
  new Cd('titolo','autore',25.99,$generi['rock'],true,'copertina',20 ),
  new Dvd('titolo','autore',25.99,$generi['giallo'],true,'copertina',120,'MPEG'),
  new Employe('nome','immagine','ruolo',20,'maschio')

];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  //echo get_class($elem);
  echo "<br>";
}
?>
