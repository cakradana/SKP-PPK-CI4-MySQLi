<?php

namespace App\Models;

use CodeIgniter\Model;

class TingkatModel extends Model
{
    protected $table = 'tingkat';
    protected $primaryKey = 'id_tingkat';
    protected $allowedFields = ['nama_tingkat', 'level'];

    protected $useTimestamps = true;
}
