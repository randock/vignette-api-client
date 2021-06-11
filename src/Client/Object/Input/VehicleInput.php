<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;
use Randock\Vignette\Api\Client\Object\Enum\VehicleType;

class VehicleInput extends AbstractInput
{
    public function __construct(
        string $licensePlateNumber,
        VehicleType $type,
        string $country,
        ?string $vin,
        ?string $brand,
        ?string $fuel,
        ?\DateTime $registrationDate
    ) {
        $__data = [];
        $__data['licensePlateNumber'] = $licensePlateNumber;
        $__data['type'] = $type;
        $__data['country'] = $country;
        $__data['vin'] = $vin;
        $__data['brand'] = $brand;
        $__data['fuel'] = $fuel;
        $__data['registrationDate'] = $registrationDate;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getLicensePlateNumber(): string
    {
        /** @var string $value */
        $value = $this->_getField('licensePlateNumber', false);

        return $value;
    }

    /**
     * @return VehicleType
     */
    function getType(): VehicleType
    {
        $value = $this->_getField('type', false);
        if (null !== $value) {
            $value = new VehicleType($value);
        }

        return $value;
    }

    /**
     * @return string
     */
    function getCountry(): string
    {
        /** @var string $value */
        $value = $this->_getField('country', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getVin(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('vin', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getBrand(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('brand', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getFuel(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('fuel', true);

        return $value;
    }

    /**
     * @return \DateTime|null
     */
    function getRegistrationDate(): ?\DateTime
    {
        $value = $this->_getField('registrationDate', true);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }
}
