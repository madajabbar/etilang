<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.beranda.index');
    }
    public function kegiatan()
    {
        return view('frontend.kegiatan.index');
    }
    public function berita()
    {
        return view('frontend.berita.index');
    }
    public function galeri()
    {
        return view('frontend.galeri.index');
    }
    public function struktur()
    {
        return view('frontend.profil.index');
    }
    public function hubungi()
    {
        return view('frontend.hubungi_kami.index');
    }
}
