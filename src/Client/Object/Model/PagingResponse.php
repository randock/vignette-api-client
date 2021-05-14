<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class PagingResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        return new self($data);
    }

    /**
     * @return int
     */
    function getPage(): int
    {
        /** @var int $value */
        $value = $this->_getField('page', false);

        return $value;
    }

    /**
     * @return int
     */
    function getLimit(): int
    {
        /** @var int $value */
        $value = $this->_getField('limit', false);

        return $value;
    }

    /**
     * @return int
     */
    function getTotal(): int
    {
        /** @var int $value */
        $value = $this->_getField('total', false);

        return $value;
    }

    /**
     * @return int
     */
    function getPages(): int
    {
        /** @var int $value */
        $value = $this->_getField('pages', false);

        return $value;
    }
}
