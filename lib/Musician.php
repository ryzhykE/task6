<?php

namespace lib;


class Musician implements iMusician
{
    public    $nameMus;
    protected $typeMus;
    protected $instrumentMus;

    public function setTypeMus($typeMus)
    {
        $this->typeMus = $typeMus;
    }

    public function __construct($nameMus, $typeMus)
    {
        $this->nameMus = $nameMus;
        $this->typeMus = $typeMus;
    }

    public function addInstrument(iInstrument $obj)
    {
        $this->instrumentMus[] = $obj;
        // TODO: Implement addInstrument() method.
    }

    public function getInstrument()
    {
        return $this->instrumentMus;
        // TODO: Implement getInstrument() method.
    }

    public function assingToBand(iBand $nameBand)
    {
        return $nameBand->addMusician($this);

        // TODO: Implement assingToBand() method.
    }

    public function getMusicianType()
    {
        return $this->typeMus;
        // TODO: Implement getMusicianType() method.
    }

}