<?php

declare(strict_types=1);

namespace Thesis\ByteOrder;

use BcMath\Number;
use Thesis\ByteWriter\WriteFailed;
use Thesis\ByteWriter\Writer;
use Thesis\Endian\Order;

/**
 * @api
 */
interface WriteTo extends Writer
{
    /**
     * @throws WriteFailed
     */
    public function writeInt8(int $v, Order $order = Order::Network): self;

    /**
     * @param non-negative-int $v
     * @throws WriteFailed
     */
    public function writeUint8(int $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeInt16(int $v, Order $order = Order::Network): self;

    /**
     * @param non-negative-int $v
     * @throws WriteFailed
     */
    public function writeUint16(int $v, Order $order = Order::Network): self;

    /**
     * @throws WriteFailed
     */
    public function writeInt32(int $v, Order $order = Order::Network): self;

    /**
     * @param non-negative-int $v
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
