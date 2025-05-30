<?php

declare(strict_types=1);

namespace AqWiki\Shared\Domain\Enums;

enum TagType
{
    case Legend;
    case AdventureCoins;
    case Rare;
    case PseudoRare;
    case Seasonal;
}
