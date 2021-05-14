<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;
use Randock\Vignette\Api\Client\Object\Enum\VehicleType;

class VehicleResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['country'] = isset($data['country']) ? CountryResponse::fromArray($data['country']) : null;

        return new self($data);
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
    function getLicensePlateNumber(): string
    {
        /** @var string $value */
        $value = $this->_getField('licensePlateNumber', false);

        return $value;
    }

    /**
     * @return CountryResponse
     */
    function getCountry(): CountryResponse
    {
        /** @var CountryResponse $value */
        $value = $this->_getField('country', false);

        return $value;
    }
}
