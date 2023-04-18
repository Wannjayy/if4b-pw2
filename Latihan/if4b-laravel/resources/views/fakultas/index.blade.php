@extends('layout.master')
@section('title','Halaman Fakultas')
@section('subtitle','Fakultas')
@section('content')
{{--
<P>Ini Halaman Fakultas </P>     --}}
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama Fakultas</th>
            <th>Nama Dekan</th>
            <th>Nama Wakil Dekan</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($datafakultas as $item)
    <tr>
        <td>{{$item->nama_fakultas}}</td>
        <td>{{$item->nama_dekan}}</td>
        <td>{{$item->nama_wakil_dekan}}</td>
        <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>


@endsection



{{-- <!-- {{$fikr}} --> --}}

