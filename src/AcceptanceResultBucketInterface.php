<?php

declare(strict_types=1);

namespace Kiboko\Contract\Bucket;

/**
 * @template Type of non-empty-array<array-key, mixed>|object
 *
 * @extends ResultBucketInterface<Type>
 */
interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<Type> */
    public function walkAcceptance(): iterable;
}
