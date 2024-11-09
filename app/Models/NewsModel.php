<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'news_id';
    protected $allowedFields = ['judul', 'gambar', 'deskripsi', 'user_id', 'created_at', 'updated_at'];
}
