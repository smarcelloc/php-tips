<?php

use Src\DataLayer\Models\User;

$user = (new User())->findById(7);

if ($user) {
    $user->destroy();
    echo 'Delete user successfully';
} else {
    echo 'Not found user';
}
