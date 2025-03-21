<?php

declare(strict_types=1);

namespace AqWiki\Domain\ValueObjects;

use AqWiki\Domain\{Contracts, Entities};

final class QuestRequirement implements Contracts\QuestRequirementInterface
{
    public function __construct(private readonly Entities\Quest $quest)
    {
    }

    public function pass(Entities\Player $player): bool
    {
        foreach ($this->quest->requirements as $requirement) {
            if (!$requirement->pass($player)) {
                return false;
            }
        }

        return true;
    }
}
