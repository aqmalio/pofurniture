<?php

namespace App\Http\Controllers;

use App\blog;
use App\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class blogcontroller extends Controller
{
    public function __construct() {
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $blogs = blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new blog();
        $blog->judul = $request->input('judul');
        $blog->slug = str::slug(request('judul'));
        $blog->konten = $request->input('konten');

        $blog->save();

        return redirect('/admin/blog')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($slug)
    {
        $blog = blog::where('slug', '=', $slug)->first();
        return view('main.pages.blog-detail')->with('blog', $blog);
    }

    public function edit($id)
    {
        $blog = blog::find($id);
        return view('admin.blog.edit')->with('blog', $blog);
    }

    // update
    public function update(Request $request, $id)
    {
        $blogs = blog::find($id);

        $blogs->judul = $request->input('judul');
        $blogs->slug = str::slug(request('judul'));
        $blogs->konten = $request->input('konten');

        $blogs->update();

        return redirect('/admin/blog')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $blog = blog::find($id);
        $blog->delete();

        return redirect('/admin/blog')->with('success', 'Data berhasil dihapus');
    }

    public function display(Request $request)
    {
        $cari = $request->get('cari');
        $blogs = blog::orderBy('created_at','desc')->get();

        if ($cari) {
            $blogs = blog::where('judul', 'like', "%" . $cari . "%")->orderBy('created_at','desc')->get();
        }

        return view('main.pages.blog')->with('blogs', $blogs);
    }
}
