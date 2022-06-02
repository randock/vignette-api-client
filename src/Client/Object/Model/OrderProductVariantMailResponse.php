<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderProductVariantMailResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['parsed'] = isset($data['parsed']) ? MailResponse::fromArray($data['parsed']) : null;

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
    function getOriginalName(): string
    {
        /** @var string $value */
        $value = $this->_getField('originalName', false);

        return $value;
    }

    /**
     * @return string
     */
    function getHashedName(): string
    {
        /** @var string $value */
        $value = $this->_getField('hashedName', false);

        return $value;
    }

    /**
     * @return string
     */
    function getSubject(): string
    {
        /** @var string $value */
        $value = $this->_getField('subject', false);

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
     * @return \DateTime
     */
    function getDeletedAt(): \DateTime
    {
        $value = $this->_getField('deletedAt', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return MailResponse
     */
    function getParsed(): MailResponse
    {
        /** @var MailResponse $value */
        $value = $this->_getField('parsed', false);

        return $value;
    }
}
