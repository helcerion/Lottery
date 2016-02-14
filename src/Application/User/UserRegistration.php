<?php

namespace Lottery\Application\User;

use Lottery\Domain\User\UserEntity;
use Lottery\Domain\User\UserNameValue;
use Lottery\Infraestructure\User\UserRepository;

class UserRegistration
{
    /** @var UserRepository  */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserRequest $request
     * @return bool
     */
    public function execute(UserRequest $request)
    {
        $userName = new UserNameValue($request->name, $request->lastName, $request->nickName);
        $userId = $this->generateId($request->name, $request->lastName, $request->nickName);
        $password = $this->encodePassword($request->password);
        $user = new UserEntity();
        $user->setUserId($userId)
            ->setName($userName)
            ->setEmail($request->email)
            ->setPassword($password)
            ->setBirthday($request->birthday);

        return $this->userRepository->save($user);
    }

    /**
     * @param string $name
     * @param string $lastName
     * @param string $nickName
     * @return string
     */
    private function generateId($name, $lastName, $nickName)
    {
        return md5($name . $lastName . $nickName . date('YmdHis'));
    }

    /**
     * @param string $password
     * @return string
     */
    private function encodePassword($password)
    {
        return sha1(md5($password));
    }
}
