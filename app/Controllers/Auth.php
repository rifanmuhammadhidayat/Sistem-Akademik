<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class Auth extends Controller {
    protected $userModel;
    protected $roleModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();
        helper(['form', 'url']);
    }

    public function login() {
        return view('auth/login');
    }

    public function login_action()
{
    // Validasi input
    if (!$this->validate([
        'username' => 'required',
        'password' => 'required'
    ])) {
        return redirect()->back()->with('error', 'Username dan Password wajib diisi!');
    }

    $username = $this->request->getPost('username'); 
    $password = $this->request->getPost('password');

    $user = $this->userModel->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        
        session()->set([
            'id' => $user['id'],
            'username' => $user['username'],
            'role_id' => $user['role_id'],
            'isLoggedIn' => true,
        ]);
        return redirect()->to('/dashboard'); 
    } else {
        return redirect()->back()->with('error', 'Username atau Password salah!');
    }
}


    public function registration() {
        $data['roles'] = $this->roleModel->findAll();
        return view('auth/registration', $data);
    }

    public function registration_action()
{
    $username = $this->request->getPost('username');
    $email = $this->request->getPost('email');
    $role_id = $this->request->getPost('role_id');
    $password1 = $this->request->getPost('password1');
    $password2 = $this->request->getPost('password2');

    // Validasi password
    if ($password1 !== $password2) {
        return redirect()->back()->with('error', 'Password tidak cocok');
    }

    // Insert ke database
    $data = [
        'username' => $username,
        'password' => password_hash($password1, PASSWORD_DEFAULT),
        'email' => $email,
        'role_id' => $role_id
    ];
    $this->userModel->insert($data);
    return redirect()->to('/auth/login')->with('success', 'Registrasi berhasil, silakan login.');
}


    public function logout() {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}

