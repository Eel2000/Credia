<?php

	require_once ('Article.php');

    class Stock
    {

    	private $id;
    	private $article;
    	private $quantite;

		/**
		 * StockModel constructor.
		 * @param $id
		 * @param $article
		 * @param $quantite
		 */
		public function __construct($id, ArticleModel $article, $quantite)
		{
			$this->id = $id;
			$this->article = $article;
			$this->quantite = $quantite;
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




	}
