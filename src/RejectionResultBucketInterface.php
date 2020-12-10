<?php

namespace Kiboko\Component\ETL\Contracts;

interface RejectionResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkRejection(): iterable;
}
