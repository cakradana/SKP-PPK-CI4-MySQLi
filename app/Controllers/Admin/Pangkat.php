<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PangkatModel;

class Pangkat extends BaseController
{


    protected $pangkatModel;

    public function __construct()
    {
        $this->pangkatModel = new PangkatModel();
    }

    public function index()
    {
        $pangkat = $this->pangkatModel->findAll();

        $data = [
            'title' => 'Master Pangkat',
            'pangkat' => $pangkat
        ];
        return view('admin/master_pangkat/index', $data);
    }

    public function save()
    {
        $this->pangkatModel->save([
            'nama_pangkat' => $this->request->getVar('nama_pangkat'),
            'golongan' => $this->request->getVar('golongan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('admin/pangkat');
    }
}
