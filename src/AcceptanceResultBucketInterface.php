<?php

namespace Kiboko\Contract\ETL\Bucket;

interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkAcceptance(): iterable;
}
