@extends('layouts.main')

@section('content')
  <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $name }}</p>
    <p>Nim : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }}</p>
    <img src="images/{{ $image }}" width="200px" height="200px"/>
@endsection
    
