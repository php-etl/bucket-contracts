<?php

declare(strict_types=1);

namespace Kiboko\Contract\Bucket;

/**
 * @template Type of non-empty-array<array-key, mixed>|object
 *
 * @extends ResultBucketInterface<Type>
 */
interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return list<string>|null */
    public function reasons(): ?array;

    /** @return list<\Throwable>|null */
    public function exceptions(): ?array;

    /** @return iterable<Type> */
    public function walkRejection(): iterable;
}
