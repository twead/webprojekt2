<?php

/*Navigáció,tartalom*/
$ablakcim = array(
    'cim' => 'Magyar gyermekmentő alapítvány',
);

$fejlec = array(
    'kepforras' => 'fejlec.png',
    'kepalt' => 'fejléc',
);

$lablec = array(
    'ceglogo' => 'agrowatt.jpg'
);

$oldalak = array(
	'/' => array('fajl' => 'tevekenysegunk', 'szoveg' => 'FŐOLDAL', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'GALÉRIA', 'menun' => array(1,1)),
	'tamogatas' => array('fajl' => 'tamogatas', 'szoveg' => 'TÁMOGATÁS', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'KAPCSOLAT', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'BELÉPÉS', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'KILÉPÉS', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'kapcsolatfeldolgoz' => array('fajl' => 'kapcsolatfeldolgoz', 'szoveg' => '', 'menun' => array(0,0)),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');



/*Galéria*/
$MAPPA = './pictures/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;
?>