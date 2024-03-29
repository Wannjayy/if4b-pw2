<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataprodis = Prodi::all();
        $datamahasiswas = Mahasiswa::with('prodi')->orderBy('created_at', 'DESC')->get();

        return view('mahasiswa.index', compact('datamahasiswas', 'dataprodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'npm' => 'required|unique:mahasiswa,npm',
            'nama_mahasiswa' => 'required',
            'tanggal_lahir' => 'required',
            'kota_lahir' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:2048',
            'prodi_id' => 'required',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->id = Str::Uuid();
        $mahasiswa->npm = $validasi['npm'];
        $mahasiswa->nama_mahasiswa = $validasi['nama_mahasiswa'];
        $mahasiswa->tanggal_lahir = $validasi['tanggal_lahir'];
        $mahasiswa->kota_lahir = $validasi['kota_lahir'];
        $foto = $request->file('foto')->getClientOriginalName();
        $mahasiswa->foto = $foto;
        $mahasiswa->prodi_id = $validasi['prodi_id'];
        $mahasiswa->save();

        $request->file('foto')->move(public_path('images/mahasiswa'), $foto);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $foto = $mahasiswa->foto;
        $mahasiswa->delete();

        if ($foto !== null) { //jika ada file foto terkait, hapus file foto tersebut
            $path = public_path('images/mahasiswa/' . $foto); //mengambil alamat file foto pada direktori
            
            if (file_exists($path)) { //jika file foto ada pada direktori, hapus file foto tersebut
                unlink($path);
            }
        }

        return redirect()->route('mahasiswa.index')
        ->with('success', 'Data Mahasiswa berhasil dihapus.');
    }
}
