# ByteOrder

## Installation

```shell
composer require thesis/byteorder
```

## Basic usage

```php
<?php

declare(strict_types=1);

use Thesis\ByteOrder\ReadFrom;
use Thesis\ByteOrder\WriteTo;

final class Frame
{
    /**
     * @param non-empty-string $id
     * @param non-negative-int $attempts
     */
    public function __construct(
        public readonly string $id,
        public readonly int $attempts,
    ) {}
}

function readFrame(ReadFrom $reader): Frame
{
    return new Frame(
        $reader->read($reader->readUint16()),
        $reader->readUint32(),
    );
} 

function writeFrame(WriteTo $writer, Frame $frame): void
{
    $writer->writeUint16(\strlen($frame->id));
    $writer->write($frame->id);
    $writer->writeUint32($frame->attempts);
}
```