<?php

namespace Mapplic;

class Config{
	
	//,location.json',path to data JSON file or inline JSON object (relative to the HTML file). Use inline JSON objects if the application is not running on web server (see canada.html for example).
	public $source = 'location.json';

	//,FALSE,path to data CSV file (relative to the HTML file), activates CSV Support.
	public $csv = FALSE;

	//,420,height of the component in pixels (px). It can also be defined in percent (%) of the browser window or set to auto (fixed height calculated by the plugin). The plugin will always take up the available horizontal space, so the width is equal to the parent's width.
	public $height = 420;

	//,400,minimum height of the container in pixels (px). It can also be defined in percent (%).
	public $minheight = 400;

	//,800,minimum height of the container in pixels (px). It can also be defined in percent (%).
	public $maxheight = 800;

	//,null,custom CSS styles for the map.
	public $customcss = null;

	//,668,the breakpoint for portrait mode (container width in pixels). Setting it false completely disables portrait mode while true forces it on any screen size.
	public $portrait = 668;

	//,null,enables landmark mode: the map will be focused to the location with ID set as value when the page loads.
	public $landmark = null;

	//,FALSE,enable/disable minimap. Paths to minimap image(s) are set in the .json file.
	public $minimap = FALSE;

	//,TRUE,enable/disable sidebar, containing search field and the list of locations.
	public $sidebar = TRUE;

	//,FALSE,enable/disable sidebar toggle.
	public $sidebartoggle = FALSE;

	//,TRUE,enable/disable search field. It only has meaning if the sidebar is enabled.
	public $search = TRUE;

	//,1,minimum length of the keyword to trigger search.
	public $searchlength = 1;

	//,['title', 'about'],array of the searchable location attributes. This option can be used to enable search for additional fields like location 'description'.
	public $searchfields = ['title', 'about'];

	//,FALSE,make the description searchable (overrides the above searchfields).
	public $searchdescription = FALSE;

	//,TRUE,highlight filtered map elements on search.
	public $highlight = TRUE;

	//,TRUE,enable/disable thumbnail placeholder. It only has meaning if the sidebar is enabled.
	public $thumbholder = TRUE;

	//,FALSE,alphabetically order sidebar elements by title.
	public $alphabetic = FALSE;

	//,FALSE,enable/disable lightbox. The lightbox will only work if the magnific-popup js and css files are loaded.
	public $lightbox = FALSE;

	//,TRUE,enable/disable deeplinking feature: each location has it's own URL.
	public $deeplinking = TRUE;

	//,TRUE,enable/disable hover tooltip for locations.
	public $hovertip = TRUE;

	//,FALSE,enable/disable description in hover tooltip.
	public $hovertipdesc = FALSE;

	//,FALSE,show/hide fullscreen button (top left corner of the map).
	public $fullscreen = FALSE;

	//,FALSE,text of the more button.
	public $moretext = FALSE;

	//,FALSE,enable/disable developer mode: displaying coordinates of the cursor.
	public $developer = FALSE;

	//,FALSE,enable/disable smart tooltip (always visible).
	public $smartip = FALSE;

	//,TRUE,enable/disable animations. Turning animations off can boost performance.
	public $animations = TRUE;

	//,null,default fill color of interactive elements and markers. Location and Group color attributes can override this.
	public $fillcolor = null;

	//,null,default style of interactive elements and markers. Location and Group style attributes can override this.
	public $defaultstyle = null;

	//,default',default marker type, locations' pin attribute can override this.
	public $marker = 'default';

	//,tooltip',default action to perform when a location is focused. Location's action attribute can override this. Currently supported action types are tooltip, open-link, open-link-new-tab, lightbox and none.
	public $action = 'tooltip';

	//,TRUE,enable/disable zoom feature.
	public $zoom = TRUE;

	//,TRUE,show/hide clear button (bottom left corner of the map).
	public $clearbutton = TRUE;

	//,TRUE,show/hide zoom (+/-) buttons (bottom left corner of the map).
	public $zoombuttons = TRUE;

	//,FALSE,automatically zoom all the way out when a location popup is closed.
	public $zoomoutclose = FALSE;

	//,TRUE,automatically close the tooltip when the map is zoomed all the way out.
	public $closezoomout = TRUE;

	//,TRUE,enable/disable mousewheel zoom.
	public $mousewheel = TRUE;

	//,FALSE,open links in new tab by default.
	public $linknewtab = FALSE;

	//,200,map margin value in pixels when the map is zoomed in (not applied when zoomed all the way out). Set '0' to disable margin.
	public $zoommargin = 200;

	//,FALSE,map fills the container if true, otherwise the map will fit into the container, as the default behavior.
	public $mapfill = FALSE;

	//,3,float value indicating the maximum zoom level. For example, the maximum zoomed map size will be 1200x800 for a file of 600x400 dimensions and maxscale set to '2'.
	public $maxscale = 3;

	//,null,base color of the UI
	public $basecolor = null;

	//,null,background color of the UI
	public $bgcolor = null;

	//,null,secondary background color of the UI
	public $bgcolor2 = null;

	//,null,color of headings
	public $headingcolor = null;

	//,null,color of regular text
	public $textcolor = null;

	//,null,UI accent color
	public $accentcolor = null;
}