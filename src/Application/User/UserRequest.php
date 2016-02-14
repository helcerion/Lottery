<?php

namespace Lottery\Application\User;

class UserRequest
{
    /** @var  string */
    public $name;
    /** @var  string */
    public $lastName;
    /** @var  string */
    public $nickName;
    /** @var  \DateTime */
    public $birthday;
    /** @var  string */
    public $email;
    /** @var  string */
    public $password;
}
