<?php

declare(strict_types=1);

namespace AqWiki\Domain\Entities;

use AqWiki\Domain\{ValueObjects, Abstractions};

final class Quest extends Abstractions\Entity
{
    public function __construct(
        public readonly string $name,
        public readonly ?string $location,
        public readonly ValueObjects\QuestRequirements $requirements
    ) {
    }
}
