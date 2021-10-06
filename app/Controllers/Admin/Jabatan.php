<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Jabatan extends BaseController
{


    protected $jabatanModel;

    public function __construct()
    {
        $this->jabatanModel = new JabatanModel();
    }

    public function index()
    {
        $jabatan = $this->jabatanModel->findAll();

        $data = [
            'title' => 'Master Jabatan',
            'jabatan' => $jabatan
        ];
        return view('admin/master_jabatan/index', $data);
    }
}
