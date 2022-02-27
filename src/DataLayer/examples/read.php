<?php

use Src\DataLayer\Models\User;

$user = new User();
$users = $user->find()->fetch(true);

// Exemple 01: Read
if ($users) {
    /**
     * @var User $userItem
     */
    foreach ($users as $userItem) {
        // echo '<pre>';
        // User data all
        // print_r($userItem->data());
        // echo '</pre>';

        echo '<pre>';
        print_r("first name: " . $userItem->first_name);
        print_r("\nlast name: " . $userItem->last_name);
        print_r("\ngenro: " . $userItem->genro);
        print_r("\naddress: " . $userItem->address()->street);
        echo '</pre>';
    }
} else {
    echo "User not found";
}
