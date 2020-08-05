<?php


namespace Marlemiesz\GoogleSearchResult\Response;


use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

class Response implements ResponseInterface
{

    private ?int $rank;
    private ?string $error_message;


    /**
     * Response constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->error_message;
    }

    /**
     * @return int
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }


    public function setRank(?int $rank, ?string $message = null): void
    {
        if($this->isRankCorrect($rank) && $message === null){
            $this->rank = $rank;
        }
        else {
            $this->rank = null;
            $this->error_message = $message ?? 'Unable to get rank. Unknown Reason.';
        }
    }

    private function isRankCorrect(?int $rank):bool
    {
        return
            $rank !== null &&
            $rank <= 100
            ;
    }
}
