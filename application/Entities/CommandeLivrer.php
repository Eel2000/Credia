<?php

	require_once ('Commande.php');
	require_once ('Livraison.php');

    class CommandeLivrer
    {

    	private $id;
    	private $commande;
    	private $livraison;
    	private $date;

		/**
		 * CommandeLivrerModel constructor.
		 * @param $id
		 * @param $commande
		 * @param $livraison
		 * @param $date
		 */
		public function __construct($id, CommandeModel $commande, LivraisonModel $livraison, $date)
		{
			$this->id = $id;
			$this->commande = $commande;
			$this->livraison = $livraison;
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
