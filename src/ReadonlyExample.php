<?php

class ReadonlyExample
{
    public function __construct(
        public readonly string $name,
    ) {}

    public function getName(): string
    {
        return $this->name = 'GoQ';
    }
}

$readonly = new ReadonlyExample('John Doe');
echo $readonly->name; // John Doe
echo PHP_EOL;

// echo $readonly->getName(); // Fatal error
// $readonly->name = 'Jane Doe'; // Fatal error