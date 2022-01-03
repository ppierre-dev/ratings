<?php
$title = "Liste des avis";
if(isset($infos) && !empty($infos)) {
    $content = tableau($infos);
}

require("gabarit.php");