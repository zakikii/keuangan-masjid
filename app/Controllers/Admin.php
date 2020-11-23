<?php

namespace App\Controllers;

use App\Models\InventarisModel;
use App\Models\PemasukanModel;
use App\Models\RekapitulasiModel;

class Admin extends BaseController
{
    protected $inventarisModel;
    protected $rekapitulasiModel;

    public function __construct()
    {
        $this->inventarisModel = new InventarisModel();
        $this->rekapitulasiModel = new RekapitulasiModel();
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function inventaris()
    {
        $inventaris = $this->inventarisModel->findAll();
        $data = [
            'title' => 'Masjid Baiturridwan | inventaris',
            'inventaris' => $inventaris
        ];


        return view('admin/inventaris', $data);
    }

    public function pemasukan()
    {
        $pemasukan = $this->rekapitulasiModel->where(['jenis_transaksi' => 'pemasukan'])->findAll();
        $data = [
            'title' => 'Masjid Baiturridwan | pemasukan',
            'pemasukan' => $pemasukan
        ];


        return view('admin/pemasukan', $data);
    }

    public function pengeluaran()
    {
        $pengeluaran = $this->rekapitulasiModel->where(['jenis_transaksi' => 'pengeluaran'])->findAll();
        $data = [
            'title' => 'Masjid Baiturridwan | pemasukan',
            'pengeluaran' => $pengeluaran
        ];


        return view('admin/pengeluaran', $data);
    }


    //--------------------------------------------------------------------

}
