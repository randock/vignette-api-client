<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class ProductVariantInput extends AbstractInput
{
    public function __construct(
        string $id,
        ?int $quantity,
        ?ProductVariantDataInput $data,
        ?VehicleInput $vehicle,
        ?float $price
    ) {
        $__data = [];
        $__data['id'] = $id;
        $__data['quantity'] = $quantity;
        $__data['data'] = $data;
        $__data['vehicle'] = $vehicle;
        $__data['price'] = $price;

        parent::__construct($__data);
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
     * @return int|null
     */
    function getQuantity(): ?int
    {
        /** @var int|null $value */
        $value = $this->_getField('quantity', true);

        return $value;
    }

    /**
     * @return ProductVariantDataInput|null
     */
    function getData(): ?ProductVariantDataInput
    {
        /** @var ProductVariantDataInput|null $value */
        $value = $this->_getField('data', true);

        return $value;
    }

    /**
     * @return VehicleInput|null
     */
    function getVehicle(): ?VehicleInput
    {
        /** @var VehicleInput|null $value */
        $value = $this->_getField('vehicle', true);

        return $value;
    }

    /**
     * @return float|null
     */
    function getPrice(): ?float
    {
        /** @var float|null $value */
        $value = $this->_getField('price', true);

        return $value;
    }
}
