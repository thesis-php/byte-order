<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use BcMath\Number;
use Thesis\ByteWriter\WriteFailed;
use Thesis\ByteWriter\Writer;
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
interface WriteTo extends Writer
{
    /**
     * @param Int8 $v
     * @throws WriteFailed
     */
    public function writeInt8(int $v, Order $order = Order::Network): self;

    /**
     * @param Uint8 $v
     * @throws WriteFailed
     */
    public function writeUint8(int $v, Order $order = Order::Network): self;

    /**
     * @param Int16 $v
     * @throws WriteFailed
     */
    public function writeInt16(int $v, Order $order = Order::Network): self;

    /**
     * @param Uint16 $v
     * @throws WriteFailed
     */
    public function writeUint16(int $v, Order $order = Order::Network): self;

    /**
     * @param Int32 $v
     * @throws WriteFailed
     */
    public function writeInt32(int $v, Order $order = Order::Network): self;

    /**
     * @param Uint32 $v
     * @throws WriteFailed
     */
    public function writeUint32(int $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeInt64(Number $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeUint64(Number $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeFloat(float $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeDouble(float $v, Order $order = Order::Network): self;
}
