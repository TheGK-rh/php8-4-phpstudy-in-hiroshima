<?php

class CreateFromTimestamp
{
    public function createFromTimestampOld($timestamp)
    {
        return DateTimeImmutable::createFromFormat('U', (string) $timestamp);
    }

    public function createFromTimestampNew($timestamp)
    {
        return DateTimeImmutable::createFromTimestamp($timestamp);
    }
}

$create = new CreateFromTimestamp();
echo $create->createFromTimestampOld(time())->format('Y-m-d H:i:s') . PHP_EOL;
echo $create->createFromTimestampNew(time())->format('Y-m-d H:i:s') . PHP_EOL;