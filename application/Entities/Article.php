<?php

	require_once ('Categorie.php');

class Article
{
	private $id;
	private $designation;
	private $emballage;
	private $nombre_pieces;
	private $Categorie;

	/**
	 * ArticleModel constructor.
	 * @param $id
	 * @param $designation
	 * @param $emballage
	 * @param $nombre_pieces
	 * @param $Categorie
	 */
	public function __construct($id, $designation, $emballage, $nombre_pieces, CategorieModel $Categorie)
	{
		$this->id = $id;
		$this->designation = $designation;
		$this->emballage = $emballage;
		$this->nombre_pieces = $nombre_pieces;
		$this->Categorie = $Categorie;
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
	public function getEmballage()
	{
		return $this->emballage;
	}

	/**
	 * @param mixed $emballage
	 */
	public function setEmballage($emballage)
	{
		$this->emballage = $emballage;
	}

	/**
	 * @return mixed
	 */
	public function getNombrePieces()
	{
		return $this->nombre_pieces;
	}

	/**
	 * @param mixed $nombre_pieces
	 */
	public function setNombrePieces($nombre_pieces)
	{
		$this->nombre_pieces = $nombre_pieces;
	}

	/**
	 * @return CategorieModel
	 */
	public function getCategorie()
	{
		return $this->Categorie;
	}

	/**
	 * @param CategorieModel $Categorie
	 */
	public function setCategorie(Cateogorie $Categorie)
	{
		$this->Categorie = $Categorie;
	}


}
