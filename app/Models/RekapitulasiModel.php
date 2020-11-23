<?php

namespace App\Models;

use CodeIgniter\Model;

class RekapitulasiModel extends Model
{
    protected $table = 'rekapitulasi';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_transaksi';
}
