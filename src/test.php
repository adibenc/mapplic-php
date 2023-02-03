<?php

include_once(__DIR__."/autoload.php");

// use Mapplic\Config;

// $mc = new Config();
// preson($mc);

use Mapplic\Struct;
use Mapplic\Location;

$ms = new Struct();

// /*
$id = 1;
$title = "Lot 1";
$description = "Lot 1 Description";
// $x = 1;
// $y = 1;

// , $x, $y
$ml = new Location($id, $title, $description);
preson($ml);

$ms->appendLocations($ml);
$ms->appendLocations($ml);
$ms->appendLocations($ml);

preson($ms);
// */