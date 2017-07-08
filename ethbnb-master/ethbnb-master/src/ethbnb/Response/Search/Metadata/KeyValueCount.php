<?php

namespace ethbnb\Response\Search\Metadata;

use JMS\Serializer\Annotation as JMS;

class KeyValueCount
{
    /**
     * @JMS\Type("string")
     *
     * @var mixed $key
     */
    private $key;

    /**
     * @JMS\Type("string")
     *
     * @var mixed $value
     */
    private $value;

    /**
     * @JMS\Type("integer")
     *
     * @var int $count
     */
    private $count;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
}
