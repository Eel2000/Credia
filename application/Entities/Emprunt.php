<?php

	require_once ('Equipement.php');
	require_once ('UtilisateurEquipement.php');

	class Emprunt
    {
		private $id;
		private $equipement;
		private $user_equipement;
		private $date_emprunt;

		/**
		 * EmpruntModel constructor.
		 * @param $id
		 * @param $equipement
		 * @param $user_equipement
		 * @param $date_emprunt
		 */
		public function __construct($id, EquipementModel $equipement, UtilisateurEquipementModel $user_equipement, $date_emprunt)
		{
			$this->id = $id;
			$this->equipement = $equipement;
			$this->user_equipement = $user_equipement;
			$this->date_emprunt = $date_emprunt;
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
		public function getEquipement()
		{
			return $this->equipement;
		}

		/**
		 * @param mixed $equipement
		 */
		public function setEquipement($equipement)
		{
			$this->equipement = $equipement;
		}

		/**
		 * @return mixed
		 */
		public function getUserEquipement()
		{
			return $this->user_equipement;
		}

		/**
		 * @param mixed $user_equipement
		 */
		public function setUserEquipement($user_equipement)
		{
			$this->user_equipement = $user_equipement;
		}

		/**
		 * @return mixed
		 */
		public function getDateEmprunt()
		{
			return $this->date_emprunt;
		}

		/**
		 * @param mixed $date_emprunt
		 */
		public function setDateEmprunt($date_emprunt)
		{
			$this->date_emprunt = $date_emprunt;
		}




	}
