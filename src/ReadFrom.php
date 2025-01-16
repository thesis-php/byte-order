<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use Amp\Cancellation;
use Thesis\ByteReader\Reader;
use Thesis\ByteReader\ReaderIsClosed;
use Thesis\Endian\endian;

/**
 * @api
 */
interface ReadFrom extends Reader
{
    /**
     * @throws ReaderIsClosed
     */
    public function readInt8(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @return non-negative-int
     * @throws ReaderIsClosed
     */
    public function readUint8(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @throws ReaderIsClosed
     */
    public function readInt16(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @return non-negative-int
     * @throws ReaderIsClosed
     */
    public function readUint16(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @throws ReaderIsClosed
     */
    public function readInt32(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @return non-negative-int
     * @throws ReaderIsClosed
     */
    public function readUint32(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @throws ReaderIsClosed
     */
    public function readInt64(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @return non-negative-int
     * @throws ReaderIsClosed
     */
    public function readUint64(endian $endian = endian::network, ?Cancellation $cancellation = null): int;

    /**
     * @throws ReaderIsClosed
     */
    public function readFloat(endian $endian = endian::network, ?Cancellation $cancellation = null): float;

    /**
     * @throws ReaderIsClosed
     */
    public function readDouble(endian $endian = endian::network, ?Cancellation $cancellation = null): float;
}
