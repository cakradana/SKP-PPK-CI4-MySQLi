<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $allowedFields = ['nip', 'nama_pegawai', 'id_jabatan'];

    protected $useTimestamps = true;
}
