<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;
use Randock\Vignette\Api\Client\Object\Enum\VehicleFuel;
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

        if(isset($data['orderDocuments'])) {
        $array = [];
        foreach($data['orderDocuments'] as $item) {
            $array[] = OrderDocumentResponse::fromArray($item);
        }
        $data['orderDocuments'] = $array;
        }

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
     * @return string|null
     */
    function getLicensePlateNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('licensePlateNumber', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getTrailerLicensePlateNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('trailerLicensePlateNumber', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getVinNumber(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('vinNumber', true);

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
    function getStickerColor(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('stickerColor', true);

        return $value;
    }

    /**
     * @return VehicleFuel|null
     */
    function getFuel(): ?VehicleFuel
    {
        $value = $this->_getField('fuel', true);
        if (null !== $value) {
            $value = new VehicleFuel($value);
        }

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

    /**
     * @return OrderDocumentResponse[]
     */
    function getOrderDocuments(): array
    {
        /** @var OrderDocumentResponse[] $value */
        $value = $this->_getField('orderDocuments', false);

        return $value;
    }
}
