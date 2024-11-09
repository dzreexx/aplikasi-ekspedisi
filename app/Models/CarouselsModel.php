<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselsModel extends Model
{
    protected $table = 'carousels';
    protected $primaryKey = 'carousels_id';
    protected $allowedFields = ['nama_file', 'judul', 'deskripsi', 'user_id'];
}
