<?php

class MappleStruct{
	/*
	*/
	//width of the map file(s) in pixels.
	public $mapwidth;
	
	//height of the map file(s) in pixels.
	public $mapheight;
	
	//map file's bottommost latitude
	public $bottomLat;
	
	//map file's leftmost longitude
	public $leftLng;
	
	//map file's topmost latitude
	public $topLat;
	
	//map file's rightmost longitude
	public $rightLng;
	
	//list of reusable styles.
	public $styles = [];
	
	//list of groups
	public $groups = [];
	
	//"levels [] - list of levels (floors). At least one level is required for a working map."
	public $levels = [];
	
	//list of locations on the level.
	public $locations = [];

	/**
	 * Get 	/*
	 */ 
	public function getMapwidth()
	{
		return $this->mapwidth;
	}

	/**
	 * Set 	/*
	 *
	 * @return  self
	 */ 
	public function setMapwidth($mapwidth)
	{
		$this->mapwidth = $mapwidth;

		return $this;
	}

	/**
	 * Get the value of mapheight
	 */ 
	public function getMapheight()
	{
		return $this->mapheight;
	}

	/**
	 * Set the value of mapheight
	 *
	 * @return  self
	 */ 
	public function setMapheight($mapheight)
	{
		$this->mapheight = $mapheight;

		return $this;
	}

	/**
	 * Get the value of bottomLat
	 */ 
	public function getBottomLat()
	{
		return $this->bottomLat;
	}

	/**
	 * Set the value of bottomLat
	 *
	 * @return  self
	 */ 
	public function setBottomLat($bottomLat)
	{
		$this->bottomLat = $bottomLat;

		return $this;
	}

	/**
	 * Get the value of leftLng
	 */ 
	public function getLeftLng()
	{
		return $this->leftLng;
	}

	/**
	 * Set the value of leftLng
	 *
	 * @return  self
	 */ 
	public function setLeftLng($leftLng)
	{
		$this->leftLng = $leftLng;

		return $this;
	}

	/**
	 * Get the value of topLat
	 */ 
	public function getTopLat()
	{
		return $this->topLat;
	}

	/**
	 * Set the value of topLat
	 *
	 * @return  self
	 */ 
	public function setTopLat($topLat)
	{
		$this->topLat = $topLat;

		return $this;
	}

	/**
	 * Get the value of rightLng
	 */ 
	public function getRightLng()
	{
		return $this->rightLng;
	}

	/**
	 * Set the value of rightLng
	 *
	 * @return  self
	 */ 
	public function setRightLng($rightLng)
	{
		$this->rightLng = $rightLng;

		return $this;
	}

	/**
	 * Get the value of styles
	 */ 
	public function getStyles()
	{
		return $this->styles;
	}

	/**
	 * Set the value of styles
	 *
	 * @return  self
	 */ 
	public function setStyles($styles)
	{
		$this->styles = $styles;

		return $this;
	}

	/**
	 * Get the value of groups
	 */ 
	public function getGroups()
	{
		return $this->groups;
	}

	/**
	 * Set the value of groups
	 *
	 * @return  self
	 */ 
	public function setGroups($groups)
	{
		$this->groups = $groups;

		return $this;
	}

	/**
	 * Get the value of levels
	 */ 
	public function getLevels()
	{
		return $this->levels;
	}

	/**
	 * Set the value of levels
	 *
	 * @return  self
	 */ 
	public function setLevels($levels)
	{
		$this->levels = $levels;

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
}