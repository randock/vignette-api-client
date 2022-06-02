<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Model;

use Randock\Graphql\Generator\Base\AbstractModel;

class RouteResponse extends AbstractModel
{
    /**
     * @param array|null $data
     *
     * @return self
     */
    public static function fromArray(?array $data): self
    {
        if(isset($data['routeProductVariants'])) {
        $array = [];
        foreach($data['routeProductVariants'] as $item) {
            $array[] = RouteProductVariantResponse::fromArray($item);
        }
        $data['routeProductVariants'] = $array;
        }

        return new self($data);
    }

    /**
     * @return RouteProductVariantResponse[]
     */
    function getRouteProductVariants(): array
    {
        /** @var RouteProductVariantResponse[] $value */
        $value = $this->_getField('routeProductVariants', false);

        return $value;
    }
}
