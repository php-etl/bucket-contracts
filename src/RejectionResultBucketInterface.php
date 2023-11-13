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
    public function reason(): ?string;

    public function exception(): ?\Throwable;

    /** @return iterable<Type> */
    public function walkRejection(): iterable;
}
