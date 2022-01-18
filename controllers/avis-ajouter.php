<?php
if(array_key_exists("REQUEST_METHOD", $_SERVER)) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require("check.lib.php");
        if (isset($_POST["departement"]) && isset($_POST["promo"]) && isset($_POST["module"]) && isset($_POST["etudiant"]) && isset($_POST["commentaire"]) && isset($_POST["note"])) {
            if (!empty($_POST["departement"]) && !empty($_POST["promo"]) && !empty($_POST["module"]) && !empty($_POST["etudiant"]) && !empty($_POST["commentaire"]) && !empty($_POST["note"])) {
                //Les vars existent et ne sont pas vides.
                $departement = $_POST["departement"];
                $promo = $_POST["promo"];
                $module = $_POST["module"];
                $etudiant = $_POST["etudiant"];
                $commentaire = $_POST["commentaire"];
                $note = $_POST["note"];

                //Série de tests
                if (is_string($departement) && is_string($promo) && is_string($module) && is_string($etudiant) && is_string($commentaire)) {
                    if (check_integer($note, 0, 5) == 0) {
                        require("models/avis-ajouter.php");
                        add_avis($departement, $promo, $module, $etudiant, $commentaire, $note);
                    } else {
                        $code_error = 7;
                        require("views/error.php");
                    }
                } else {
                    $code_error = 6;
                    require("views/error.php");
                }
            } else {
                require("views/avis-ajouter.php");
            }
        } else {
            $code_error = 4;
            require("views/error.php");
        }
    } else {
        require("views/avis-ajouter.php");
    }
}