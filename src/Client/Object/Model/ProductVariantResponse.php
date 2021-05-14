<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;
use Randock\Vignette\Api\Client\Object\Enum\ProductVariantDeliveryMethod;

class ProductVariantResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['product'] = isset($data['product']) ? ProductResponse::fromArray($data['product']) : null;

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
    function getTitle(): string
    {
        /** @var string $value */
        $value = $this->_getField('title', false);

        return $value;
    }

    /**
     * @return bool
     */
    function getAvailable(): bool
    {
        /** @var bool $value */
        $value = $this->_getField('available', false);

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
     * @return ProductResponse
     */
    function getProduct(): ProductResponse
    {
        /** @var ProductResponse $value */
        $value = $this->_getField('product', false);

        return $value;
    }

    /**
     * @return ProductVariantDeliveryMethod|null
     */
    function getDeliveryMethod(): ?ProductVariantDeliveryMethod
    {
        $value = $this->_getField('deliveryMethod', true);
        if (null !== $value) {
            $value = new ProductVariantDeliveryMethod($value);
        }

        return $value;
    }
}
