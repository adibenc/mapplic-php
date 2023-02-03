<?php

class MapplicLocationFull{
	// public $id = 1;
	// public $title = 1;
	// public $description = 1;
	// public $pin = null;
	// public $style = "defaultstyle";
	// public $x = 1;
	// public $y = 1;

	public $id;  // required,unique ID of the location. This will appear in the deeplinking URL and you can link a location with an SVG element using this field.
	public $title;  // required,- title of the location, displayed in sidebar and popup.
	
	public $about;  // optional,short text displayed in sidebar.
	public $description;  // optional,description displayed in the popup, html content supported. Other location attributes can be nested into the description using the {{attribute}} structure.
	public $pin;  // optional,type of the pin. This string will be applied as CSS class, so you can add your own styles. For the full list of built-in marker types, please visit the australia.html test page.
	public $label;  // optional,this attribute can be used for adding text or image to a marker that supports labels.
	public $category;  // optional,ID of the category the location belongs to. There must be a category with this ID.
	public $link;  // optional,an internal or external link assigned to the location. The action attribute specifies how this will be used. A "More" button appears in the tooltip by default.
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

	function __construct($id, $title, $description, $x, $y) {
		$this->setId($id)
			->setTitle($title)
			->setDescription($description);
	}

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of title
	 */ 
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Set the value of title
	 *
	 * @return  self
	 */ 
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Get the value of description
	 */ 
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set the value of description
	 *
	 * @return  self
	 */ 
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get the value of pin
	 */ 
	public function getPin()
	{
		return $this->pin;
	}

	/**
	 * Set the value of pin
	 *
	 * @return  self
	 */ 
	public function setPin($pin)
	{
		$this->pin = $pin;

		return $this;
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