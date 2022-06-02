<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderVatLocationResponse extends AbstractModel
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
     * @return string|null
     */
    function getIp(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('ip', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getIpCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('ipCountry', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getSelfDeclaredCountry(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('selfDeclaredCountry', true);

        return $value;
    }
}
