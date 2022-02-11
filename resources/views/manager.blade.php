@extends('layout.add')
@section('content')


    <div class="container my-5">
    @if(Auth::user())
	   <h1 class="text-center">Selamat Datang, {{Auth::user()->name}}</h1>
	    <h2>Detail Gaji Level Manager</h2>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nama Pegawai</th>
		      <th scope="col">Jabatan</th>
		      <th scope="col">Gaji Pokok</th>
		      <th scope="col">Potongan 10%</th>
		      <th scope="col">Gaji Setelah Pph21</th>
		    </tr>
		  </thead>
		  <tbody>
		  @if($mng->count() > 0)
		    @foreach($mng as $m => $r)
		    <tr>
		      <th scope="row">{{$r->nama}}</th>
		      <th scope="row">{{$r->posisi}}</th>
		      <th scope="row">{{$r->gaji}}</th>
		      <th scope="row">{{$r->potongan}}</th>
		      <th scope="row">{{$r->pph21}}</th>
		      
		    </tr>
		    @endforeach
		   @else
		    <tr>
		      <td colspan="7"><center>Data Masih Kosong</center></td>
		    </tr>
		   @endif
		  </tbody>
		</table>
	 @else
	    <center><h2>Selamat Datang di Test PT Marsindo</h2></center>
	   <h1 class="text-center">Login Dulu</h1>
	@endif   
	</div>
@endsection

    




