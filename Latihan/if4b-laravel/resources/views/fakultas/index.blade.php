@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
    {{--
<P>Ini Halaman Fakultas </P>     --}}
      <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fakultas</h4>
                  <a href="{{route('fakultas.create')}}" class="btn btn-primary"></a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Fakultas</th>
                                <th>Nama Dekan</th>
                                <th>Nama Wakil Dekan</th>
                                <th>Program Studi</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($datafakultas as $item)
                            <tr>
                                <td>{{ $item->nama_fakultas }}</td>
                                <td>{{ $item->nama_dekan }}</td>
                                <td>{{ $item->nama_wakil_dekan }}</td>
                                <td>
                                @foreach ( $item->prodi as $prodi )
                                {{ $prodi->nama_prodi }},
                                @endforeach
                                </td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->
@endsection



{{-- <!-- {{$fikr}} --> --}}
