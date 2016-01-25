<?php

try {
    $server = new SoapServer(null, array(
        'uri' => 'http://localhost/tpwebservice/convertisseur/webservice.php'
    ));

    $server->addFunction('convertisseur');
    $server->handle();
} catch (Exception $e) {
    echo "Exception: " . $e;
}

function convertisseur($data)
{    
    include_once ('bdd.php');
    $devise1 = $data[0];
    $devise2 = $data[1];
    //$bdd = new PDO('mysql:host=localhost;dbname=conversion;charset=utf8', 'root', '');
    
    $reponse = $bdd->query("SELECT Taux FROM monnaie WHERE ID =" . $devise1);
    //return "SELECT Taux FROM monnaie WHERE ID =" . $devise1;
    $donnees = $reponse->fetch();
    $taux1 = $donnees['Taux'];
    $reponse->closeCursor();
    
    $reponse = $bdd->query("SELECT Taux FROM monnaie WHERE ID =" . $devise2);
    $donnees = $reponse->fetch();
    $taux2 = $donnees['Taux'];
    $reponse->closeCursor();
    
    $valueToChange = $data[2];

    
	if ($taux1 == $taux2){
		return round($valueToChange, 2);
	}
	else {
		if ($taux1 == 1) {
			return round($valueToChange * $taux2, 2);
		}
		elseif ($taux2 == 1) {
			return round($valueToChange / $taux1, 2);
		}
		else {
			return round(($valueToChange / $taux1) * $taux2, 2);
		}
	}
}

