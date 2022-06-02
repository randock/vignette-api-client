<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class MoneyResponse extends AbstractModel
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
    function getCurrencyCode(): string
    {
        /** @var string $value */
        $value = $this->_getField('currencyCode', false);

        return $value;
    }

    /**
     * @return float
     */
    function getAmount(): float
    {
        /** @var float $value */
        $value = $this->_getField('amount', false);

        return $value;
    }
}
