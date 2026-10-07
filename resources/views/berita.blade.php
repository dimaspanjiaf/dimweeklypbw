@extends('layouts.main')

@section('content')

 <h1>HALAMAN BERITA</h1>
 <h5>Berita Terbaru</h5>
 @foreach($beritas as $berita)
     <div>
         <h2><a href="berita/{{ $berita['slug'] }}">{{ $berita['judul'] }}</a></h2>
         <h5>Penulis: {{ $berita['penulis'] }}</h5>
         <p>{{ $berita['konten'] }}</p>
     </div>
 @endforeach
@endsection
    
