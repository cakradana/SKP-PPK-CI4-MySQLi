<?php

namespace App\Controllers;

use App\Models\TingkatModel;

class Admin extends BaseController
{


    protected $tingkatModel;

    public function __construct()
    {
        $this->tingkatModel = new TingkatModel();
    }





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

    public function master_tingkat()
    {
        $tingkat = $this->tingkatModel->findAll();

        $data = [
            'title' => 'Master Tingkat',
            'tingkat' => $tingkat
        ];
        return view('admin/master_tingkat/index', $data);
    }
}
