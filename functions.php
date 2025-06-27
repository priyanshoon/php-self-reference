<?php

function printHello()
{
    echo "Hello\n";
}

// bool, int, string, float, array, object, callable
function calculateTax(int $price, float $tax = 0.44, string $tax_name = "")
{
    echo "$tax_name\n";
    return $price * $tax;
}

printHello();
echo calculateTax(price: 2000, tax: 0.4, tax_name: "GST");
echo "\n";
echo calculateTax(price: 2000, tax_name: "sales tax");
