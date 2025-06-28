<?php

class Converter {}

class CryptoConverter extends Converter
{
    // properties
    // public $currencyCodes;

    // Constructer
    function __construct(public string $currencyCodes, public string $country)
    {
        $this->currencyCodes = $currencyCodes;
        $this->country = $country;
    }


    // methods
    public function convert(float $value): float | bool
    {
        $code = $this->currencyCodes;
        $country = $this->country;
        $url = "https://cex.io/api/ticker/$code/$country";
        $json = file_get_contents($url);

        if ($json) {
            $data = json_decode($json);
            $last = $data->last;
            return $value * $last;
        } else {
            return false;
        }
    }
}

$c = new CryptoConverter(currencyCodes: "BTC", country: "INR");
