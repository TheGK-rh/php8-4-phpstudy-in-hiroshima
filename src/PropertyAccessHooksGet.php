<?php

class PropertyAccessHooksGet
{
    public function __construct(private string $firstName, private string $lastName) {}

    public string $fullName {
        get {
            return $this->lastName . ' ' . $this->firstName;
        }
    }

    public string $name {
        get {
            return strtoupper($this->name);
        }
    }
}

$hooks = new PropertyAccessHooksGet('Shohei', 'Ohtani');
echo $hooks->fullName; // Ohtani Shohei
echo PHP_EOL;
// echo gettype($hooks->fullName); // string
// echo PHP_EOL;

$hooks->name = 'Shohei Ohtani';
echo $hooks->name; // SHOHEI OHTANI