<?php

namespace Src\DataLayer\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct('users', ['first_name', 'last_name', 'email'], 'id', true);
    }

    public function address()
    {
        $params = http_build_query(['id' => $this->id]);
        return (new Address)->find('user_id=:id', $params)->fetch(false);
    }
}
