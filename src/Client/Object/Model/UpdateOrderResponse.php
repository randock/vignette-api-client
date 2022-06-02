<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class UpdateOrderResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['order'] = isset($data['order']) ? OrderResponse::fromArray($data['order']) : null;

        return new self($data);
    }

    /**
     * @return OrderResponse
     */
    function getOrder(): OrderResponse
    {
        /** @var OrderResponse $value */
        $value = $this->_getField('order', false);

        return $value;
    }

    /**
     * @return string
     */
    function getToken(): string
    {
        /** @var string $value */
        $value = $this->_getField('token', false);

        return $value;
    }

    /**
     * @return string
     */
    function getPaymentLink(): string
    {
        /** @var string $value */
        $value = $this->_getField('paymentLink', false);

        return $value;
    }
}
