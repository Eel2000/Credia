<?php

	require_once ('Batiment.php');

class Local
{
	private $id;
	private $designation;
	private $batiment;

	/**
	 * LocalModel constructor.
	 * @param $id
	 * @param $designation
	 * @param $batiment
	 */
	public function __construct($id, $designation, BatimentModel $batiment)
	{
		$this->id = $id;
		$this->designation = $designation;
		$this->batiment = $batiment;
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
	 * @return BatimentModel
	 */
	public function getBatiment()
	{
		return $this->batiment;
	}

	/**
	 * @param BatimentModel $batiment
	 */
	public function setBatiment(BatimentModel $batiment)
	{
		$this->batiment = $batiment;
	}




}
