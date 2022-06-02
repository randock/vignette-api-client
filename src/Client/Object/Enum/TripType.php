<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class TripType extends AbstractEnum
{
    public const SINGLE = 'single';
    public const RETURN = 'return';
}
