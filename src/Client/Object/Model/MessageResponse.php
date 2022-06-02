<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class MessageResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['documents'])) {
        $array = [];
        foreach($data['documents'] as $item) {
            $array[] = DocumentResponse::fromArray($item);
        }
        $data['documents'] = $array;
        }

        return new self($data);
    }

    /**
     * @return string
     */
    function getPostedBy(): string
    {
        /** @var string $value */
        $value = $this->_getField('postedBy', false);

        return $value;
    }

    /**
     * @return \DateTime
     */
    function getTimePosted(): \DateTime
    {
        $value = $this->_getField('timePosted', false);
        if (null !== $value) {
            $value = new \DateTime($value);
        }

        return $value;
    }

    /**
     * @return DocumentResponse[]|null
     */
    function getDocuments(): ?array
    {
        /** @var DocumentResponse[]|null $value */
        $value = $this->_getField('documents', true);

        return $value;
    }

    /**
     * @return string|null
     */
    function getContent(): ?string
    {
        /** @var string|null $value */
        $value = $this->_getField('content', true);

        return $value;
    }
}
