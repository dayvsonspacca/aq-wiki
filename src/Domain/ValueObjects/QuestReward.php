<?php

declare(strict_types=1);

namespace AqWiki\Domain\ValueObjects;

use AqWiki\Domain\{ValueObjects, Abstractions};

final class QuestReward
{
    public function __construct(private Abstractions\AqwItem|ValueObjects\GameCurrency $reward)
    {
    }
}
