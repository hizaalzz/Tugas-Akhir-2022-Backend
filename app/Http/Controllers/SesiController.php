<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataTables\SesiDataTable;
use App\Http\Requests\SesiRequest;
use App\Models\Sesi;

class SesiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->authorizeResource(Sesi::class, 'sesi');    
    }

    public function index(SesiDataTable $dataTable)
    {
        return $dataTable->render('pages.sesi.index');
    }

    public function create()
    {
        return view('pages.sesi.create');
    }

    public function store(SesiRequest $request)
    {
        $sesi = new Sesi($request->except('_token'));

        $sesi->save();

        return redirect()->route('sesi.index')->with('success', 'Berhasil menambahkan sesi');
    }

    public function show($id)
    {
        //
    }

    public function edit(Sesi $sesi)
    {
        return view('pages.sesi.edit', compact('sesi'));
    }

    public function update(SesiRequest $request, Sesi $sesi)
    {
        $sesi->update([
            'nama' => $request->nama,
            'start' => $request->start,
            'end' => $request->end
        ]);

        return redirect()->route('sesi.index')->with('success', 'Berhasil mengupdate sesi');
    }

    public function destroy(Sesi $sesi)
    {
        $sesi->delete();

        return redirect()->route('sesi.index')->with('success', 'Berhasil menghapus sesi');
    }

}
