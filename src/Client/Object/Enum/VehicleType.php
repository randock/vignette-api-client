<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class VehicleType extends AbstractEnum
{
    public const CAR = 'car';
    public const MOTORCYCLE = 'motorcycle';
    public const CAMPER = 'camper';
}
