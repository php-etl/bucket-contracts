<?php

namespace Kiboko\Contract\Bucket;

/**
 * @template Type
 * @extends ResultBucketInterface<Type>
 */
interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<Type> */
    public function walkRejection(): iterable;
}
