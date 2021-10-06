<?php

namespace App\Controllers;

use App\Models\TingkatModel;

class Tingkat extends BaseController
{


    protected $tingkatModel;

    public function __construct()
    {
        $this->tingkatModel = new TingkatModel();
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
