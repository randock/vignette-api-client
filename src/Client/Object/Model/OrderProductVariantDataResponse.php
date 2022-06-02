<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderProductVariantDataResponse extends AbstractModel
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
    function getType(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('type', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getStart(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('start', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getRoadRef(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('roadRef', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getRoadCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('roadCode', true);

        return $value;
    }
}
