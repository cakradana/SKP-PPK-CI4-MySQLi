<?php

namespace App\Controllers;

use App\Models\PangkatModel;

class Pangkat extends BaseController
{


    protected $pangkatModel;

    public function __construct()
    {
        $this->pangkatModel = new PangkatModel();
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
}
