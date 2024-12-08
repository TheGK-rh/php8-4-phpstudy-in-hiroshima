<?php

class NewWithoutParentheses
{
    public function exec()
    {
        echo 'PHP勉強会in広島 Vol.2'.PHP_EOL;
    }
}

// PHP8.3
(new NewWithoutParentheses())->exec();

// PHP8.4
new NewWithoutParentheses()->exec();