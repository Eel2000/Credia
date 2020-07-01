<?php

	require_once ('Livraison.php');
	require_once ('Reception.php');

    class ReceptionLivraison
    {
    	private $id;
    	private $livraison;
    	private $reception;
    	private $date;

		/**
		 * ReceptionLivraisonModel constructor.
		 * @param $id
		 * @param $livraison
		 * @param $reception
		 * @param $date
		 */
		public function __construct($id, $livraison, $reception, $date)
		{
			$this->id = $id;
			$this->livraison = $livraison;
			$this->reception = $reception;
			$this->date = $date;
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
		public function getLivraison()
		{
			return $this->livraison;
		}

		/**
		 * @param mixed $livraison
		 */
		public function setLivraison($livraison)
		{
			$this->livraison = $livraison;
		}

		/**
		 * @return mixed
		 */
		public function getReception()
		{
			return $this->reception;
		}

		/**
		 * @param mixed $reception
		 */
		public function setReception($reception)
		{
			$this->reception = $reception;
		}

		/**
		 * @return mixed
		 */
		public function getDate()
		{
			return $this->date;
		}

		/**
		 * @param mixed $date
		 */
		public function setDate($date)
		{
			$this->date = $date;
		}



	}
