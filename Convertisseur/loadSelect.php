<?php
    include('bdd.php');
    include('Devise.php');

    echo '<FORM><SELECT id="devise1" size="1">';  
    $reponse = $bdd->query('SELECT * FROM monnaie');
    while ($donnees = $reponse->fetch())
    {
        $uneDevise = new Devise($donnees['ID'], $donnees['Libelle'], $donnees['Taux']);
        echo '<OPTION Value='.$uneDevise->getTaux().'>'.$uneDevise->getLibelle().'</OPTION>';
    }
    $reponse->closeCursor();
    echo '</SELECT>';

        echo '<SELECT id="devise2" size="1">';  
    $reponse = $bdd->query('SELECT * FROM monnaie');
    while ($donnees = $reponse->fetch())
    {
        $uneDevise = new Devise($donnees['ID'], $donnees['Libelle'], $donnees['Taux']);
        echo '<OPTION Value='.$uneDevise->getTaux().'>'.$uneDevise->getLibelle().'</OPTION>';
    }
    $reponse->closeCursor();
    echo '</SELECT><br />';
?>