<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class ProductVariantDeliveryMethod extends AbstractEnum
{
    public const DIGITAL = 'digital';
    public const PACKAGE = 'package';
    public const POST = 'post';
}
