<?php

namespace App;
use App\Menu;
use App\HeaderTransaksi;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $tabel = 'detail_transaksi';
    protected $primaryKey = 'id_header_transaksi';

    protected $fillable = [
        'id_header_transaksi','id','jumlah'
    ];

    static function tambah_detail_transaksi($id, $id_header_transaksi, $jumlah){
        DetailTransaksi::create([
            'id' => $id,
            'id_header_transaksi' => $id_header_transaksi,
            'jumlah' => $jumlah,
            
        ]);
    }
}
