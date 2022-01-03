<?php
require("models/avis-lister.php");
$infos = get_avis();

require('views/avis-lister.php');