@extends('layout.add')
@section('content')
@if(Auth::user())
     <h1 class="text-center">Selamat Datang, {{Auth::user()->name}}</h1>
  <form action="{{route('update')}}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group">
        <label for="inputEmail">Nama Pegawai</label>
        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" />
    </div>
    <div class="form-group">
        <label for="inputEmail">Jabatan</label>
         <select name='posisi' class="form-control" required>
          <option value="">{{$data->posisi}}</option>
          <option value='manager'>Manager</option>
          <option value='supervisor'>Supervisor</option>
          <option value='staff'>Staff</option>
         </select>
    </div>
    <div class="form-group">
        <label for="inputName">Gaji Pokok</label>
        <input type="text" name="gaji" class="form-control" id="angka" value="{{$data->gaji}}"/>
    </div>
    <div class="form-group">
        <label for="inputName">Potongan</label>
        <input type="text" name="potongan" class="form-control" id="potongan" value="{{$data->potongan}}" required/>
    </div>
    <div class="form-group">
        <label for="inputName">PPH 21</label>
        <input type="text" name="pph21" class="form-control" id="pph" value="{{$data->pph21}}" required/>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  @else
    <center><h2>Selamat Datang di Test PT Marsindo</h2></center>
     <h1 class="text-center">Login Dulu</h1>
  @endif
@endsection