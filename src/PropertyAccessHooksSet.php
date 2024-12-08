<?php

class PropertyAccessHooksSet
{
    public function __construct(private string $firstName, private string $lastName) {}

    public string $fullName {
        set {
            [$this->firstName, $this->lastName] = explode(' ', $value, 2);
        }
        // get {
        //     return $this->lastName . ' ' . $this->firstName;
        // }
    }

    public string $name {
        get {
            return strtoupper($this->name);
        }
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}

$hooks = new PropertyAccessHooksSet('Shohei', 'Ohtani');
// echo $hooks->fullName; // Ohtani Shohei
// echo PHP_EOL;

$hooks->fullName = 'Yu Darvish';
echo $hooks->getFirstName(); // Yu
echo PHP_EOL;