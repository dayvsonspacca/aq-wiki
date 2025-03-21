<?php

declare(strict_types=1);

namespace AqWiki\Domain\Exceptions;

use Exception;

final class InventoryException extends Exception
{
    public static function duplicateItem(): self
    {
        return new self('An inventory can not have more than one instance of item.');
    }

    public static function negativeSpaces(): self
    {
        return new self('An inventory can not have negative spaces.');
    }

    public static function unavaliableSpace(): self
    {
        return new self("There's no space avaliable.");
    }
}
