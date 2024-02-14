<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kelas = Kelas::all();

        return view('admin.kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-kelas');
    }

    /**
     * Store a newly created resource in storage.
     */

    // fungsi menambhakan data
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_kelas' => 'required',
            'nama_pelatih' => 'required',
            'durasi'=> 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Kelas::create([
            'image' => $image->hashName(),
            'nama_kelas' => $request->nama_kelas,
            'nama_pelatih' => $request->nama_pelatih,
            'durasi' => $request->durasi . ' menit'
        ]);

        //redirect to index
        return redirect('kelas')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    // fungsi menambilkan data di edit
    public function edit(string $id)
    {
        //get post by ID
        $kelas = Kelas::findOrFail($id);

        return view('admin.edit-kelas', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_kelas' => 'required',
            'nama_pelatih' => 'required',
            'durasi' => 'required'
        ]);

        //get post by ID
        $kelas = Kelas::findOrFail($id);

        //update nama_kelas and nama_pelatih
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->nama_pelatih = $request->nama_pelatih;

        //check apakah image diupload
        if ($request->hasFile('image')) {
        //upload image baru
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //delete image lama
        Storage::delete('public/posts/' . $kelas->image);

        //update image
        $kelas->image = $image->hashName();
    }

        //save data
        $kelas->save();

        //redirect to index
  
        return redirect()->route('kelas')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $kelas = Kelas::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $kelas->image);

        //delete post
        $kelas->delete();

        //redirect to index
        return redirect('kelas')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
