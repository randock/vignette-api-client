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

        if(isset($data['comments'])) {
        $array = [];
        foreach($data['comments'] as $item) {
            $array[] = OrderCommentResponse::fromArray($item);
        }
        $data['comments'] = $array;
        }

        if(isset($data['transactions'])) {
        $array = [];
        foreach($data['transactions'] as $item) {
            $array[] = TransactionResponse::fromArray($item);
        }
        $data['transactions'] = $array;
        }
        $data['address'] = isset($data['address']) ? OrderAddressResponse::fromArray($data['address']) : null;

        if(isset($data['files'])) {
        $array = [];
        foreach($data['files'] as $item) {
            $array[] = OrderFileResponse::fromArray($item);
        }
        $data['files'] = $array;
        }

        if(isset($data['invoices'])) {
        $array = [];
        foreach($data['invoices'] as $item) {
            $array[] = InvoiceResponse::fromArray($item);
        }
        $data['invoices'] = $array;
        }
        $data['apiUser'] = isset($data['apiUser']) ? ApiUserResponse::fromArray($data['apiUser']) : null;
        $data['price'] = isset($data['price']) ? MoneyResponse::fromArray($data['price']) : null;
        $data['shippingCost'] = isset($data['shippingCost']) ? MoneyResponse::fromArray($data['shippingCost']) : null;

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
     * @return int
     */
    function getOrderId(): int
    {
        /** @var int $value */
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

    /**
     * @return OrderCommentResponse[]|null
     */
    function getComments(): ?array
    {
        /** @var OrderCommentResponse[]|null $value */
        $value = $this->_getField('comments', true);

        return $value;
    }

    /**
     * @return TransactionResponse[]|null
     */
    function getTransactions(): ?array
    {
        /** @var TransactionResponse[]|null $value */
        $value = $this->_getField('transactions', true);

        return $value;
    }

    /**
     * @return OrderAddressResponse|null
     */
    function getAddress(): ?OrderAddressResponse
    {
        /** @var OrderAddressResponse|null $value */
        $value = $this->_getField('address', true);

        return $value;
    }

    /**
     * @return OrderFileResponse[]|null
     */
    function getFiles(): ?array
    {
        /** @var OrderFileResponse[]|null $value */
        $value = $this->_getField('files', true);

        return $value;
    }

    /**
     * @return InvoiceResponse[]|null
     */
    function getInvoices(): ?array
    {
        /** @var InvoiceResponse[]|null $value */
        $value = $this->_getField('invoices', true);

        return $value;
    }

    /**
     * @return ApiUserResponse|null
     */
    function getApiUser(): ?ApiUserResponse
    {
        /** @var ApiUserResponse|null $value */
        $value = $this->_getField('apiUser', true);

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
    function getDetailUrl(): string
    {
        /** @var string $value */
        $value = $this->_getField('detailUrl', false);

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
    function getShippingCost(): MoneyResponse
    {
        /** @var MoneyResponse $value */
        $value = $this->_getField('shippingCost', false);

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
}
