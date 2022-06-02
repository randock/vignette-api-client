<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class Subscription extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        $data['orderLiveUpdate'] = isset($data['orderLiveUpdate']) ? OrderLiveUpdate::fromArray($data['orderLiveUpdate']) : null;
        $data['commentAdded'] = isset($data['commentAdded']) ? OrderCommentResponse::fromArray($data['commentAdded']) : null;

        return new self($data);
    }

    /**
     * @return OrderLiveUpdate
     */
    function getOrderLiveUpdate(): OrderLiveUpdate
    {
        /** @var OrderLiveUpdate $value */
        $value = $this->_getField('orderLiveUpdate', false);

        return $value;
    }

    /**
     * @return OrderCommentResponse
     */
    function getCommentAdded(): OrderCommentResponse
    {
        /** @var OrderCommentResponse $value */
        $value = $this->_getField('commentAdded', false);

        return $value;
    }
}
