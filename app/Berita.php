<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static  $data_berita = 
    [
        [
            "judul" => "Indonesia Menang",
            "slug" => "indonesia-menang",
            "penulis" => "Dimas Panji",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iste quisquam placeat tempora magnam explicabo amet hic eveniet atque eos distinctio possimus omnis ipsam ad neque doloribus, iure eius nostrum officia. Magni velit laudantium, numquam mollitia ea perferendis quisquam doloribus."
        ],
        [
            "judul" => "Cara Turun Berat Badan Instant",
            "slug" => "cara-turun-berat-badan-instant",
            "penulis" => "Khiara Putri",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iste quisquam placeat tempora magnam explicabo amet hic eveniet atque eos distinctio possimus omnis ipsam ad neque doloribus, iure eius nostrum officia. Magni velit laudantium, numquam mollitia ea perferendis quisquam doloribus."
        ],
        [
            "judul" => "Merakit Robot",
            "slug" => "merakit-robot",
            "penulis" => "Keyjiro",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iste quisquam placeat tempora magnam explicabo amet hic eveniet atque eos distinctio possimus omnis ipsam ad neque doloribus, iure eius nostrum officia. Magni velit laudantium, numquam mollitia ea perferendis quisquam doloribus."
        ],
    ];

    $singlenews = [];
    foreach ($data_berita as $berita) {
        if ($berita['slug'] === $slug) {
            $singlenews = $berita;
            break;
        }
    }   

}
