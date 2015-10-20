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


    /**
     * @return  string
     */
    public function __toString()
    {
        $s = '';
        $s .= 'First Name: ' . $this->getFirstName() . "<br>\n";
        $s .= 'Last Name: ' . $this->getLastName() . "<br>\n";
        $s .= 'Birthday: ' . $this->getBirthday() . "<br>\n";

        return $s;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}