<?php

require "Models/User.php";

class Siswa extends User
{
    //
}
$siswa = new Siswa;
echo $siswa->getUsername("Fuji");