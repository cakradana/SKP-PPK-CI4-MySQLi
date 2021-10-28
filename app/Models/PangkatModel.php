<?php

namespace App\Models;

use CodeIgniter\Model;

class PangkatModel extends Model
{
    protected $table = 'pangkat';
    protected $primaryKey = 'id_pangkat';
    protected $allowedFields = ['nama_pangkat', 'golongan'];

    protected $useTimestamps = true;
}
