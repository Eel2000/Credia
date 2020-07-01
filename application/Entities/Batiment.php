<?php


class Batiment
{
	private $id;
	private $designation;
	private $longitude;
	private $latitude;

	/**
	 * BatimentModel constructor.
	 * @param $id
	 * @param $designation
	 * @param $longitude
	 * @param $latitude
	 */
	public function __construct($id, $designation, $longitude = null , $latitude = null)
	{
		$this->id = $id;
		$this->designation = $designation;
		$this->longitude = $longitude;
		$this->latitude = $latitude;
	}


	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getDesignation()
	{
		return $this->designation;
	}

	/**
	 * @param mixed $designation
	 */
	public function setDesignation($designation)
	{
		$this->designation = $designation;
	}

	/**
	 * @return mixed
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * @param mixed $longitude
	 */
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;
	}

	/**
	 * @return mixed
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * @param mixed $latitude
	 */
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;
	}


}
