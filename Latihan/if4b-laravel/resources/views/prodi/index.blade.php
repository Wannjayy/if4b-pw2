@extends('layout.master')
@section('title','Halaman Prodi')
@section('subtitle','Prodi')

@section('content')
<p>Ini Halaman Program Studi</p>
<table class="table table-hover">
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
        <td>{{$item->fakultas_id}}</td>
        <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection



{{-- <!-- {{$fikr}} --> --}}

