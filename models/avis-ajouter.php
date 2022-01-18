<?php
function add_avis($_departement, $_promo, $_module, $_etudiant, $_commentaire, $_note) {
    $db = $GLOBALS['db'];
    if (isset($_departement) && isset($_promo) && isset($_module) && isset($_etudiant) && isset($_commentaire) && isset($_note)) {
        $sql = "INSERT INTO ratingdb.avis (departement, promo, module, etudiant, commentaire, note) VALUES (:departement, :promo, :module, :etudiant, :commentaire, :note)";
        if (!empty($sql)) {
            $req = $db->prepare($sql);
            $req->bindParam(':departement', $_departement);
            $req->bindParam(':promo', $_promo);
            $req->bindParam(':module', $_module);
            $req->bindParam(':etudiant', $_etudiant);
            $req->bindParam(':commentaire', $_commentaire);
            $req->bindParam(':note', $_note);
            $req->execute();
            if ($req == true) {
                header("Location: ./index.php?controller=avis-lister");
                return 0;
            } else {
                $code_error = 3;
                require("views/error.php");
            }
        }
    }
}