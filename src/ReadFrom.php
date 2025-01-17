<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use Thesis\ByteReader\Reader;
use Thesis\ByteReader\UnexpectedEof;
use Thesis\Endian\endian;

/**
 * @api
 */
interface ReadFrom extends Reader
{
    /**
     * @throws UnexpectedEof
     */
    public function readInt8(endian $endian = endian::network): int;

    /**
     * @return non-negative-int
     * @throws UnexpectedEof
     */
    public function readUint8(endian $endian = endian::network): int;

    /**
     * @throws UnexpectedEof
     */
    public function readInt16(endian $endian = endian::network): int;

    /**
     * @return non-negative-int
     * @throws UnexpectedEof
     */
    public function readUint16(endian $endian = endian::network): int;

    /**
     * @throws UnexpectedEof
     */
    public function readInt32(endian $endian = endian::network): int;

    /**
     * @return non-negative-int
     * @throws UnexpectedEof
     */
    public function readUint32(endian $endian = endian::network): int;

    /**
     * @throws UnexpectedEof
     */
    public function readInt64(endian $endian = endian::network): int;

    /**
     * @return non-negative-int
     * @throws UnexpectedEof
     */
    public function readUint64(endian $endian = endian::network): int;

    /**
     * @throws UnexpectedEof
     */
    public function readFloat(endian $endian = endian::network): float;

    /**
     * @throws UnexpectedEof
     */
    public function readDouble(endian $endian = endian::network): float;
}
