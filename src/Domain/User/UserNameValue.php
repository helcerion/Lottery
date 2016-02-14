<?php

namespace Lottery\Domain\User;

class UserNameValue
{
    /** @var  string */
    private $name;
    /** @var  string */
    private $lastName;
    /** @var  string */
    private $nickName;

    public function __construct($name, $lastName, $nickName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->nickName = $nickName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }
}