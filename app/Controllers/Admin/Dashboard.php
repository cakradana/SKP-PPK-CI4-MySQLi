<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Dashboard'];
        return view('admin/dashboard', $data);
    }

    public function master_unit_kerja()
    {
        $data = ['title' => 'Master Unit Kerja'];
        return view('admin/master_unit_kerja/index', $data);
    }
}
