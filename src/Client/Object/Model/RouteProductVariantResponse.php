<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class RouteProductVariantResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['productVariant'] = isset($data['productVariant']) ? ProductVariantResponse::fromArray($data['productVariant']) : null;

        return new self($data);
    }

    /**
     * @return float
     */
    function getQuantity(): float
    {
        /** @var float $value */
        $value = $this->_getField('quantity', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getStart(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('start', true);

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
}
