<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buku = DB::table('buku')->get();
        return view(('buku.index'), compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
        ]);

        $query = DB::table('buku')->insert([
            'kode' => $request['kode'],
            'judul' => $request['judul'],
            'penulis' => $request['penulis'],
            'penerbit' => $request['penerbit'],
            'tahun' => $request['tahun'],
            'stok' => $request['stok'],
        ]);

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
        ]);

        $query = DB::table('buku')->update([
            'kode' => $request['kode'],
            'judul' => $request['judul'],
            'penulis' => $request['penulis'],
            'penerbit' => $request['penerbit'],
            'tahun' => $request['tahun'],
            'stok' => $request['stok'],
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    
    }
}