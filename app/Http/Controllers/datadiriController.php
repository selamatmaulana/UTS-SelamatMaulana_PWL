<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\style;

class datadiriController extends Controller
{
    //
    public function index()
    {
        $name = "Nama :";
        $alamat = "Alamat :";
        $TTL = "Ttl:";
        $channelName = "Selamat maulana";
        $channelDescriptions = "channel belajar";
        $datadiri = array(
            'Pengenalan dan instalasi composer',
            'pengenalan dan instalasi laravel',
            'pengenalan dan memahami konsep instalasi',
        );
        return view('datadiri', compact('name', 'alamat', 'TTL', 'channelName', 'channelDescriptions', 'datadiri'));
    }
}
