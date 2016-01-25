<?php
    include_once ('bdd.php');
//    include('Devise.php');

    for ($i = 1; $i<=2; $i++){
        echo '<SELECT id="devise'.$i.'" size="1">';
        $reponse = $bdd->query('SELECT * FROM monnaie');
        while ($donnees = $reponse->fetch())
        {
            echo '<OPTION Value='.$donnees['ID'].'>'.$donnees['Libelle'].'</OPTION>';
        }
        $reponse->closeCursor();
        echo '</SELECT>';
    }
    
?>