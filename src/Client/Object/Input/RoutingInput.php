<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;
use Randock\Vignette\Api\Client\Object\Enum\TripType;

class RoutingInput extends AbstractInput
{
    public function __construct(string $start, string $end, TripType $tripType, ?array $waypoints)
    {
        $__data = [];
        $__data['start'] = $start;
        $__data['end'] = $end;
        $__data['tripType'] = $tripType;
        $__data['waypoints'] = $waypoints;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getStart(): string
    {
        /** @var string $value */
        $value = $this->_getField('start', false);

        return $value;
    }

    /**
     * @return string
     */
    function getEnd(): string
    {
        /** @var string $value */
        $value = $this->_getField('end', false);

        return $value;
    }

    /**
     * @return TripType
     */
    function getTripType(): TripType
    {
        $value = $this->_getField('tripType', false);
        if (null !== $value) {
            $value = new TripType($value);
        }

        return $value;
    }

    /**
     * @return string[]|null
     */
    function getWaypoints(): ?array
    {
        /** @var string[]|null $value */
        $value = $this->_getField('waypoints', true);

        return $value;
    }
}
