<?php

namespace Kiboko\Contracts\ETL\Bucket;

interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkRejection(): iterable;
}
