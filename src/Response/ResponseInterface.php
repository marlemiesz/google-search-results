<?php

namespace Marlemiesz\GoogleSearchResult\Response;

use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

interface ResponseInterface
{
    /**
     * @return int
     */
    public function getRank(): ?int;

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string;

    /**
     * @param int $rank
     * @param string|null $message
     */
    public function setRank(?int $rank, ?string $message = null): void;
}
