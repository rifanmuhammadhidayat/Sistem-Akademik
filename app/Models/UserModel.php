<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'email', 'role_id', 'created_at'];
    protected $returnType = 'array';

    public function getUserByUsername($username) {
        return $this->where('username', $username)->first();
    }
}
