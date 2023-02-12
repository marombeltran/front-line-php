<?php
// You can use an underscore to format numeric values. Which is completely ignore when the code
// is parsed but makes long numbers easier to read.

// This can be specially useful in tests.
// We're testing an invoice flow and we need to pass in an amount of money. It's a good idea to store
// money in cents to prevent rounding errors, so using an _ makes it clearer:
function test_create_invoice()
{
    // $100 an 10 cents
    $invoice = new Invoice(100_10);

    // assertions
}

test_create_invoice();

class Invoice 
{
    // ...
    protected float $money;

    public function __construct(float $money) {
        $this->money = $money;
        echo 'Assigned amount: ', $this->money, PHP_EOL; 
    }

    // ...
}
