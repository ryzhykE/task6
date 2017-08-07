<?php

require_once __DIR__ . '/autoload.php';

use lib\Instrument;
use lib\Musician;
use lib\Band;


$baraban = new Instrument('Baraban', 'Frame drums');
$guitar = new Instrument('Guitar','String');
$guitarB = new Instrument('Bas-guitar','Electro');
$piano = new Instrument('Piano','Keys');
$harmonica = new Instrument('Harmonica','Wind');
$flute = new Instrument('Flute','Wind');
$violin = new Instrument('Violin','String');

$freddieM = new Musician('Freddie Mercury','piano');
$brianM = new Musician('Brian May','gitara');
$johnD = new Musician('John Deacon','gitara' );
$corelliA = new Musician('Corelli Arcangelo','violin');
$littleW = new Musician('Little Walter','harmonica');
$carlT = new Musician('Carl Theodor','flute ');

// first band
$freddieM->addInstrument($piano);
$brianM->addInstrument($guitar);
$johnD->addInstrument($guitarB);
$band = new Band('Queen','rock group');
$band->addMusician($freddieM);
$band->addMusician($brianM);
$band->addMusician($johnD);
$bandName = $band->getName();
$genre = $band->getGenre();
$musicians = $band->getMusician();

//second band
$corelliA->addInstrument($violin);
$littleW->addInstrument($harmonica);
$carlT->addInstrument($flute);
$band1 = new Band('Ottava','folk group');
$corelliA->assingToBand($band1);
$littleW->assingToBand($band1);
$carlT->assingToBand($band1);
$bandNameS = $band1->getName();
$genre1S = $band1->getGenre();
$musiciansS = $band1->getMusician();





require_once '/template/index.php';