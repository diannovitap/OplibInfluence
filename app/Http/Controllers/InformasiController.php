<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function layanan(){
        return view('fullsite.informasi.layanandokumen');
    }
    
    public function assistive(){
        return view('fullsite.informasi.assistive');
    }

    public function electronicbook(){
        return view('fullsite.informasi.electronicbook');
    }

    public function telkatika(){
        return view('fullsite.informasi.telkatika');
    }

    public function peminjamanbuku(){
        return view('fullsite.informasi.peminjamanbuku');
    }

    public function openlibrary(){
        return view('fullsite.informasi.openlibrary');
    }

    public function sbkp(){
        return view('fullsite.informasi.sbkp');
    }

    public function similarity(){
        return view('fullsite.informasi.similarity');
    }

    public function standar(){
        return view('fullsite.informasi.standar');
    }

    public function scopus(){
        return view('fullsite.informasi.scopus');
    }
}
