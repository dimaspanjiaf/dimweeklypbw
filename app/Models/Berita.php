<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'slug', 'penulis', 'konten'];

//    public static function ambildata()
//    {
//         return self::$data_berita;
//    }

//    public static function getBerita($slug)ww
//    {
//         $beritas = self::$data_berita;
//         $singlenews = [];
//         foreach ($beritas as $berita) {
//             if ($berita['slug'] === $slug) {
//                 $singlenews = $berita;
//                 break;
//             }
//         };
//         return $singlenews;
//    }

//     public static function getJudul($slug)
//     {
//           $berita = self::getBerita($slug);
        
//           return $berita['judul'];
//     }
}
