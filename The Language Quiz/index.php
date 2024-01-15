<?php

// Require the correct variable type to be used 
declare(strict_types = 1);

// Show errors 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load classes
require_once 'classes/Data.php';
require_once 'classes/LanguageGame.php';
// require_once 'classes/Player.php'; // Only needed for extra's
require_once 'classes/Word.php';

// Start the game

$playerName = "Funda";
$game = new LanguageGame($playerName);
$game->run();

require 'View.php';