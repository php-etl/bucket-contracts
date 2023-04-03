<?php

declare(strict_types=1);

namespace Kiboko\Contract\Bucket;

/**
 * @template Type
 *
 * @extends ResultBucketInterface<Type>
 */
interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<Type> */
    public function walkAcceptance(): iterable;
}
