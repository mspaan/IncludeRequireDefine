<?php

// optioneel, plak de code van header.php ertussen
include('header.php');

// verplicht. plak de code van connectvars.php ertussen
require('../private/connectvars.php');


/* $dbc = mysqli_connect(HOST, USER, PASS, DB) or die ('Error verbinding');
echo "succes";
*/

// andere methode (objectgeorienteerd) connectie maken, new mysqli is het object
$mysqli = new mysqli(HOST, USER, PASS, DB);

if ($mysqli->connect_errno) {
    die('Error code: ' . $mysqli->connect_errno);
}

$query = "INSERT INTO nieuwsbrief VALUES (0, 'Joey', 'de', 'Haas', 'mail@mailen.com')";
$result = $mysqli->query ($query);


include('footer.php');



