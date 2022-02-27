<?php

namespace Src\DataLayer\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct('address', ['street', 'user_id'], 'id', false);
    }

    public function add(User $user, string $street): Address
    {
        $this->user_id = $user->id;
        $this->street = $street;

        return $this;
    }
}
