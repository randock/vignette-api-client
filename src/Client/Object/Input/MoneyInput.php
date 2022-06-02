<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class MoneyInput extends AbstractInput
{
    public function __construct(string $currencyCode, float $amount)
    {
        $__data = [];
        $__data['currencyCode'] = $currencyCode;
        $__data['amount'] = $amount;

        parent::__construct($__data);
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
