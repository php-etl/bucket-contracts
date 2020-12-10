<?php

namespace Kiboko\Contract\ETL\Bucket;

interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkRejection(): iterable;
}
