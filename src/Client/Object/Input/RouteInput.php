<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class RouteInput extends AbstractInput
{
    public function __construct(
        string $currency,
        ?RoutingInput $route,
        string $vehicle,
        string $destination,
        array $countries,
        \DateTime $startDate,
        \DateTime $endDate,
        ?string $vehicleCountry,
        ?string $licensePlateNumber,
        ?bool $trailer,
        ?bool $mainOnly,
        ?bool $includeTolls,
        ?array $tollTrajects,
        ?string $shippingCountry,
        ?object $priceOverwrite,
        ?object $extra,
        ?string $locale
    ) {
        $__data = [];
        $__data['currency'] = $currency;
        $__data['route'] = $route;
        $__data['vehicle'] = $vehicle;
        $__data['destination'] = $destination;
        $__data['countries'] = $countries;
        $__data['startDate'] = $startDate;
        $__data['endDate'] = $endDate;
        $__data['vehicleCountry'] = $vehicleCountry;
        $__data['licensePlateNumber'] = $licensePlateNumber;
        $__data['trailer'] = $trailer;
        $__data['mainOnly'] = $mainOnly;
        $__data['includeTolls'] = $includeTolls;
        $__data['tollTrajects'] = $tollTrajects;
        $__data['shippingCountry'] = $shippingCountry;
        $__data['priceOverwrite'] = $priceOverwrite;
        $__data['extra'] = $extra;
        $__data['locale'] = $locale;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getCurrency(): string
    {
        /** @var string $value */
        $value = $this->_getField('currency', false);

        return $value;
    }

    /**
     * @return RoutingInput|null
     */
    function getRoute(): ?RoutingInput
    {
        /** @var RoutingInput|null $value */
        $value = $this->_getField('route', true);

        return $value;
    }

    /**
     * @return string
     */
    function getVehicle(): string
    {
        /** @var string $value */
        $value = $this->_getField('vehicle', false);

        return $value;
    }

    /**
     * @return string
     */
    function getDestination(): string
    {
        /** @var string $value */
        $value = $this->_getField('destination', false);

        return $value;
    }

    /**
     * @return string[]
     */
    function getCountries(): array
    {
        /** @var string[] $value */
        $value = $this->_getField('countries', false);

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getStartDate(): \DateTime
    {
        $value = $this->_getField('startDate', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getEndDate(): \DateTime
    {
        $value = $this->_getField('endDate', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return string|null
     */
    function getVehicleCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('vehicleCountry', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getLicensePlateNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('licensePlateNumber', true);

        return $value;
    }

    /**
     * @return bool|null
     */
    function getTrailer(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->_getField('trailer', true);

        return $value;
    }

    /**
     * @return bool|null
     */
    function getMainOnly(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->_getField('mainOnly', true);

        return $value;
    }

    /**
     * @return bool|null
     */
    function getIncludeTolls(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->_getField('includeTolls', true);

        return $value;
    }

    /**
     * @return TollTrajectInput[]|null
     */
    function getTollTrajects(): ?array
    {
        /** @var TollTrajectInput[]|null $value */
        $value = $this->_getField('tollTrajects', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getShippingCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('shippingCountry', true);

        return $value;
    }

    /**
     * @return object|null
     */
    function getPriceOverwrite(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('priceOverwrite', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
        }

        return $value;
    }

    /**
     * @return object|null
     */
    function getExtra(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('extra', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
        }

        return $value;
    }

    /**
     * @return string|null
     */
    function getLocale(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('locale', true);

        return $value;
    }
}
