<?php

	require_once ('Article.php');
	require_once ('Service.php');
	require_once ('Demande.php');

    class LigneDemande
    {

    	private $id;
    	private $motif;
    	private $quantite;
    	private $article;
    	private $service;
    	private $demande;

		/**
		 * LigneDemandeModel constructor.
		 * @param $id
		 * @param $motif
		 * @param $quantite
		 * @param $article
		 * @param $service
		 * @param $demande
		 */
		public function __construct($id, $motif, $quantite, ArticleModel $article, ServiceModel $service, DemandeModel $demande)
		{
			$this->id = $id;
			$this->motif = $motif;
			$this->quantite = $quantite;
			$this->article = $article;
			$this->service = $service;
			$this->demande = $demande;
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

		/**
		 * @return mixed
		 */
		public function getService()
		{
			return $this->service;
		}

		/**
		 * @param mixed $service
		 */
		public function setService($service)
		{
			$this->service = $service;
		}

		/**
		 * @return mixed
		 */
		public function getDemande()
		{
			return $this->demande;
		}

		/**
		 * @param mixed $demande
		 */
		public function setDemande($demande)
		{
			$this->demande = $demande;
		}



	}
