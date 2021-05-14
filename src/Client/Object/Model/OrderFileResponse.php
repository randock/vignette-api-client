<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderFileResponse extends AbstractModel
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
     * @return string
     */
    function getOriginalName(): string
    {
        /** @var string $value */
        $value = $this->_getField('originalName', false);

        return $value;
    }

    /**
     * @return string
     */
    function getUri(): string
    {
        /** @var string $value */
        $value = $this->_getField('uri', false);

        return $value;
    }
}
