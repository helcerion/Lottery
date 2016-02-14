<?php

namespace Lottery\Infraestructure\User;

use Lottery\Domain\User\UserEntity;

interface UserRepository
{
    public function save(UserEntity $userEntity);
}