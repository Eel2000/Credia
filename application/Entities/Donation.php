<?php

	require_once ('Article.php');

    class Donation
    {

    	private $id;
    	private $designation;
    	private $quantite;
    	private $article;

		/**
		 * DonationModel constructor.
		 * @param $id
		 * @param $designation
		 * @param $quantite
		 * @param $article
		 */
		public function __construct($id, $designation, $quantite, ArticleModel $article)
		{
			$this->id = $id;
			$this->designation = $designation;
			$this->quantite = $quantite;
			$this->article = $article;
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
		public function getQuantite()
		{
			return $this->quantite;
		}

		/**
		 * @param mixed $quantite
		 */
		public function setQuantite($quantite)
		{
			$this->quantite = $quantite;
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


	}
