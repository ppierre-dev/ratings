<?php
$title = "Home Page";
$content = tag("h1", "Accueil");
$content .= p("Ceci est ma page d'accueil.");
$content .= input("showAvis", "Voir-avis", "button", array("style" => "width:15vw;", "id" => "showAvis"));
$content .= input("newAvis", "Nouvel-avis", "button", array("style" => "width:15vw;", "id" => "newAvis"));
require("gabarit.php");