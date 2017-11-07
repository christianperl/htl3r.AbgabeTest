<?php

require_once "vendor/autoload.php";

$film = new \HTL3R\KungFuMovies\KungFuMovie("Bruce Lee - Der Mann mit der Todeskralle", 5, "https://www.youtube.com/watch?v=80wXmIcyZwk");

function output($film)
{
    echo "<h1>" . $film->getName() . "</h1>";
    echo "<a href='index.php?format=json'>Filminfo als JSON</a><br>";
    echo "<a href='index.php?format=qrcode'>Filminfo als OR-Code</a>";
}

function outputJSON($film) {
    echo $film->getMovieInfoAsJSON();
}

if (isset($_GET['format'])) {
    if ($_GET['format'] == "json") {
        header("Content-type:application/json");
        echo outputJSON($film);
    }
    if ($_GET['format'] == "qrcode") {
        echo "<h1>ext-gd Error</h1>";
    }
} else {
    echo output($film);
}