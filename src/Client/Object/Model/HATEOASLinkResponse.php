<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class HATEOASLinkResponse extends AbstractModel
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
    function getHref(): string
    {
        /** @var string $value */
        $value = $this->_getField('href', false);

        return $value;
    }

    /**
     * @return string
     */
    function getRel(): string
    {
        /** @var string $value */
        $value = $this->_getField('rel', false);

        return $value;
    }

    /**
     * @return string
     */
    function getMethod(): string
    {
        /** @var string $value */
        $value = $this->_getField('method', false);

        return $value;
    }
}
