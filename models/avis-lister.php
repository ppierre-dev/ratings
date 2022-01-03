<?php
function get_avis(){
    $db = $GLOBALS['db'];
    $sql = "SELECT * FROM ratingdb.avis";
    $req = $db->prepare($sql);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}