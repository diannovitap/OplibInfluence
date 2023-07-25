<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullSiteController extends Controller
{
    public function katalog(){
        return view('fullsite.katalog');
    }

    public function katalogDetail(){
        return view('fullsite.katalog-detail');
    }

    public function katalogDetailDownload(){
        return view('fullsite.katalog-detail-download');
    }

    public function keanggotaan(){
        return view('fullsite.keanggotaan');
    }

    public function dokumen(){
        return view('fullsite.dokumen');
    }

    public function laporan(){
        return view('fullsite.laporan');
    }

    public function informasi(){
        return view('fullsite.informasi');
    }

    public function tahunterbit(){
        return view('fullsite.tahunterbit');
    }
}
