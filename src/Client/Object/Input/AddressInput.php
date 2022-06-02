<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class AddressInput extends AbstractInput
{
    public function __construct(string $street, string $houseNumber, string $zipcode, string $city, string $country)
    {
        $__data = [];
        $__data['street'] = $street;
        $__data['houseNumber'] = $houseNumber;
        $__data['zipcode'] = $zipcode;
        $__data['city'] = $city;
        $__data['country'] = $country;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getStreet(): string
    {
        /** @var string $value */
        $value = $this->_getField('street', false);

        return $value;
    }

    /**
     * @return string
     */
    function getHouseNumber(): string
    {
        /** @var string $value */
        $value = $this->_getField('houseNumber', false);

        return $value;
    }

    /**
     * @return string
     */
    function getZipcode(): string
    {
        /** @var string $value */
        $value = $this->_getField('zipcode', false);

        return $value;
    }

    /**
     * @return string
     */
    function getCity(): string
    {
        /** @var string $value */
        $value = $this->_getField('city', false);

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
}
