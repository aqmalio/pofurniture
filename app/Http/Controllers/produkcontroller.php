<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class produkcontroller extends Controller
{
    public function index()
    {
        $produks = produk::all();
        return view('admin.catalog.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.catalog.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'judul' => 'required|max:255',
            'harga' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = new produk();

        $produk->judul = $request->input('judul');
        $produk->slug = str::slug(request('judul'));
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->model3d = $request->input('model3d');

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('img/upload'), $filename);
        $produk->gambar = $filename;

        // $file3d = $request->file('model3d');
        // $extension = $file3d->getClientOriginalExtension();
        // $filename3d = time() . '.' . $extension;
        // $file3d->move(public_path('model3d'), $filename3d);
        // $produk->model3d = $filename3d;


        $produk->save();

        return redirect('/admin/catalog')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($slug)
    {
        $produk = produk::where('slug', '=', $slug)->first();
        return view('main.pages.catalog-detail')->with('produk', $produk);
    }

    public function edit($id)
    {
        $produk = produk::find($id);
        return view('admin.catalog.edit')->with('produk', $produk);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'judul' => 'required|max:255',
            'harga' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $produks = produk::find($id);

        $produks->judul = $request->input('judul');
        $produks->slug = str::slug(request('judul'));
        $produks->harga = $request->input('harga');
        $produks->deskripsi = $request->input('deskripsi');
        $produks->model3d = $request->input('model3d');

        if ($request->hasFile('gambar')) {
            File::delete(public_path('img/upload' . $produks->gambar));

            request()->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/upload', $filename);
        } else {
            $filename = $produks->gambar;
        }

        // if ($request->hasFile('model3d')) {
        //     File::delete(public_path('model3d/' . $produks->model3d));

        //     request()->validate([
        //         'model3d' => 'required|mimes:gltf,glb|max:10000',
        //     ]);

        //     $file3d = $request->file('model3d');
        //     $extension = $file3d->getClientOriginalExtension();
        //     $filename3d = time() . '.' . $extension;
        //     $file3d->move(public_path('model3d'), $filename3d);
        // } else {
        //     $filename3d = $produks->model3d;
        // }

        $produks->gambar = $filename;
        // $produks->model3d = $filename3d;

        $produks->update();

        return redirect('/admin/catalog')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $produks = produk::find($id);
        File::delete(public_path('img/upload' . $produks->gambar));
        // File::delete(public_path('model3d/' . $produks->model3d));

        produk::destroy($id);
        return redirect('/admin/catalog')->with('success', 'Data berhasil dihapus');
    }

    public function display(Request $request)
    {
        $cari = $request->get('cari');
        $produks = produk::orderBy('created_at', 'desc')->simplePaginate(6);

        if ($cari) {
            $produks = produk::where('judul', 'like', "%" . $cari . "%")->orderBy('created_at', 'desc')->simplePaginate(6);
        }

        return view('main.pages.catalog')->with('produks', $produks);
    }
}
