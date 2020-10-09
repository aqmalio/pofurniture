<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class produkcontroller extends Controller
{
    public function index(){
        return view('admin.create');
    }

    public function store(Request $request){
        
        $produk = new produk();

        $produk->judul = $request->input('judul');
        $produk->slug = str::slug(request('judul'));
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/gambar/', $filename);
            $produk->gambar = $filename;
        } else {
            return $request;
            $produk->gambar = '';
        }
        
        $produk->save();

        return view('admin.create')->with('produk', $produk ) ;
    }

    public function display(Request $request){
        $cari = $request->get('cari');
        $produks = produk::all();

        if ($cari) {
            $produks = produk::where('judul','like',"%".$cari."%")->get();
        }
            return view('produk')->with('produks',$produks);

         
    }

    public function tampilanslug($slug)
    {
        $produks = produk::where('slug', '=', $slug)->first();
        return view('produkslug')->with('produks',$produks);
    }

    public function displayadmin(){
        $produks = produk::all();
        return view('admin.editpage')->with('produks',$produks);
    }
    

    public function edit($id)
    {
        $produks = produk::find($id);
        return view('admin.edit')->with('produks', $produks);
    }

    // update
    public function update(Request $request, $id)
    {
        $produks = produk::find($id);

        $produks->judul = $request->input('judul');
        $produks->slug = str::slug(request('judul'));
        $produks->harga = $request->input('harga');
        $produks->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/gambar/', $filename);
            $produks->gambar = $filename;
        } else {
            return $request;
            $produks->gambar = '';
        }
        
        $produks->save();
    
        return redirect('/editpageproduk')->with('produks', $produks);

    } 

            // hapus
    public function delete($id)
    {
        $produks = produk::find($id);
        $produks -> delete();
        return redirect('/editpageproduk')->with('produks', $produks);
    }

        
}