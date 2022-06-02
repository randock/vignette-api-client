<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class OrderCommentResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['orderProductVariant'] = isset($data['orderProductVariant']) ? OrderProductVariantResponse::fromArray($data['orderProductVariant']) : null;

        if(isset($data['processLogPool'])) {
        $array = [];
        foreach($data['processLogPool'] as $item) {
            $array[] = ProcessLogPoolMessageResponse::fromArray($item);
        }
        $data['processLogPool'] = $array;
        }
        $data['user'] = isset($data['user']) ? ApiUserResponse::fromArray($data['user']) : null;

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
    function getBody(): string
    {
        /** @var string $value */
        $value = $this->_getField('body', false);

        return $value;
    }

    /**
     * @return OrderProductVariantResponse|null
     */
    function getOrderProductVariant(): ?OrderProductVariantResponse
    {
        /** @var OrderProductVariantResponse|null $value */
        $value = $this->_getField('orderProductVariant', true);

        return $value;
    }

    /**
     * @return ProcessLogPoolMessageResponse[]|null
     */
    function getProcessLogPool(): ?array
    {
        /** @var ProcessLogPoolMessageResponse[]|null $value */
        $value = $this->_getField('processLogPool', true);

        return $value;
    }

    /**
     * @return ApiUserResponse
     */
    function getUser(): ApiUserResponse
    {
        /** @var ApiUserResponse $value */
        $value = $this->_getField('user', false);

        return $value;
    }
}
