<?php

class MapplicLocation{
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
	
	// x & y relative to x
	public $x = 1;  // required,- x position of the location. See X and Y coordinates for more information.
	public $y = 1;  // required,- y position of the location. See X and Y coordinates for more information.

	function __construct($id, $title, $description="descr", $x=1, $y=1) {
		$this->setId($id)
			->setTitle($title)
			->setDescription($description)
			->setXY($x, $y);
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