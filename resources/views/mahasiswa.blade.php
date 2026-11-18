@extends('layouts.backend')

@section('content')
<div class="container mt-4">
<h1>Data Mahasiswa</h1> 

<button type="button" class="btn btn-success">Tambah Mahasiswa</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php $no = 1 ?>
    @foreach ($datas as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->nim }}</td>
      <td>{{ $data->prodi }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->nohp }}</td>    
      <td>{{ $data->foto }}</td>
      <td>
        <button  class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php  $no++  ?>
     @endforeach
     
  </tbody>
</table>

</div>
@endsection