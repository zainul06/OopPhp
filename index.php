<?php

// Class => Schema / Template untuk membuat Object
class user
{
    // Property => variable di dalam Class
    public $username;

    // Method => Function di dalam class
    public function getUsername($username)
    {
        return $this->username = $username;
    }
}

// Object => Sebuah komponen yang terdiri dari Property dan method
$object = new User;
echo $object->getUsername("kharis subianto");