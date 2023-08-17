<?php 
	
	class colonid{
		
		public static $filtres = array('id' => FILTER_VALIDATE_INT,'prenom' => FILTER_SANITIZE_STRING,
		'adresse'=> FILTER_SANITIZE_STRING, 'cp'=> FILTER_SANITIZE_STRING, 'ville'=> FILTER_SANITIZE_STRING, 
		'mail'=> FILTER_SANITIZE_STRING, 'numero'=> FILTER_SANITIZE_STRING, 'mdp'=> FILTER_SANITIZE_STRING);
		
		
		protected $prenom;
		protected $adresse;
		protected $cp;
		protected $ville;
		protected $mail;
		protected $numero;
		protected $mdp;
		
		public function __construct($ensemble){
			$ensemble = filter_var_array($ensemble, colonid::$filtres);
			
			$this->id = $ensemble['id'];
			$this->prenom = $ensemble['prenom'];
			$this->adresse = $ensemble['adresse'];
			$this->cp = $ensemble['cp'];
			$this->ville = $ensemble['ville'];
			$this->mail = $ensemble['mail'];
			$this->numero = $ensemble['numero'];
			$this->mdp = $ensemble['mdp'];
			
		}
		
		public function __set($propriete, $valeur){
			switch($propriete){
				case 'id':
				$this -> id = $valeur;
				break;
				case 'prenom':
				$this -> prenom = $valeur;
				break;
				case 'adresse':
				$this -> adresse = $valeur;
				break;
				case 'cp':
				$this -> cp = $valeur;
				break;
				case 'ville':
				$this -> ville = $valeur;
				break;
				case 'mail':
				$this -> mail = $valeur;
				break;
				case 'numero':
				$this -> numero = $valeur;
				break;
				case 'mdp':
				$this -> mdp = $valeur;
				break;
			}
		}
		
		public function __get($propriete){
			$self = get_object_vars($this);
			return $self[$propriete];
		}
		
	}
	
?>