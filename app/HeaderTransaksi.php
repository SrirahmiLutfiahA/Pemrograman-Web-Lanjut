<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\DetailTransaksi;

class HeaderTransaksi extends Model
{
    protected $table = 'header_transaksi';
    protected $primaryKey = 'id_header_transaksi';

    protected $fillable = [
        'tanggal_transaksi'
    ];

    static function tambah_header_transaksi(){
        $data = HeaderTransaksi::create([
            'tanggal_transaksi' => date('Y-m-d'),
        ]);
            return $data->id_header_transaksi;
    }
}
