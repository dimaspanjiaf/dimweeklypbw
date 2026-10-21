<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public static function tampildata()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => \App\Berita::all()
    ]);
    }

    public static function tampilberitatunggal($slug)
    {
       $berita = \App\Berita::all();
         $singlenews = [];
        foreach ($berita as $berita) {
            if ($berita['slug'] === $slug) {
                $singlenews = $berita;
                break;
            }
        };
        return view('beritatunggal', [
            'title' => $singlenews['judul'],
            "singlenews" => $singlenews,
        ]);

    }
}

?>
