<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class Jabatan extends BaseController
{


    protected $jabatanModel;

    public function __construct()
    {
        $this->jabatanModel = new JabatanModel();
    }

    public function master_jabatan()
    {
        $jabatan = $this->jabatanModel->findAll();

        $data = [
            'title' => 'Master Jabatan',
            'jabatan' => $jabatan
        ];
        return view('admin/master_jabatan/index', $data);
    }
}
