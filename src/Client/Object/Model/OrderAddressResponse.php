<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderAddressResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        return new self($data);
    }

    /**
     * @return string
     */
    function getId(): string
    {
        /** @var string $value */
        $value = $this->_getField('id', false);

        return $value;
    }

    /**
     * @return string
     */
    function getZipCode(): string
    {
        /** @var string $value */
        $value = $this->_getField('zipCode', false);

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
    function getStreet(): string
    {
        /** @var string $value */
        $value = $this->_getField('street', false);

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
