<?php


    class Service
    {
		private $id;
		private $designation;
		private $cout;

		/**
		 * ServiceModel constructor.
		 * @param $id
		 * @param $designation
		 * @param $cout
		 */
		public function __construct($id, $designation, $cout)
		{
			$this->id = $id;
			$this->designation = $designation;
			$this->cout = $cout;
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

		/**
		 * @return mixed
		 */
		public function getCout()
		{
			return $this->cout;
		}

		/**
		 * @param mixed $cout
		 */
		public function setCout($cout)
		{
			$this->cout = $cout;
		}




	}
