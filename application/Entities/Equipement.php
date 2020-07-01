<?php

	require_once ('Article.php');
	require_once ('Sous_Categorie.php');
	require_once ('Local.php');

class Equipement
{

	private $id;
	private $type;
	private $marque;
	private $etat;
	private $article;
	private $sous_categorie;
	private $local;
	private $code_equipement;

	/**
	 * EquipementModel constructor.
	 * @param $id
	 * @param $type
	 * @param $marque
	 * @param $etat
	 * @param $article
	 * @param $sous_categorie
	 * @param $local
	 * @param $code_equipement
	 */
	public function __construct($id, $type, $marque, $etat, ArticleModel $article, Sous_CategorieModel $sous_categorie, LocalModel $local, $code_equipement)
	{
		$this->id = $id;
		$this->type = $type;
		$this->marque = $marque;
		$this->etat = $etat;
		$this->article = $article;
		$this->sous_categorie = $sous_categorie;
		$this->local = $local;
		$this->code_equipement = $code_equipement;
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
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return mixed
	 */
	public function getMarque()
	{
		return $this->marque;
	}

	/**
	 * @param mixed $marque
	 */
	public function setMarque($marque)
	{
		$this->marque = $marque;
	}

	/**
	 * @return mixed
	 */
	public function getEtat()
	{
		return $this->etat;
	}

	/**
	 * @param mixed $etat
	 */
	public function setEtat($etat)
	{
		$this->etat = $etat;
	}

	/**
	 * @return ArticleModel
	 */
	public function getArticle()
	{
		return $this->article;
	}

	/**
	 * @param ArticleModel $article
	 */
	public function setArticle($article)
	{
		$this->article = $article;
	}

	/**
	 * @return Sous_CategorieModel
	 */
	public function getSousCategorie()
	{
		return $this->sous_categorie;
	}

	/**
	 * @param Sous_CategorieModel $sous_categorie
	 */
	public function setSousCategorie($sous_categorie)
	{
		$this->sous_categorie = $sous_categorie;
	}

	/**
	 * @return LocalModel
	 */
	public function getLocal()
	{
		return $this->local;
	}

	/**
	 * @param LocalModel $local
	 */
	public function setLocal($local)
	{
		$this->local = $local;
	}

	/**
	 * @return mixed
	 */
	public function getCodeEquipement()
	{
		return $this->code_equipement;
	}

	/**
	 * @param mixed $code_equipement
	 */
	public function setCodeEquipement($code_equipement)
	{
		$this->code_equipement = $code_equipement;
	}

}
