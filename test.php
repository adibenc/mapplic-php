<?php

include_once(__DIR__."/autoload.php");

// $mc = new MappleConfig();
// preson($mc);

// $ms = new MappleStruct();
// preson($ms);

$id = 1;
$title = "Lot 1";
$description = "Lot 1 Description";
// $x = 1;
// $y = 1;

// , $x, $y
$ml = new MapplicLocation($id, $title, $description);
preson($ml);