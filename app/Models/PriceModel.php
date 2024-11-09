<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceModel extends Model
{
    protected $table = 'prices';

    protected $primaryKey = 'price_id';
    protected $useAutoIncrement = true;

    protected $useSoftDeletes = false;
    protected $allowedFields = ['prov_1', 'prov_2', 'harga'];
}
