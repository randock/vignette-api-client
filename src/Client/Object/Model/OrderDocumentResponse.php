<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderDocumentResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['orderField'] = isset($data['orderField']) ? OrderFieldResponse::fromArray($data['orderField']) : null;
        $data['order'] = isset($data['order']) ? OrderResponse::fromArray($data['order']) : null;
        $data['vehicle'] = isset($data['vehicle']) ? VehicleResponse::fromArray($data['vehicle']) : null;

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
    function getOriginalName(): string
    {
        /** @var string $value */
        $value = $this->_getField('originalName', false);

        return $value;
    }

    /**
     * @return string
     */
    function getHashedName(): string
    {
        /** @var string $value */
        $value = $this->_getField('hashedName', false);

        return $value;
    }

    /**
     * @return string
     */
    function getType(): string
    {
        /** @var string $value */
        $value = $this->_getField('type', false);

        return $value;
    }

    /**
     * @return bool
     */
    function getConfirmed(): bool
    {
        /** @var bool $value */
        $value = $this->_getField('confirmed', false);

        return $value;
    }

    /**
     * @return OrderFieldResponse
     */
    function getOrderField(): OrderFieldResponse
    {
        /** @var OrderFieldResponse $value */
        $value = $this->_getField('orderField', false);

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getCreatedAt(): \DateTime
    {
        $value = $this->_getField('createdAt', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return OrderResponse
     */
    function getOrder(): OrderResponse
    {
        /** @var OrderResponse $value */
        $value = $this->_getField('order', false);

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
}
