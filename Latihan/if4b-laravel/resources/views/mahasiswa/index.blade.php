@extends('layout.main')
@section('title','Halaman Mahasiswa')
@section('subtitle','Mahasiswa')

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <h4 class="card-title">Data Mahasiswa</h4>
        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah</a>

        {{-- tampilkan tabel untuk setiap program studi --}}
        @foreach($dataprodis as $prodi)
        <h5 class="mt-4">Data Mahasiswa Program Studi {{ $prodi->nama_prodi }}</h5>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NPM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Tanggal Lahir</th>
                  <th>Kota Lahir</th>
                  <th>Foto</th>
                  <th>Program Studi</th>
                  <th>Created At</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {{-- tampilkan baris data mahasiswa dengan program studi yang sesuai --}}
                @foreach ($datamahasiswas as $item) 
                  @if ($item->prodi_id == $prodi->id)
                    <tr>
                      <td>{{$item->npm}}</td>
                      <td>{{$item->nama_mahasiswa}}</td>
                      <td>{{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d F Y')}}</td>
                      <td>{{$item->kota_lahir}}</td>
                      <td><img src="{{ asset('images/mahasiswa/' . $item->foto) }}" alt="Foto" class="img-fluid"></td>
                      <td>{{$item->prodi->nama_prodi}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>
                        <form id="delete-form-{{ $item->id }}" action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                        </form>
                        <button type="submit" class="btn btn-danger" onclick="
                          event.preventDefault();
                          Swal.fire({
                            title: 'Apakah Anda yakin ingin menghapus Program Studi ini?',
                            showCancelButton: true,
                            confirmButtonText: `Hapus`,
                            cancelButtonText: `Batal`
                          }).then((result) => {
                            /* handle ketika pengguna menekan tombol Hapus */
                            if (result.isConfirmed) {
                              document.getElementById('delete-form-{{ $item->id }}').submit();
                            }
                          });
                        ">Hapus</button>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection