<?php

declare(strict_types=1);

namespace AqWiki\Shared\Domain\Abstractions;

use AqWiki\Items\Domain\Abstractions\AqwItem;
use IteratorAggregate;
use ArrayIterator;
use Countable;

abstract class Inventory implements Countable, IteratorAggregate
{
    protected array $items = [];

    /** @param array<string, AqwItem> $items */
    public function __construct(
        array $items,
        protected int $maxSpaces
    ) {
        foreach ($items as $item) {
            $this->items[md5($item->getGuid())] = $item;
        }
    }

    /** @return Result<null> */
    abstract public function add(AqwItem $item);

    /** @return Result<null> */
    abstract public function delete(AqwItem $item);

    public function has(AqwItem $item): bool
    {
        return in_array($item, $this->items, true);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function getMaxSpaces(): int
    {
        return $this->maxSpaces;
    }

    abstract public function getAvaliableSpaces(): int;

    /** @return array<string, AqwItem> */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
}
