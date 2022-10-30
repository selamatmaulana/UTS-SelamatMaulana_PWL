<?php

namespace App\Http\Controllers;

use App\Models\handphone as ModelsHandphone;
use Illuminate\Http\Request;

class handphone extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => ModelsHandphone::all()
        ];
        return view('uts.index', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = ModelsHandphone::Find($id);
        return view('uts.detail', compact('reviewBarang'));
    }
}
