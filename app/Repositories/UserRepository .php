<?php

namespace App\Repositories;

use App\Contracts\RepositoryInterface;
use App\Models\User;

class UserRepository implements RepositoryInterface
{

    private $user;

    public function __construct(User $user) {
        $this->$user = $user;
    }

    public function all(){

    }

    public function find($id){

    }

    public function create(array $data){

    }

    public function update($id, array $data){

    }

    public function delete($id){
        
    }
}