<?php

namespace Mapplic;

class Levels{
	public $id;  // required,unique ID of the location. This will appear in the deeplinking URL and you can link a location with an SVG element using this field.
	public $title;  // required,- title of the location, displayed in sidebar and popup.
	
	public $map;  // optional,short text displayed in sidebar.

	//list of locations on the level.
	public $locations = [];

	// save loc id 
	protected $locationIds = [];

	function __construct($id, $title) {
		$this->setId($id)
			->setTitle($title);
	}

	/**
	 * append location
	 * todo:
	 * 	- uniq id generation
	 * 
	 */ 
	public function appendLocation($location){
		return $this->appendLocations([$location]);
	}

	/**
	 * append locations
	 * todo:
	 * 	- uniq id generation
	 * 
	 */ 
	public function appendLocations($locations){
		foreach($locations as $l){
			$this->locations[] = $l;
		}
		return $this;
	}

	/**
	 * Get the value of locations
	 */ 
	public function getLocations()
	{
		return $this->locations;
	}

	/**
	 * Set the value of locations
	 *
	 * @return  self
	 */ 
	public function setLocations($locations)
	{
		$this->locations = $locations;

		return $this;
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