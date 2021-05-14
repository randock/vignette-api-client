<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class ProductResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['productVariants'])) {
        $array = [];
        foreach($data['productVariants'] as $item) {
            $array[] = ProductVariantResponse::fromArray($item);
        }
        $data['productVariants'] = $array;
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
     * @return string
     */
    function getTitle(): string
    {
        /** @var string $value */
        $value = $this->_getField('title', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getCountryIsoCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('countryIsoCode', true);

        return $value;
    }

    /**
     * @return ProductVariantResponse[]
     */
    function getProductVariants(): array
    {
        /** @var ProductVariantResponse[] $value */
        $value = $this->_getField('productVariants', false);

        return $value;
    }
}
