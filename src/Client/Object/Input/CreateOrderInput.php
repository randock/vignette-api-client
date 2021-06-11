<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class CreateOrderInput extends AbstractInput
{
    public function __construct(
        UserInput $user,
        array $productVariants,
        string $locale,
        string $currency,
        \DateTime $startDate,
        \DateTime $endDate,
        string $detailUrl,
        ?AddressInput $address
    ) {
        $__data = [];
        $__data['user'] = $user;
        $__data['productVariants'] = $productVariants;
        $__data['locale'] = $locale;
        $__data['currency'] = $currency;
        $__data['startDate'] = $startDate;
        $__data['endDate'] = $endDate;
        $__data['detailUrl'] = $detailUrl;
        $__data['address'] = $address;

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
     * @return string
     */
    function getCurrency(): string
    {
        /** @var string $value */
        $value = $this->_getField('currency', false);

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getStartDate(): \DateTime
    {
        $value = $this->_getField('startDate', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getEndDate(): \DateTime
    {
        $value = $this->_getField('endDate', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return string
     */
    function getDetailUrl(): string
    {
        /** @var string $value */
        $value = $this->_getField('detailUrl', false);

        return $value;
    }

    /**
     * @return AddressInput|null
     */
    function getAddress(): ?AddressInput
    {
        /** @var AddressInput|null $value */
        $value = $this->_getField('address', true);

        return $value;
    }
}
