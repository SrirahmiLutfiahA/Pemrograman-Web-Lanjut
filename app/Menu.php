<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetailTransaksi;
use App\HeaderTransaksi;

class Menu extends Model
{
    protected $table='menu';
    protected $guarded=[];

    protected $primaryKey = 'id';
    protected $fillable = [
        'image','name','description','price',
    ];

    static function list_menu(){
        $data_menu = Menu::all();
        return $data_menu;
    }

    static function tambah_menu($name, $price){
        Menu::create([
            'image' =>$image,
            'name' => $name,
            'description' => $description,
            'price' => $price,
        ]);
    }

    static function detail_menu($id){
        $data_menu = Menu::where('id', $id)->first();

        return $data_menu;
    }

}