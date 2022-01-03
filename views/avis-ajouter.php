<?php
$content = form(
    label("departement", "Departement").
    br().
    input("departement", attributs:array("id" => "departement")).
    br().
    label("promo", "Promotion de l'étudiant").
    br().
    input("promo", attributs:array("id" => "promo")).
    br().
    label("module", "Module").
    br().
    input("module", attributs:array("id" => "module")).
    br().
    label("etudiant", "Nom complet de l'étudiant").
    br().
    input("etudiant", attributs:array("id" => "etudiant")).
    br().
    label("commentaire", "Commentaire").
    br().
    input("commentaire", attributs:array("id" => "commentaire")).
    br().
    label("note", "Note (Entre 1 et 5)").
    br().
    input("note", type:"number", attributs:array("id" => "note", "max" => "5", "min" => "0")).
    br().
    input("submit", "Enregistrer", "submit")/*,
    "index.php?controller=avis-lister"*/
);

require("gabarit.php");