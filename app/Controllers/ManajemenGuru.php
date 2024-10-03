<?php

namespace App\Controllers;

class ManajemenGuru extends BaseController
{
    public function index()
    {
        
        return view('admin/kelola_guru');
    }

    public function kelolaGuru()
    {     
        $role_id = session()->get('role_id');

        if ($role_id != 1) {
            return redirect()->to('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
        }
        return view('admin/kelola_guru'); 
    }
}
