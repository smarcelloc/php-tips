<?php

use Src\DataLayer\Models\User;

$user = (new User())->findById(1);

echo '<pre> <h1>BEFORE</h1>';
print_r($user->data());
echo '</pre>';

$user->first_name = 'Fernando';
$successSave = $user->save();

echo '<br>';

if ($successSave) {
    echo 'User saved successfully';
    echo '<pre>';
    print_r($user->data());
    echo '</pre>';
} else {
    echo 'Error the user was not saved successfully';
}
