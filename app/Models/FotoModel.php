<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'fotos';
    protected $primaryKey = 'foto_id';
    protected $allowedFields = ['nama_file', 'judul', 'user_id', 'created_at', 'updated_at'];
}
