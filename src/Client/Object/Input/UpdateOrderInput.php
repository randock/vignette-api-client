<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class UpdateOrderInput extends AbstractInput
{
    public function __construct(
        UserInput $user,
        array $productVariants,
        ?string $ip,
        ?string $ipCountry,
        ?string $selfDeclaredCountry,
        ?string $googleClientId,
        string $locale,
        string $currency,
        \DateTime $startDate,
        \DateTime $endDate,
        string $detailUrl,
        ?AddressInput $address,
        string $id
    ) {
        $__data = [];
        $__data['user'] = $user;
        $__data['productVariants'] = $productVariants;
        $__data['ip'] = $ip;
        $__data['ipCountry'] = $ipCountry;
        $__data['selfDeclaredCountry'] = $selfDeclaredCountry;
        $__data['googleClientId'] = $googleClientId;
        $__data['locale'] = $locale;
        $__data['currency'] = $currency;
        $__data['startDate'] = $startDate;
        $__data['endDate'] = $endDate;
        $__data['detailUrl'] = $detailUrl;
        $__data['address'] = $address;
        $__data['id'] = $id;

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
     * @return string|null
     */
    function getIp(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('ip', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getIpCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('ipCountry', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getSelfDeclaredCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('selfDeclaredCountry', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getGoogleClientId(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('googleClientId', true);

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

    /**
     * @return string
     */
    function getId(): string
    {
        /** @var string $value */
        $value = $this->_getField('id', false);

        return $value;
    }
}
