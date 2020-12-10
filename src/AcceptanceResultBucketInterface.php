<?php

namespace Kiboko\Component\ETL\Contracts;

interface AcceptanceResultBucketInterface extends ResultBucketInterface
{
    /** @return iterable<array|object> */
    public function walkAcceptance(): iterable;
}
