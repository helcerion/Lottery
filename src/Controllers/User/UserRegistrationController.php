<?php

namespace Lottery\Controllers\User;

use Lottery\Application\User\UserRegistration;
use Lottery\Application\User\UserRequest;

class UserRegistrationController
{
    /** @var UserRegistration  */
    private $userRegistration;
    /** @var UserRequest  */
    private $request;
    /** @var  ViewFactory */
    private $view;

    public function __construct(UserRegistration $userRegistration, UserRequest $request, ViewFactory $view)
    {
        $this->userRegistration = $userRegistration;
        $this->request = $request;
        $this->view = $view;
    }

    public function index()
    {
        $registrationIsSuccess = $this->userRegistration->execute($this->request);

        return $this->view->render('userRegistration', $registrationIsSuccess);
    }
}
