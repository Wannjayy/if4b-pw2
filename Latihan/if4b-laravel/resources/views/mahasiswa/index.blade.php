@extends('layout.main')
@section('title', 'Halaman Mahasiswa')
@section('subtitle', 'Mahasiswa')
@section('content')
    {{--<P>Ini Halaman Mahasiswa </P>     --}}
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <h4 class="card-title">Mahasiswa</h4>
        <a href="/mahasiswa/create" class="btn btn-primary">Tambah Mahasiswa</a>
        <div class="row">
          @foreach ($datamahasiswas as $item)
          <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$item->nama}}</h4>
                <p class="card-text">NPM: {{$item->npm}}</p>
                <p class="card-text">Tanggal Lahir: {{$item->tanggal_lahir}}</p>
                <p class="card-text">Kota Lahir: {{$item->kota_lahir}}</p>
                <img src="{{$item->foto}}" class="img-fluid">
                <p class="card-text">Program Studi: {{$item->prodi->nama_prodi}}</p>
                <p class="card-text">Created At: {{$item->created_at}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
          <!-- row end -->
@endsection
