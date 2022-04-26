<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Controllers\Penjualan;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    //

    public function index() {
        $penjualan = Penjualan::all();
        $data = ['penjualan' => $penjualan];

        return $data;

        // return Penjualan::all();
    }

    public function create(Request $request)
    {
        // code...
        $penjualan = new Penjualan();
        $penjualan -> nama_pelanggan = $request -> nama_pelanggan;
        $penjualan -> tanggal = $request -> tanggal;
        $penjualan -> total = $request -> total;
        $penjualan -> bayar_tunai = $request -> bayar_tunai;
        $penjualan -> kembali = $request -> kembali;
        $penjualan -> save();

        return "Penjualan Saved!";
    }

    public function update(Request $request, $id) {
        $penjualan = Penjualan::find($id);
        $penjualan -> nama_pelanggan = $request -> nama_pelanggan;
        $penjualan -> tanggal = $request -> tanggal;
        $penjualan -> total = $request -> total;
        $penjualan -> bayar_tunai = $request -> bayar_tunai;
        $penjualan -> kembali = $request -> kembali;
        $penjualan -> save();

        return "Penjualan Updated!";
    }

    public function detail($id) {
        $penjualan = Penjualan::find($id);

        return $penjualan;
    }



}
