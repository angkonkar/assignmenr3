<?php

// var_dump($_SERVER['REQUEST_METHOD']);

namespace App\classes;

class Register
{
    public function __construct(
        private string $name,
        private string $email,
        private string $password,
        private string $confirm_password
    )
    {

    }

    public function register()
    {
        return $this->userRegister($this->name, $this->email, $this->password, $this->confirm_password);
    }

    private function userRegister($name, $email, $password, $confirm_password)
    {
        $user = array(
            'name'              => $name,
            'email'             => $email,
            'password'          => $password,
            'confirm_password'  => $confirm_password
        );

        var_dump(json_encode($user));
    }


}

// var_dump($_POST);

// foreach ($_POST as $form) {
//     echo $form . 
// }
