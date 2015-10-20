<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 20.10.15
 * Time: 19:29
 */

namespace Students;


class Student extends Person
{
    protected $course;

    protected $university;

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param mixed $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function __toString()
    {
        $s = parent::__toString();
        $s .= 'Course: ' . $this->getCourse() . "<br>\n";
        $s .= 'University: ' . $this->getUniversity() . "<br>\n";

        return $s;
    }



}