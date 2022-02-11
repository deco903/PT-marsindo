@extends('layout.add')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  input Data
</button>

@include('layout.modal')

<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama Pegawai</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Gaji Pokok</th>
      <th scope="col">Potongan 10%</th>
      <th scope="col">Gaji Setelah Pph21</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @if($datas->count() > 0)
    @foreach($datas as $data)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <th scope="row">{{$data->nama}}</th>
      <th scope="row">{{$data->posisi}}</th>
      <th scope="row">{{$data->gaji}}</th>
      <th scope="row">{{$data->potongan}}</th>
      <th scope="row">{{$data->pph21}}</th>
      <th scope="row">
        <a href="/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
        <a href="/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
      </th>
    </tr>
    @endforeach
   @else
    <tr>
      <td colspan="7"><center>Data Masih Kosong</center></td>
    </tr>
   @endif
  </tbody>
</table>
@endsection