<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class ProductVariantDataInput extends AbstractInput
{
    public function __construct(?\DateTime $start)
    {
        $__data = [];
        $__data['start'] = $start;

        parent::__construct($__data);
    }

    /**
     * @return \DateTime|null
     */
    function getStart(): ?\DateTime
    {
        $value = $this->_getField('start', true);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }
}
