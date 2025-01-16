<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use Thesis\ByteWriter\Writer;
use Thesis\ByteWriter\WriterIsClosed;
use Thesis\Endian\endian;

/**
 * @api
 */
interface WriteTo extends Writer
{
    /**
     * @throws WriterIsClosed
     */
    public function writeInt8(int $v, endian $endian = endian::network): self;

    /**
     * @param non-negative-int $v
     * @throws WriterIsClosed
     */
    public function writeUint8(int $v, endian $endian = endian::network): self;

    /**
     * @throws WriterIsClosed
     */
    public function writeInt16(int $v, endian $endian = endian::network): self;

    /**
     * @param non-negative-int $v
     * @throws WriterIsClosed
     */
    public function writeUint16(int $v, endian $endian = endian::network): self;

    /**
     * @throws WriterIsClosed
     */
    public function writeInt32(int $v, endian $endian = endian::network): self;

    /**
     * @param non-negative-int $v
     * @throws WriterIsClosed
     */
    public function writeUint32(int $v, endian $endian = endian::network): self;

    /**
     * @throws WriterIsClosed
     */
    public function writeInt64(int $v, endian $endian = endian::network): self;

    /**
     * @param non-negative-int $v
     * @throws WriterIsClosed
     */
    public function writeUint64(int $v, endian $endian = endian::network): self;

    /**
     * @throws WriterIsClosed
     */
    public function writeFloat(float $v, endian $endian = endian::network): self;

    /**
     * @throws WriterIsClosed
     */
    public function writeDouble(float $v, endian $endian = endian::network): self;
}
