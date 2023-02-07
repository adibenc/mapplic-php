<?php

namespace Adibenc\Mapplic;

class LocationFull extends Location{
	public $fill;  // optional,hex color of the interactive element/colorable pin.
	public $style;  // optional,style assinged to the location element.
	public $action;  // optional,the action to perform when the location is focused, possible options:
	public $tootlip;  // optional,default
	public $lightbox;  // optional,open details in lightbox
	public $openLink;  // optional,redirect to 'link'
	public $openLinkNewTab;  // optional,redirect to 'link' in new tab
	public $image;  // optional,show 'image' in lightbox
	public $external;  // optional,show details in external div
	public $reveal;  // optional,zoom and reveal children
	public $none;  // optional,zoom only
	public $disabled;  // optional,no action
	public $select;  // optional,select multiple locations, If not set, the action option's value will be used as default.
	// public $image;  // optional,path to image, relative to the HTML file. Images are displayed in the tooltip or used with 'image' action.
	public $thumbnail;  // optional,path to thumbnail image, or placeholder text max 2-3 characters).
	public $hide;  // optional,set 'true' to exclude the group from sidebar.
	public $x;  // required,- x position of the location. See X and Y coordinates for more information.
	public $y;  // required,- y position of the location. See X and Y coordinates for more information.
	public $lat;  // optional,latitude of the location, if geolocation is supported.
	public $lng;  // optional,longitude of the location, if geolocation is supported.
	public $zoom;  // optional,target zoom level when the location is focused. The default value is 4.
	// public $reveal;  // optional,reveal location when zoom level is reached

	function __construct($id, $title, $description, $x=1, $y=1) {
		$this->setId($id)
			->setTitle($title)
			->setDescription($description);
	}

	/**
	 * Get the value of style
	 */ 
	public function getStyle()
	{
		return $this->style;
	}

	/**
	 * Set the value of style
	 *
	 * @return  self
	 */ 
	public function setStyle($style)
	{
		$this->style = $style;

		return $this;
	}

	/**
	 * Get the value of x
	 */ 
	public function getX()
	{
		return $this->x;
	}

	/**
	 * Set the value of x
	 *
	 * @return  self
	 */ 
	public function setX($x)
	{
		$this->x = $x;

		return $this;
	}

	/**
	 * Get the value of y
	 */ 
	public function getY()
	{
		return $this->y;
	}

	/**
	 * Set the value of y
	 *
	 * @return  self
	 */ 
	public function setY($y)
	{
		$this->y = $y;

		return $this;
	}

	public function setXY($x, $y){
		$this->x = $x;
		$this->y = $y;

		return $this;
	}
}