<?php

namespace App\Models;

use CodeIgniter\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';

    protected $primaryKey = 'kecamatan_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;
    protected $allowedFields = ['kota_id', 'nama_kecamatan'];
}
