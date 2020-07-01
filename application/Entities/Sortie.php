<?php

	require_once ('Article.php');

    class Sortie
    {

    	private $id;
    	private $quantite_sortie;
    	private $date_sortie;
    	private $article;

		/**
		 * SortieModel constructor.
		 * @param $id
		 * @param $quantite_sortie
		 * @param $date_sortie
		 * @param $article
		 */
		public function __construct($id, $quantite_sortie, $date_sortie, ArticleModel $article)
		{
			$this->id = $id;
			$this->quantite_sortie = $quantite_sortie;
			$this->date_sortie = $date_sortie;
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
		public function getQuantiteSortie()
		{
			return $this->quantite_sortie;
		}

		/**
		 * @param mixed $quantite_sortie
		 */
		public function setQuantiteSortie($quantite_sortie)
		{
			$this->quantite_sortie = $quantite_sortie;
		}

		/**
		 * @return mixed
		 */
		public function getDateSortie()
		{
			return $this->date_sortie;
		}

		/**
		 * @param mixed $date_sortie
		 */
		public function setDateSortie($date_sortie)
		{
			$this->date_sortie = $date_sortie;
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
