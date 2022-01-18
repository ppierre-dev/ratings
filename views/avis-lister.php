<?php
$title = "Liste des avis";
if(isset($infos) && !empty($infos)) {

    /* CE CODE FONCTIONNE SAUF QUE LES NOTES EGALES A 0 NE S'AFFICHENT PAS, LES BOUTONS SUPPR NON PLUS*/
    /*$table = row(
        cell("ID").
        cell("DEPARTEMENT").
        cell("PROMOTION").
        cell("MODULE").
        cell("ETUDIANT").
        cell("COMMENTAIRE").
        cell("NOTE").
        cell("DATE")
    );
    for ($i=0; $i < count($infos); $i++) {
        $table .= row("");
        foreach ($infos[$i] as $info) {
            $table .= cell($info);
        }
        $table .= cell(input("delete".$infos[$i]["id"], "Supprimer", "button", array("id" => "delete".$infos[$i]["id"])));
    }
    $content = table($table);*/

    $content = tableau($infos);
}

require("gabarit.php");