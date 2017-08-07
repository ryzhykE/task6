<?php

namespace lib;


class Band implements iBand
{
    protected $nameBand;
    protected $genreBand;
    protected $musicianBand;

    public function __construct($nameBand, $genreBand)
    {
        $this->nameBand = $nameBand;
        $this->genreBand = $genreBand;
    }

    public function getName()
    {
        return $this->nameBand;
        // TODO: Implement getName() method.
    }

    public function getGenre()
    {
        return $this->genreBand;
        // TODO: Implement getGenre() method.
    }

    public function addMusician(iMusician $obj)
    {
        $this->musicianBand[] = $obj;
        // TODO: Implement addMusician() method.
    }

    public function getMusician()
    {
        return $this->musicianBand;
        // TODO: Implement getMusician() method.
    }

}