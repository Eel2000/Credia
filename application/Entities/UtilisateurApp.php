<?php


    class UtilisateurApp
    {

    	private $id;
    	private $nom;
    	private $pseudo;
    	private $password;
    	private $email;
    	private $type;

		/**
		 * UtilisateurAppModel constructor.
		 * @param $id
		 * @param $nom
		 * @param $pseudo
		 * @param $password
		 * @param $email
		 * @param $type
		 */
		public function __construct($id, $nom, $pseudo, $password, $email, $type)
		{
			$this->id = $id;
			$this->nom = $nom;
			$this->pseudo = $pseudo;
			$this->password = $password;
			$this->email = $email;
			$this->type = $type;
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
		public function getNom()
		{
			return $this->nom;
		}

		/**
		 * @param mixed $nom
		 */
		public function setNom($nom)
		{
			$this->nom = $nom;
		}

		/**
		 * @return mixed
		 */
		public function getPseudo()
		{
			return $this->pseudo;
		}

		/**
		 * @param mixed $pseudo
		 */
		public function setPseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}

		/**
		 * @return mixed
		 */
		public function getPassword()
		{
			return $this->password;
		}

		/**
		 * @param mixed $password
		 */
		public function setPassword($password)
		{
			$this->password = $password;
		}

		/**
		 * @return mixed
		 */
		public function getEmail()
		{
			return $this->email;
		}

		/**
		 * @param mixed $email
		 */
		public function setEmail($email)
		{
			$this->email = $email;
		}

		/**
		 * @return mixed
		 */
		public function getType()
		{
			return $this->type;
		}

		/**
		 * @param mixed $type
		 */
		public function setType($type)
		{
			$this->type = $type;
		}




	}
