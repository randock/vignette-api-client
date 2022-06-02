<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class LoginOrderInput extends AbstractInput
{
    public function __construct(string $id, string $licensePlateNumber)
    {
        $__data = [];
        $__data['id'] = $id;
        $__data['licensePlateNumber'] = $licensePlateNumber;

        parent::__construct($__data);
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
    function getLicensePlateNumber(): string
    {
        /** @var string $value */
        $value = $this->_getField('licensePlateNumber', false);

        return $value;
    }
}
