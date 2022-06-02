<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class ApiUserResponse extends AbstractModel
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
    function getId(): string
    {
        /** @var string $value */
        $value = $this->_getField('id', false);

        return $value;
    }

    /**
     * @return string
     */
    function getGender(): string
    {
        /** @var string $value */
        $value = $this->_getField('gender', false);

        return $value;
    }

    /**
     * @return string
     */
    function getFirstname(): string
    {
        /** @var string $value */
        $value = $this->_getField('firstname', false);

        return $value;
    }

    /**
     * @return string
     */
    function getLastname(): string
    {
        /** @var string $value */
        $value = $this->_getField('lastname', false);

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
