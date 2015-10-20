<?php

namespace Workers;

use Students\Person;

class Worker extends Person //implements WorkerInterface
{
    protected $company;

    protected $position;

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function __toString()
    {
        $s = parent::__toString();
        $s .= 'Company: ' . $this->getCompany() . "<br>\n";
        $s .= 'Position: ' . $this->getPosition() . "<br>\n";

        return $s;
    }
}