<?php

namespace HTL3R\KungFuMovies;

class KungFuMovie extends AbstractKungFuMovie implements IKungFuMovie {

    public function __construct(
        string $name,
        int $rating,
        string $movieURI
    )
    {
        parent::__construct($name, $rating, $movieURI);
    }

    public function getMovieInfoAsJSON() : string {
        return '{ "name": "' . $this->getName() . '", "rating": "' . $this->getRating() . '", "movieURI": "' . $this->getMovieURI() . '" }';
    }

    // Bei mir ging das endroid/qrcode package leider nicht zum runterladen
    public function getMovieQRCodeForBrowser() : string {
        return "ext-gd error";
    }

}