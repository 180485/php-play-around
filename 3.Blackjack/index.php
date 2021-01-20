<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);


session_start();

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function whatIsHappening() {

    echo '<h2>$_POST</h2>';
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo '<h2>$_SESSION</h2>';
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
    
}

whatIsHappening();


require_once 'blackjack.php';

if(isset($_POST["Start"])){
    $game = new Game();
    $game->getValue();
    $game->getCompare();
    var_dump($game);

}

if(isset($_POST["Hit"])){
    $game = new Game();
    $game->getCard();
    $game->getValue();
    var_dump($game);

    
    
 }











require_once 'view.php';




// So, you've reached the final stage huh?
// TODO: pat yourself on the back
// Great job! This means you've earned the freedom to build this exercise from scratch.
// One final word of advice: this game is much more complex, so you might want to use multiple classes in here.