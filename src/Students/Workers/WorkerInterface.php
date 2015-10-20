<?php

namespace Students\Workers;

interface WorkerInterface
{
    public function getCompany()
    public function setCompany($company)
    public function getPosition()
    public function setPosition($position)
}