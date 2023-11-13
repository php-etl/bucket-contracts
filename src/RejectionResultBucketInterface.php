<?php

declare(strict_types=1);

namespace Kiboko\Contract\Bucket;

/**
 * @template Type
 *
 * @extends ResultBucketInterface<Type>
 */
interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return list<string>|null */
    public function reasons(): ?array;

    /** @return list<\Throwable>|null */
    public function exceptions(): ?iterable;

    /** @return iterable<Type> */
    public function walkRejection(): iterable;
}
