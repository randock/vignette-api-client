<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class DocumentResponse extends AbstractModel
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
    function getName(): string
    {
        /** @var string $value */
        $value = $this->_getField('name', false);

        return $value;
    }

    /**
     * @return string
     */
    function getUrl(): string
    {
        /** @var string $value */
        $value = $this->_getField('url', false);

        return $value;
    }
}
