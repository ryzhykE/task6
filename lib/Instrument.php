<?php

namespace lib;


class Instrument implements iInstrument
{
    protected $nameInstrument;
    protected $categoryInstrument;

    public function __construct($nameInstrument, $categoryInstrument)
    {
       $this->nameInstrument = $nameInstrument;
       $this->categoryInstrument = $categoryInstrument;
    }


    public function getName()
    {
        return $this->nameInstrument;
        // TODO: Implement getName() method.
    }

    public function getCategory()
    {
        return $this->categoryInstrument;
        // TODO: Implement getCategory() method.
    }
}