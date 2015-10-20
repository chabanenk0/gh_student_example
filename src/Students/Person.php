<?php

namespace Students;

class Person extends AbstractPerson
{
    protected $firstName;

    protected $lastName;

    protected $birthday;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

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

}