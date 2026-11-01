<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public static function tampildata()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all()
    ]);
    }

    public static function tampilberitatunggal($slug)
    {
       $beritas = Berita::all();
         $singlenews = [];
        foreach ($beritas as $Berita) {
            if ($Berita['slug'] === $slug) {
                $singlenews = $Berita;
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
