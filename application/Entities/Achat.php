<?php

	require_once ('Article.php');

    class Achat
    {

    	private $id;
    	private $motif;
    	private $prix;
    	private $quantite_achat;
    	private $date_achat;
    	private $article;

		/**
		 * AchatModel constructor.
		 * @param $id
		 * @param $motif
		 * @param $prix
		 * @param $quantite_achat
		 * @param $date_achat
		 * @param $article
		 */
		public function __construct($id, $motif, $prix, $quantite_achat, $date_achat, ArticleModel $article)
		{
			$this->id = $id;
			$this->motif = $motif;
			$this->prix = $prix;
			$this->quantite_achat = $quantite_achat;
			$this->date_achat = $date_achat;
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
		public function getMotif()
		{
			return $this->motif;
		}

		/**
		 * @param mixed $motif
		 */
		public function setMotif($motif)
		{
			$this->motif = $motif;
		}

		/**
		 * @return mixed
		 */
		public function getPrix()
		{
			return $this->prix;
		}

		/**
		 * @param mixed $prix
		 */
		public function setPrix($prix)
		{
			$this->prix = $prix;
		}

		/**
		 * @return mixed
		 */
		public function getQuantiteAchat()
		{
			return $this->quantite_achat;
		}

		/**
		 * @param mixed $quantite_achat
		 */
		public function setQuantiteAchat($quantite_achat)
		{
			$this->quantite_achat = $quantite_achat;
		}

		/**
		 * @return mixed
		 */
		public function getDateAchat()
		{
			return $this->date_achat;
		}

		/**
		 * @param mixed $date_achat
		 */
		public function setDateAchat($date_achat)
		{
			$this->date_achat = $date_achat;
		}

		/**
		 * @return mixed
		 */
		public function getArticle()
		{
			return $this->article;
		}

		/**
		 * @param mixed $article
		 */
		public function setArticle($article)
		{
			$this->article = $article;
		}



	}
