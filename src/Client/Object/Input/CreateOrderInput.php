<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class CreateOrderInput extends AbstractInput
{
    public function __construct(UserInput $user, array $productVariants, string $locale, ?string $currency)
    {
        $__data = [];
        $__data['user'] = $user;
        $__data['productVariants'] = $productVariants;
        $__data['locale'] = $locale;
        $__data['currency'] = $currency;

        parent::__construct($__data);
    }

    /**
     * @return UserInput
     */
    function getUser(): UserInput
    {
        /** @var UserInput $value */
        $value = $this->_getField('user', false);

        return $value;
    }

    /**
     * @return ProductVariantInput[]
     */
    function getProductVariants(): array
    {
        /** @var ProductVariantInput[] $value */
        $value = $this->_getField('productVariants', false);

        return $value;
    }

    /**
     * @return string
     */
    function getLocale(): string
    {
        /** @var string $value */
        $value = $this->_getField('locale', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getCurrency(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('currency', true);

        return $value;
    }
}
