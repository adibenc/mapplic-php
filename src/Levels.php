<?php

namespace Mapplic;

class Levels extends Entity{
	
	public $map;  // optional,short text displayed in sidebar.

	//list of locations on the level.
	public $locations = [];

	// save loc id 
	protected $locationIds = [];

	function __construct($id, $title, $map) {
		$this->setMap($map)
			->setId($id)
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
	 * Get the value of map
	 */ 
	public function getMap()
	{
		return $this->map;
	}

	/**
	 * Set the value of map
	 *
	 * @return  self
	 */ 
	public function setMap($map)
	{
		$this->map = $map;

		return $this;
	}
}