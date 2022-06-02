<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;
use Randock\Vignette\Api\Client\Object\Enum\OrderStatus;

class ListOrdersInput extends AbstractInput
{
    public function __construct(?int $page, ?int $limit, ?OrderStatus $status, ?string $search)
    {
        $__data = [];
        $__data['page'] = $page;
        $__data['limit'] = $limit;
        $__data['status'] = $status;
        $__data['search'] = $search;

        parent::__construct($__data);
    }

    /**
     * @return int|null
     */
    function getPage(): ?int
    {
        /** @var int|null $value */
        $value = $this->_getField('page', true);

        return $value;
    }

    /**
     * @return int|null
     */
    function getLimit(): ?int
    {
        /** @var int|null $value */
        $value = $this->_getField('limit', true);

        return $value;
    }

    /**
     * @return OrderStatus|null
     */
    function getStatus(): ?OrderStatus
    {
        $value = $this->_getField('status', true);
        if (null !== $value) {
            $value = new OrderStatus($value);
        }

        return $value;
    }

    /**
     * @return string|null
     */
    function getSearch(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('search', true);

        return $value;
    }
}
