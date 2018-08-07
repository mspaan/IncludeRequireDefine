<?php

// optioneel, plak de code van header.php ertussen
include('header.php');

// verplicht. plak de code van connectvars.php ertussen
require('../private/connectvars.php');

$dbc = mysqli_connect(HOST, USER, PASS, DB) or die ('Error verbinding');
echo "succes";

include('footer.php');

