<?php

include_once(__DIR__."/autoload.php");

// use Mapplic\Config;

// $mc = new Config();
// preson($mc);

use Mapplic\Levels;
use Mapplic\Struct;
use Mapplic\Location;
use Mapplic\LocationFull;

$ms = new Struct();

// /*
$id = 1;
$title = "Lot 1";
$description = "Lot 1 Description";
// $x = 1;
// $y = 1;

// , $x, $y
$level = new Levels(0, "level1", "map.svg");
$ms->appendLevel($level);

// preout($ms);
// exit;

$ml = new Location($id, $title, $description);
$mlfull = new LocationFull($id, $title, $description);

$ms->appendLocation($ml);
$ms->appendLocation($ml);
$ms->appendLocation($ml);

$mlfull->setDescription("desc full");
$ms->appendLocations([$mlfull, $mlfull]);

preson($ms);
// */