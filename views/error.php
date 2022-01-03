<?php
require("config/config.php");
$content = "";
if (isset($PROD)) {
    if ($PROD) {
        if (isset($WEB_MASTER)) $content .= "Problème merci de contacter le webmaster".$WEB_MASTER;
    } else {
        if (isset($ERROR_MESS) && isset($code_error)) {
            $content .= $ERROR_MESS[$code_error];
        }
    }
}

require("gabarit.php");