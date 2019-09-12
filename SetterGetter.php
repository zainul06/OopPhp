<?php

class User
{
    public $email;

    public function setEmail($email)
    {
        // Validasi
        if(!filter_var ($email,FILTER_VALIDATE_EMAIL))
        {
         
        return;
        }

    $this->email = $email;
    }


    public function getEmail()
    {
        return strtolower($this->email);
    }

}

$user = new User;
$user->setEmail("zainul.mutaqin@koding.sch.id");

echo $user->getEmail();