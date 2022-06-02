<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class TransactionResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['price'] = isset($data['price']) ? MoneyResponse::fromArray($data['price']) : null;
        $data['refunded'] = isset($data['refunded']) ? MoneyResponse::fromArray($data['refunded']) : null;

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
     * @return string|null
     */
    function getPaymentMethod(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('paymentMethod', true);

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
     * @return MoneyResponse
     */
    function getPrice(): MoneyResponse
    {
        /** @var MoneyResponse $value */
        $value = $this->_getField('price', false);

        return $value;
    }

    /**
     * @return MoneyResponse
     */
    function getRefunded(): MoneyResponse
    {
        /** @var MoneyResponse $value */
        $value = $this->_getField('refunded', false);

        return $value;
    }

    /**
     * @return string
     */
    function getGateway(): string
    {
        /** @var string $value */
        $value = $this->_getField('gateway', false);

        return $value;
    }

    /**
     * @return string
     */
    function getGatewayTransactionId(): string
    {
        /** @var string $value */
        $value = $this->_getField('gatewayTransactionId', false);

        return $value;
    }
}
