<?php
if (array_key_exists("module", $_POST)) {
    $module = $_POST["module"];
} else {
    $module = null;
}

if (array_key_exists("etudiant", $_POST)) {
    $etudiant = $_POST["etudiant"];
} else {
    $etudiant = null;
}

if (array_key_exists("commentaire", $_POST)) {
    $commentaire = $_POST["commentaire"];
} else {
    $commentaire = null;
}

if (array_key_exists("note", $_POST)) {
    $note = $_POST["note"];
} else {
    $note = null;
}

$content = form(
    label("departement", "Departement").
    br().
    input("departement", $module,attributs:array("id" => "departement")).
    br().
    label("promo", "Promotion de l'étudiant").
    br().
    input("promo", $module,attributs:array("id" => "promo")).
    br().
    label("module", "Module").
    br().
    input("module", $module,attributs:array("id" => "module")).
    br().
    label("etudiant", "Nom complet de l'étudiant").
    br().
    input("etudiant", $etudiant, attributs:array("id" => "etudiant")).
    br().
    label("commentaire", "Commentaire").
    br().
    input("commentaire", $commentaire, attributs:array("id" => "commentaire")).
    br().
    label("note", "Note (Entre 1 et 5)").
    br().
    input("note", $note, "number", array("id" => "note", "max" => "5", "min" => "0")).
    br().
    input("submit", "Enregistrer", "submit").
    input("reset", "Vider", "reset")
);

require("gabarit.php");