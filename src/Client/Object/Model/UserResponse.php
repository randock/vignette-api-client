<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class UserResponse extends AbstractModel
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
    function getEmail(): string
    {
        /** @var string $value */
        $value = $this->_getField('email', false);

        return $value;
    }
}
