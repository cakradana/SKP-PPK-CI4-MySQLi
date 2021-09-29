<?php

namespace App\Controllers;

use App\Models\JabatanModel;
use App\Models\PangkatModel;
use App\Models\TingkatModel;

class Admin extends BaseController
{


    protected $jabatanModel;
    protected $pangkatModel;
    protected $tingkatModel;

    public function __construct()
    {
        $this->jabatanModel = new JabatanModel();
        $this->pangkatModel = new PangkatModel();
        $this->tingkatModel = new TingkatModel();
    }





    public function index()
    {
        $data = ['title' => 'Dashboard'];
        return view('admin/dashboard', $data);
    }

    public function master_pangkat()
    {
        $pangkat = $this->pangkatModel->findAll();

        $data = [
            'title' => 'Master Pangkat',
            'pangkat' => $pangkat
        ];
        return view('admin/master_pangkat/index', $data);
    }

    public function master_unit_kerja()
    {
        $data = ['title' => 'Master Unit Kerja'];
        return view('admin/master_unit_kerja/index', $data);
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
