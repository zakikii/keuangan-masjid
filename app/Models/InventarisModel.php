<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarisModel extends Model
{
    protected $table = 'inventaris';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_barang';
}
