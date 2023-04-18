<?php

namespace App\Http\Controllers;

use App\models\prodi;
use Illuminate\Http\Request;

class ProdiControllers extends Controller
{
    public function index(){
        $prodi = Prodi::all();
        //dd($prodi);
        return view('prodi.index')->with('dataprodis',$prodi);
    }
}
