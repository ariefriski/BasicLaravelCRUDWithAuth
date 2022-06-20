<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index(Request $request) // untuk mendapatkan seluruh data dari database
    {
        //
        if($request->cari){
            $mahasiswa= Mahasiswa::where('nama','LIKE',"%$request->cari%")
            ->paginate(5);

            return $mahasiswa;
        }

        $mahasiswa  = Mahasiswa::paginate(5);
        return view('page.index',[
            'data'=>$mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampil()
    {
        return view('welcome');
    } 
    public function create()
    {
        //
        return view('page.create');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('page.edit',compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        //
     
        $mahasiswa = Mahasiswa::create([
            "nama" => $request->nama,
            "usia" => $request->usia,
            "jurusan" => $request->jurusan
        ]);
        return redirect('page/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);

        return $mahasiswa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {
        //
       $mahasiswa =  Mahasiswa::find($id);
       
       $mahasiswa->update([
            'nama' => $request->nama,
            'usia' =>$request->usia,
            'jurusan'=> $request->jurusan
        ]);
        
        return redirect('page/'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('page/');
    }
}
