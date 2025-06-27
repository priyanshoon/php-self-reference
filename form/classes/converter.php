<?php

class Converter {}

class CryptoConverter extends Converter
{
    // properties
    // public $currencyCodes;

    // Constructer
    function __construct(public string $currencyCodes)
    {
        $this->currencyCodes = $currencyCodes;
    }


    // methods
    public function convert(float $value) {}
}

$c = new CryptoConverter(currencyCodes: "BTC");
