<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderProductVariantResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['data'] = isset($data['data']) ? OrderProductVariantDataResponse::fromArray($data['data']) : null;
        $data['vehicle'] = isset($data['vehicle']) ? VehicleResponse::fromArray($data['vehicle']) : null;
        $data['productVariant'] = isset($data['productVariant']) ? ProductVariantResponse::fromArray($data['productVariant']) : null;
        $data['price'] = isset($data['price']) ? MoneyResponse::fromArray($data['price']) : null;
        $data['finalPrice'] = isset($data['finalPrice']) ? MoneyResponse::fromArray($data['finalPrice']) : null;

        if(isset($data['files'])) {
        $array = [];
        foreach($data['files'] as $item) {
            $array[] = OrderFileResponse::fromArray($item);
        }
        $data['files'] = $array;
        }

        if(isset($data['mails'])) {
        $array = [];
        foreach($data['mails'] as $item) {
            $array[] = OrderProductVariantMailResponse::fromArray($item);
        }
        $data['mails'] = $array;
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
     * @return OrderProductVariantDataResponse|null
     */
    function getData(): ?OrderProductVariantDataResponse
    {
        /** @var OrderProductVariantDataResponse|null $value */
        $value = $this->_getField('data', true);

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

    /**
     * @return ProductVariantResponse
     */
    function getProductVariant(): ProductVariantResponse
    {
        /** @var ProductVariantResponse $value */
        $value = $this->_getField('productVariant', false);

        return $value;
    }

    /**
     * @return int
     */
    function getQuantity(): int
    {
        /** @var int $value */
        $value = $this->_getField('quantity', false);

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
    function getFinalPrice(): MoneyResponse
    {
        /** @var MoneyResponse $value */
        $value = $this->_getField('finalPrice', false);

        return $value;
    }

    /**
     * @return string[]|null
     */
    function getErrors(): ?array
    {
        /** @var string[]|null $value */
        $value = $this->_getField('errors', true);

        return $value;
    }

    /**
     * @return bool
     */
    function getProcessed(): bool
    {
        /** @var bool $value */
        $value = $this->_getField('processed', false);

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
     * @return string|null
     */
    function getAlternativeEmail(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('alternativeEmail', true);

        return $value;
    }

    /**
     * @return OrderProductVariantMailResponse[]
     */
    function getMails(): array
    {
        /** @var OrderProductVariantMailResponse[] $value */
        $value = $this->_getField('mails', false);

        return $value;
    }
}
