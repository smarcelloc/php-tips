<?php

use Src\DataLayer\Models\Address;
use Src\DataLayer\Models\User;

$user = new User();
$user->first_name = 'Pedro';
$user->last_name = 'Viela';
$user->email = 'pedro@mail.com';
$user->genro = 'm';

$successSave = $user->save();

$address = new Address();
$address->add($user, 'Street Franca, 12')->save();

if ($successSave) {
    echo 'User saved successfully';
} else {
    echo 'Error the user was not saved successfully';
    echo $user->fail();
}
