<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        
        return view('siswa/dashboard'); 
    }
}
