<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Input;

use Randock\Graphql\Generator\Base\AbstractInput;

class UserInput extends AbstractInput
{
    public function __construct(string $name, string $email)
    {
        $__data = [];
        $__data['name'] = $name;
        $__data['email'] = $email;

        parent::__construct($__data);
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
    function getEmail(): string
    {
        /** @var string $value */
        $value = $this->_getField('email', false);

        return $value;
    }
}
