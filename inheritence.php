<?php
class Models
{
    protected $datas = ["adiadi", "kharis"];
    private $password = "rahasia pokoe";

    public function getPasword()
    {
        return $this->password;
    }
}
class User extends Models
{
    public function getUser()
    {
        return $this->datas;
    }
}

$user = new User;
// echo $models->getUser()

$models = new Models;
// echo $models->getDatas();
echo $models->getPassword();