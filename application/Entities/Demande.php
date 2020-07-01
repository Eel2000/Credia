<?php

	require_once ('Demandeur.php');

    class Demande
    {
		private $id;
		private $numero_demande;
		private $date_demande;
		private $demandeur;

		/**
		 * DemandeModel constructor.
		 * @param $id
		 * @param $numero_demande
		 * @param $date_demande
		 * @param $demandeur
		 */
		public function __construct($id, $numero_demande, $date_demande, DemandeurModel $demandeur)
		{
			$this->id = $id;
			$this->numero_demande = $numero_demande;
			$this->date_demande = $date_demande;
			$this->demandeur = $demandeur;
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
		public function getNumeroDemande()
		{
			return $this->numero_demande;
		}

		/**
		 * @param mixed $numero_demande
		 */
		public function setNumeroDemande($numero_demande)
		{
			$this->numero_demande = $numero_demande;
		}

		/**
		 * @return mixed
		 */
		public function getDateDemande()
		{
			return $this->date_demande;
		}

		/**
		 * @param mixed $date_demande
		 */
		public function setDateDemande($date_demande)
		{
			$this->date_demande = $date_demande;
		}

		/**
		 * @return mixed
		 */
		public function getDemandeur()
		{
			return $this->demandeur;
		}

		/**
		 * @param mixed $demandeur
		 */
		public function setDemandeur($demandeur)
		{
			$this->demandeur = $demandeur;
		}



	}
