<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class TollTrajectInput extends AbstractInput
{
    public function __construct(string $traject, string $type)
    {
        $__data = [];
        $__data['traject'] = $traject;
        $__data['type'] = $type;

        parent::__construct($__data);
    }

    /**
     * @return string
     */
    function getTraject(): string
    {
        /** @var string $value */
        $value = $this->_getField('traject', false);

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
