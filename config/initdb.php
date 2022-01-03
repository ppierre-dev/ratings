<?php
require("config/config-db.php");
if (!empty($DBDRIVER) && !empty($DBNAME) && !empty($DBHOST) && !empty($DBUSER)) {
    try {
        $db = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASSWORD);
        $GLOBALS["db"] = $db;
    } catch (Exception $e) {
        $code_error = 2;
        require('views/error.php');
    }
}
