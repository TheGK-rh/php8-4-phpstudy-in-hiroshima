<?php

class AsymmetricVisibilityV2
{
    public private(set) string $companyName = 'GoQSystem';

    public function __construct(
        public private(set) string $name,
    ) {}

    public function getName(): string
    {
        return $this->name = 'GoQ';
    }
}

$asymmetricVisibility = new AsymmetricVisibilityV2('John Doe');
echo $asymmetricVisibility->companyName; // GoQSystem
echo PHP_EOL;

echo $asymmetricVisibility->name; // John Doe
echo PHP_EOL;

echo $asymmetricVisibility->getName(); // GoQ

$asymmetricVisibility->companyName = 'GoQSystem Inc.'; // Fatal error: Uncaught Error: Cannot access private property AsymmetricVisibilityV2::$companyName