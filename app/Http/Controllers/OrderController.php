<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderTransaksi;
use App\DetailTransaksi;
use App\Order;
use App\Menu;

class OrderController extends Controller
{
    
    public function index(){
        $menu = Menu::list_menu();
        return view('menu')->with('menu', $menu);

    }

    public function tambah_cart($id){
        $cart = session('cart');
        $menu = Menu::detail_menu($id);

        $cart[$id] = [
            'name' => $menu->name,
            'price' => $menu->price,
            'jumlah' => 1
        ];
        
        session(['cart' => $cart]);
        return redirect()->route('cart','orderan');
    }

    public function cart(){
        $cart = session('cart');
        return view('cart')->with('cart',$cart);
    }

    public function orderan(){
        DetailTransaksi::create([
            'id' => $id,
            'id_header_transaksi' => $id_header_transaksi,
            'jumlah' => $jumlah,
            
        ]);
        return view ('orderan');
    }
    
    
    public function hapus_cart($id){
        $cart = session('cart');
        unset($cart[$id]);
        session(['cart' => $cart]);

        return redirect('cart');
    }

    public function klikpesan(){
        session()->forget('cart');
        return view('tunggu');       
    }
}