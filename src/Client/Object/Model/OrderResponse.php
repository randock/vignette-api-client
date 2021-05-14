<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['user'] = isset($data['user']) ? UserResponse::fromArray($data['user']) : null;

        if(isset($data['orderProductVariants'])) {
        $array = [];
        foreach($data['orderProductVariants'] as $item) {
            $array[] = OrderProductVariantResponse::fromArray($item);
        }
        $data['orderProductVariants'] = $array;
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
     * @return float|null
     */
    function getApiUserId(): ?float
    {
        /** @var float|null $value */
        $value = $this->_getField('apiUserId', true);

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
     * @return float
     */
    function getOrderId(): float
    {
        /** @var float $value */
        $value = $this->_getField('orderId', false);

        return $value;
    }

    /**
     * @return string
     */
    function getStatus(): string
    {
        /** @var string $value */
        $value = $this->_getField('status', false);

        return $value;
    }

    /**
     * @return UserResponse
     */
    function getUser(): UserResponse
    {
        /** @var UserResponse $value */
        $value = $this->_getField('user', false);

        return $value;
    }

    /**
     * @return OrderProductVariantResponse[]
     */
    function getOrderProductVariants(): array
    {
        /** @var OrderProductVariantResponse[] $value */
        $value = $this->_getField('orderProductVariants', false);

        return $value;
    }
}
