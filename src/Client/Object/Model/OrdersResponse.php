<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrdersResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['paging'] = isset($data['paging']) ? PagingResponse::fromArray($data['paging']) : null;

        if(isset($data['orders'])) {
        $array = [];
        foreach($data['orders'] as $item) {
            $array[] = OrderResponse::fromArray($item);
        }
        $data['orders'] = $array;
        }

        return new self($data);
    }

    /**
     * @return PagingResponse
     */
    function getPaging(): PagingResponse
    {
        /** @var PagingResponse $value */
        $value = $this->_getField('paging', false);

        return $value;
    }

    /**
     * @return OrderResponse[]
     */
    function getOrders(): array
    {
        /** @var OrderResponse[] $value */
        $value = $this->_getField('orders', false);

        return $value;
    }
}
