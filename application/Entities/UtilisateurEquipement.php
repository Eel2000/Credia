<?php


    class UtilisateurEquipement
    {
		private $id;
		private $designation;

		/**
		 * UtilisateurEquipementModel constructor.
		 * @param $id
		 * @param $designation
		 */
		public function __construct($id, $designation)
		{
			$this->id = $id;
			$this->designation = $designation;
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
		public function getDesignation()
		{
			return $this->designation;
		}

		/**
		 * @param mixed $designation
		 */
		public function setDesignation($designation)
		{
			$this->designation = $designation;
		}




	}
