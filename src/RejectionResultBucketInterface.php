<?php

namespace Kiboko\Contract\Bucket;

interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkRejection(): iterable;
}
