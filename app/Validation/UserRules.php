<?php

namespace App\Validation;

use App\Models\Accountmodel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new Accountmodel();
        $user = $model->where('email', $data['email'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password_hash']);
        //return true;
    }
}
