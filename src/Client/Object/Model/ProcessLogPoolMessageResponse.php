<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class ProcessLogPoolMessageResponse extends AbstractModel
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
    function getType(): string
    {
        /** @var string $value */
        $value = $this->_getField('type', false);

        return $value;
    }

    /**
     * @return string
     */
    function getMessage(): string
    {
        /** @var string $value */
        $value = $this->_getField('message', false);

        return $value;
    }
}
