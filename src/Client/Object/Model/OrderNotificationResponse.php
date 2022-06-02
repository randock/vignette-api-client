<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderNotificationResponse extends AbstractModel
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
     * @return \DateTime
     */
    function getCreatedAt(): \DateTime
    {
        $value = $this->_getField('createdAt', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

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
