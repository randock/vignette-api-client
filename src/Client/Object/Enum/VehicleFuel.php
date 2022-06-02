<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class VehicleFuel extends AbstractEnum
{
    public const ELECTRIC = 'electric';
    public const DIESEL = 'diesel';
    public const GASOLINE = 'gasoline';
    public const NATURAL_GAS = 'natural_gas';
    public const HYDROGEN = 'hydrogen';
    public const GPL = 'gpl';
    public const LPG = 'lpg';
    public const E85 = 'e85';
    public const BIOMETHANE = 'biomethane';
}
