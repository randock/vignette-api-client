<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderProductVariantResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['vehicle'] = isset($data['vehicle']) ? VehicleResponse::fromArray($data['vehicle']) : null;
        $data['productVariant'] = isset($data['productVariant']) ? ProductVariantResponse::fromArray($data['productVariant']) : null;

        if(isset($data['files'])) {
        $array = [];
        foreach($data['files'] as $item) {
            $array[] = OrderFileResponse::fromArray($item);
        }
        $data['files'] = $array;
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
     * @return object|null
     */
    function getData(): ?object
    {
        /** @var object|null $value */
        $value = $this->_getField('data', true);
        if (null !== $value) {
            $value = json_decode(json_encode($value));
        }

        return $value;
    }

    /**
     * @return VehicleResponse|null
     */
    function getVehicle(): ?VehicleResponse
    {
        /** @var VehicleResponse|null $value */
        $value = $this->_getField('vehicle', true);

        return $value;
    }

    /**
     * @return ProductVariantResponse
     */
    function getProductVariant(): ProductVariantResponse
    {
        /** @var ProductVariantResponse $value */
        $value = $this->_getField('productVariant', false);

        return $value;
    }

    /**
     * @return bool
     */
    function getProcessed(): bool
    {
        /** @var bool $value */
        $value = $this->_getField('processed', false);

        return $value;
    }

    /**
     * @return OrderFileResponse[]|null
     */
    function getFiles(): ?array
    {
        /** @var OrderFileResponse[]|null $value */
        $value = $this->_getField('files', true);

        return $value;
    }
}
