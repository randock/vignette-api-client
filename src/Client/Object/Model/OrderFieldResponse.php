<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderFieldResponse extends AbstractModel
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
    function getId(): string
    {
        /** @var string $value */
        $value = $this->_getField('id', false);

        return $value;
    }

    /**
     * @return string
     */
    function getField(): string
    {
        /** @var string $value */
        $value = $this->_getField('field', false);

        return $value;
    }

    /**
     * @return string
     */
    function getType(): string
    {
        /** @var string $value */
        $value = $this->_getField('type', false);

        return $value;
    }
}
