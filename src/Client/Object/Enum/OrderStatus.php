<?php

declare(strict_types=1);

namespace Randock\Vignette\Api\Client\Object\Enum;

use Randock\Graphql\Generator\Base\AbstractEnum;

class OrderStatus extends AbstractEnum
{
    public const DRAFT = 'draft';
    public const PAID = 'paid';
    public const PROCESSING = 'processing';
    public const PENDING = 'pending';
    public const ERROR = 'error';
    public const COMPLETED = 'completed';
    public const SENT_ISSUE_TO_CUSTOMER = 'sent_issue_to_customer';
    public const CANCELLED = 'cancelled';
    public const REFUNDED = 'refunded';
    public const PARTIALLY_PROCESSED = 'partially_processed';
}
