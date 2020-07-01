<?php

	require_once ('Demande.php');

    class Commande
    {
		private $id;
		private $date_commande;
		private $demande;

		/**
		 * CommandeModel constructor.
		 * @param $id
		 * @param $date_commande
		 * @param $demande
		 */
		public function __construct($id, $date_commande, DemandeModel $demande)
		{
			$this->id = $id;
			$this->date_commande = $date_commande;
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
		public function getDateCommande()
		{
			return $this->date_commande;
		}

		/**
		 * @param mixed $date_commande
		 */
		public function setDateCommande($date_commande)
		{
			$this->date_commande = $date_commande;
		}

		/**
		 * @return DemandeModel
		 */
		public function getDemande()
		{
			return $this->demande;
		}

		/**
		 * @param DemandeModel $demande
		 */
		public function setDemande($demande)
		{
			$this->demande = $demande;
		}




	}
