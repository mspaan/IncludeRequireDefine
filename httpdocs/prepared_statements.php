<?php

/*
$zoekwoord = $_POST['zoekwoord'];

// dit is gevaarlijk voor SQL injection, want dit pak je rechtstreeks in de database
$query = "SELECT * FROM thewall WHERE description = 'zoekwoord' ";

// SANITIZEN
// Techniek 1 - procedureel programmren
$clean_zoekwoord = mysqli_real_escape_string($dbc, $zoekwoord);
$query = "SELECT * FROM thewall WHERE description = 'zoekwoord' ";
*/


// Techniek 2 - object georiënteerd (voorkeur, helemaal uitgewerkt
require('../private/connectvars.php');
// object aanmaken
$mysqli = new mysqli(HOST, USER, PASS, DB);
// testen connectie
if ($mysqli->connect_errno) {
    die('Error code: ' . $mysqli->connect_errno);
}
// query schrijven
$query = "INSERT INTO nieuwsbrief VALUES (0, ?, ?, ?, ?)";
// prepare
// stmt = afkorting van statement
$stmt = $mysqli->prepare($query);
// bind
$stmt->bind_param('ssss', $voornaam, $tussenvoegsel, $achternaam, $mailadres);
// invullen
$voornaam ='Ed';
$tussenvoegsel = 'de';
$achternaam = 'Groot';
$mailadres = 'eddegroot@kpn.nl';
// execute
$stmt->execute();