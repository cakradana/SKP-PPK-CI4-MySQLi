<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{


    protected $pegawaiModel;

    public function __construct()
    {
        $this->pegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $pegawai = $this->pegawaiModel->findAll();

        $data = [
            'title' => 'Master Pegawai',
            'pegawai' => $pegawai
        ];
        return view('admin/master_pegawai/index', $data);
    }

    public function save()
    {
        $this->pegawaiModel->save([
            'nip' => $this->request->getVar('nip'),
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'id_jabatan' => $this->request->getVar('id_jabatan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('admin/pegawai');
    }
}
