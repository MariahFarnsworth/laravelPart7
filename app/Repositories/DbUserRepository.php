<?php

namespace App\Repositories;

class DbUserRepository implements userRepository{
    public function create($attributes){
        User::create();
        dd('creating the user');
    }
}