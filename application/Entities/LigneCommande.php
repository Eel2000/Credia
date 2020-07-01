<?php

	require_once ('Commande.php');

    class LigneCommande
    {
    	private $id;
    	private $montant;
    	private $quantite;
    	private $commande;

		/**
		 * LigneCommandeModel constructor.
		 * @param $id
		 * @param $montant
		 * @param $quantite
		 * @param $commande
		 */
		public function __construct($id, $montant, $quantite, CommandeModel $commande)
		{
			$this->id = $id;
			$this->montant = $montant;
			$this->quantite = $quantite;
			$this->commande = $commande;
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
		public function getCommande()
		{
			return $this->commande;
		}

		/**
		 * @param mixed $commande
		 */
		public function setCommande($commande)
		{
			$this->commande = $commande;
		}




	}
