<?php

namespace Kiboko\Contract\Bucket;

interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkAcceptance(): iterable;
}
