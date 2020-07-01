<?php

	require_once ('Article.php');

    class Consommable
    {

    	private $id;
    	private $date_peremption;
    	private $etat;
    	private $article;

		/**
		 * ConsommableModel constructor.
		 * @param $id
		 * @param $date_peremption
		 * @param $etat
		 * @param $article
		 */
		public function __construct($id, $date_peremption, $etat, ArticleModel $article)
		{
			$this->id = $id;
			$this->date_peremption = $date_peremption;
			$this->etat = $etat;
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
		public function getDatePeremption()
		{
			return $this->date_peremption;
		}

		/**
		 * @param mixed $date_peremption
		 */
		public function setDatePeremption($date_peremption)
		{
			$this->date_peremption = $date_peremption;
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
