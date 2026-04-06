<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use BcMath\Number;
use Thesis\ByteReader\Reader;
use Thesis\ByteReader\UnexpectedEof;
use Thesis\Endian\Order;

/**
 * @api
 *
 * @phpstan-import-type Int8 from Order
 * @phpstan-import-type Uint8 from Order
 * @phpstan-import-type Int16 from Order
 * @phpstan-import-type Uint16 from Order
 * @phpstan-import-type Int32 from Order
 * @phpstan-import-type Uint32 from Order
 */
interface ReadFrom extends Reader
{
    /**
     * @return Int8
     * @throws UnexpectedEof
     */
    public function readInt8(Order $order = Order::Network): int;

    /**
     * @return non-negative-int
     * @return Uint8
     * @throws UnexpectedEof
     */
    public function readUint8(Order $order = Order::Network): int;

    /**
     * @return Int16
     * @throws UnexpectedEof
     */
    public function readInt16(Order $order = Order::Network): int;

    /**
     * @return non-negative-int
     * @return Uint16
     * @throws UnexpectedEof
     */
    public function readUint16(Order $order = Order::Network): int;

    /**
     * @return Int32
     * @throws UnexpectedEof
     */
    public function readInt32(Order $order = Order::Network): int;

    /**
     * @return non-negative-int
     * @return Uint32
     * @throws UnexpectedEof
     */
    public function readUint32(Order $order = Order::Network): int;

    /**
     * @throws UnexpectedEof
     */
    public function readInt64(Order $order = Order::Network): Number;

    /**
     * @throws UnexpectedEof
     */
    public function readUint64(Order $order = Order::Network): Number;

    /**
     * @throws UnexpectedEof
     */
    public function readFloat(Order $order = Order::Network): float;

    /**
     * @throws UnexpectedEof
     */
    public function readDouble(Order $order = Order::Network): float;
}
