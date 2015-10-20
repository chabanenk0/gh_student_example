<?php

namespace Students;

abstract class AbstractPerson
{

    public abstract function getFirstName();
    public abstract function setFirstName($firstName);
    public abstract function getLastName();
    public abstract function setLastName($lastName);
    public abstract function getBirthday();
    public abstract function setBirthday($birthday);

    public function __set($property, $value)
    {
        $this->$property = $value;
    }


}