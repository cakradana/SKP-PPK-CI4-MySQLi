<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TingkatModel;

class Tingkat extends BaseController
{


    protected $tingkatModel;

    public function __construct()
    {
        $this->tingkatModel = new TingkatModel();
    }

    public function index()
    {
        $tingkat = $this->tingkatModel->findAll();

        $data = [
            'title' => 'Master Tingkat',
            'tingkat' => $tingkat
        ];
        return view('admin/master_tingkat/index', $data);
    }

    public function save()
    {
        $this->tingkatModel->save([
            'nama_tingkat' => $this->request->getVar('nama_tingkat'),
            'level' => $this->request->getVar('level')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('admin/tingkat');
    }
}
