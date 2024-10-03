<?php

namespace App\Controllers;

class Nilai extends BaseController
{
    public function index()
    {
        
        return view('siswa/nilai');
    }

    public function kelolaNilaiGuru()
    {     
        $role_id = session()->get('role_id');

        if ($role_id != 2) {
            return redirect()->to('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
        }
        return view('guru/kelola_nilai'); 
    }
}
