<?php


    class Livraison
    {
		private $id;
		private $montant;
		private $date;

		/**
		 * LivraisonModel constructor.
		 * @param $id
		 * @param $montant
		 * @param $date
		 */
		public function __construct($id, $montant, $date)
		{
			$this->id = $id;
			$this->montant = $montant;
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
		public function getMontant()
		{
			return $this->montant;
		}

		/**
		 * @param mixed $montant
		 */
		public function setMontant($montant)
		{
			$this->montant = $montant;
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
