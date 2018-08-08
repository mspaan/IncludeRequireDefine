<?php

/*
// niet gesaniteerde data
$zoekwoord = $_POST['zoekwoord'];
echo 'U hebt gezocht op het woord: ' . $zoekwoord;
*/

// gesaniteerde data
$zoekwoord = $_POST['zoekwoord'];
$clean_zoekwoord = htmlentities($zoekwoord,ENT_QUOTES, 'utf-8');
echo 'U hebt gezocht op het woord: ' . $clean_zoekwoord;
