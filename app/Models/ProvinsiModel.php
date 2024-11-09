<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'provinsi';

    protected $primaryKey = 'provinsi_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;
    protected $allowedFields = ['nama_provinsi', 'code_provinsi'];
}
