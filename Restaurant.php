<?php

class Restaurant
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName($name)
    {
        $this->name = $name;
        return $this;
    }

    protected $closed = false;

    /**
     * @return bool
     */
    public function isOpen()
    {
        return false === $this->closed;
    }

    /**
     * @param bool $closed
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
        return $this;
    }
}
