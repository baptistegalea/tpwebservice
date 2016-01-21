<?php 
	Class Devise{
		private $_ID;
		private $_Libelle;
		private $_Taux;

	    function __construct($ID, $Libelle, $Taux) {
	        $this->_ID = $ID;
	        $this->_Libelle = $Libelle;
	        $this->_Taux = $Taux;

	    }
		public function getID(){
			return $this->_ID;
		}

		public function getLibelle(){
			return $this->_Libelle;
		}

		public function getTaux(){
			return $this->_Taux;
		}
	}
?>