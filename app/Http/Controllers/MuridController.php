<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataTables\MuridDataTable;
use App\Http\Requests\MuridRequest;
use App\Models\User;
use App\Models\Murid;
use HandleFile;

class MuridController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');    
        $this->authorizeResource(Murid::class, 'murid');
    }
    
    public function index(MuridDataTable $dataTable)
    {
        return $dataTable->render('pages.murid.index');
    }

    public function create()
    {
        return view('pages.murid.create');
    }

    public function store(MuridRequest $request)
    {
        //Create murid
        $murid = new Murid($request->except('_token', 'fotomurid'));

        $fotoMurid = $request->file('fotomurid');

        if($fotoMurid !== null) 
        {
            $resizedImage = HandleFile::resizeAndSaveImage($fotoMurid, config('enums.path.fotomurid'));

            $murid->foto = $resizedImage;
        }

        $murid->save();


        return redirect()->route('murid.index')->with('success', 'Berhasil menambah murid');
    }

    public function show(Murid $murid)
    {
        return view('pages.murid.details', compact('murid'));
    }

    public function edit(Murid $murid)
    {
        return view('pages.murid.edit', compact('murid'));
    }

    public function update(MuridRequest $request, Murid $murid)
    {
        $murid->nama = $request->nama;
        $murid->nisn = $request->nisn;
        $murid->nis = $request->nis;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tempat_lahir = $request->tempat_lahir;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->telp = $request->telp;

        $fotoMurid = $request->file('fotomurid');
        
        if($fotoMurid !== null) 
        {
             // Delete old photo first
             if(HandleFile::hasFile(config('enums.path.fotomurid') . '/' . $murid->foto)) 
             {
                 HandleFile::delete($murid->foto, config('enums.path.fotomurid'));
             }
 
             $resizedImage = HandleFile::resizeAndSaveImage($fotoMurid, config('enums.path.fotomurid'));
 
             $murid->foto = $resizedImage;
 
        }

        $murid->save();

        $user = User::where('murid_id', $murid->id)->first();
        $user->nama = $request->nama;

        $user->save();

        return redirect()->route('murid.index')->with('success', 'Berhasil mengupdate data');
    }

    public function destroy(Murid $murid)
    {
        $user = $murid->user;

        if($user !== null && $user->delete()) 
        {
            // Delete photo 
            HandleFile::delete($murid->foto, config('enums.path.fotomurid'));

            $murid->delete();
        }

        try {
            $murid->delete();
        } catch(\Exception $ex) {
            return redirect()->back()->withErrors('Gagal menghapus murid');
        }

        return redirect()->route('murid.index')->with('success', 'Berhasil menghapus murid');

    }
}
