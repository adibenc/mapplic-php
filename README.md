# mapplic-php

@adib-enc

json generator for mapplic js, a JS visual map library.

## Example
```php
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
// preson($ml);

$ms->appendLocation($ml);
$ms->appendLocation($ml);
$ms->appendLocation($ml);

// preson($ms);
```

json of `$ms` @ `json_encode($ms)`.

```json
{
    "mapwidth": 1600,
    "mapheight": 900,
    "bottomLat": null,
    "leftLng": null,
    "topLat": null,
    "rightLng": null,
    "styles": [],
    "groups": [],
    "levels": [
        {
            "map": "map.svg",
            "locations": [
                {
                    "about": null,
                    "description": "Lot 1 Description",
                    "pin": null,
                    "label": null,
                    "category": null,
                    "link": null,
                    "x": 1,
                    "y": 1,
                    "id": 1,
                    "title": "Lot 1"
                },
                {
                    "about": null,
                    "description": "Lot 1 Description",
                    "pin": null,
                    "label": null,
                    "category": null,
                    "link": null,
                    "x": 1,
                    "y": 1,
                    "id": 1,
                    "title": "Lot 1"
                },
                {
                    "about": null,
                    "description": "Lot 1 Description",
                    "pin": null,
                    "label": null,
                    "category": null,
                    "link": null,
                    "x": 1,
                    "y": 1,
                    "id": 1,
                    "title": "Lot 1"
                },
                {
                    "fill": null,
                    "style": null,
                    "action": null,
                    "tootlip": null,
                    "lightbox": null,
                    "openLink": null,
                    "openLinkNewTab": null,
                    "image": null,
                    "external": null,
                    "reveal": null,
                    "none": null,
                    "disabled": null,
                    "select": null,
                    "thumbnail": null,
                    "hide": null,
                    "x": null,
                    "y": null,
                    "lat": null,
                    "lng": null,
                    "zoom": null,
                    "about": null,
                    "description": "desc full",
                    "pin": null,
                    "label": null,
                    "category": null,
                    "link": null,
                    "id": 1,
                    "title": "Lot 1"
                },
                {
                    "fill": null,
                    "style": null,
                    "action": null,
                    "tootlip": null,
                    "lightbox": null,
                    "openLink": null,
                    "openLinkNewTab": null,
                    "image": null,
                    "external": null,
                    "reveal": null,
                    "none": null,
                    "disabled": null,
                    "select": null,
                    "thumbnail": null,
                    "hide": null,
                    "x": null,
                    "y": null,
                    "lat": null,
                    "lng": null,
                    "zoom": null,
                    "about": null,
                    "description": "desc full",
                    "pin": null,
                    "label": null,
                    "category": null,
                    "link": null,
                    "id": 1,
                    "title": "Lot 1"
                }
            ],
            "id": 0,
            "title": "level1"
        }
    ]
}
```