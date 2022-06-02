<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class MailResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['attachments'])) {
        $array = [];
        foreach($data['attachments'] as $item) {
            $array[] = MailAttachmentResponse::fromArray($item);
        }
        $data['attachments'] = $array;
        }

        return new self($data);
    }

    /**
     * @return string
     */
    function getUuid(): string
    {
        /** @var string $value */
        $value = $this->_getField('uuid', false);

        return $value;
    }

    /**
     * @return string
     */
    function getFrom(): string
    {
        /** @var string $value */
        $value = $this->_getField('from', false);

        return $value;
    }

    /**
     * @return string
     */
    function getTo(): string
    {
        /** @var string $value */
        $value = $this->_getField('to', false);

        return $value;
    }

    /**
     * @return string|null
     */
    function getCc(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('cc', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getBcc(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('bcc', true);

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
     * @return string
     */
    function getBody(): string
    {
        /** @var string $value */
        $value = $this->_getField('body', false);

        return $value;
    }

    /**
     * @return MailAttachmentResponse[]
     */
    function getAttachments(): array
    {
        /** @var MailAttachmentResponse[] $value */
        $value = $this->_getField('attachments', false);

        return $value;
    }

    /**
     * @return \DateTime|null
     */
    function getCreatedAt(): ?\DateTime
    {
        $value = $this->_getField('createdAt', true);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }
}
