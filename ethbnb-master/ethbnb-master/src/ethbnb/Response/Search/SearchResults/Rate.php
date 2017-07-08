<?php

namespace ethbnb\Response\Search\SearchResults;

use JMS\Serializer\Annotation as JMS;

class Rate
{
    /**
     * @JMS\Type("integer")
     *
     * @var int $amount
     */
    private $amount;

    /**
     * @JMS\Type("string")
     *
     * @var string $currency
     */
    private $currency;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
