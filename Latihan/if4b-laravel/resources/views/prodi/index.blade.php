@extends('layout.main')
@section('title','Halaman Prodi')
@section('subtitle','Prodi')

@section('content')
<p>Ini Halaman Program Studi</p>
<div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program Studi</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
        <tr>
            <th>Nama Prodi</th>
            <th>Nama Fakultas</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($dataprodis as $item)
    <tr>
        <td>{{$item->nama_prodi}}</td>
        <td>{{$item->fakultas->nama_fakultas}}</td>
        <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection



{{-- <!-- {{$fikr}} --> --}}

