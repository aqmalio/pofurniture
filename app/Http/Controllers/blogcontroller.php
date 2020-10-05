<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class blogcontroller extends Controller
{
    public function index(){
        return view('admin.blog.create');
    }

    public function store(Request $request){

        
        $blog = new blog();

        $blog->judul = $request->input('judul');
        $blog->slug = str::slug(request('judul'));
        $blog->konten = $request->input('konten');
        
        $blog->save();

        return view('admin.blog.create')->with('blog', $blog ) ;
    }

    public function display(){
        $blogs = blog::all();
        return view('blog')->with('blogs',$blogs);
    }

    
    public function tampilanslug($slug)
    {
        $blogs = blog::where('slug', '=', $slug)->first();
        return view('blogslug')->with('blogs',$blogs);
    }

    public function displayadmin(){
        $blogs = blog::all();
        return view('admin.blog.editpageblog')->with('blogs',$blogs);
    }



    public function edit($id)
    {
        $blogs = blog::find($id);
        return view('admin.blog.edit')->with('blogs', $blogs);
    }

        // update
    public function update(Request $request, $id)
    {
        $blogs = blog::find($id);

        $blogs->judul = $request->input('judul');
        $blogs->slug = str::slug(request('judul'));
        $blogs->konten = $request->input('konten');
        
        $blogs->save();
    
        return redirect('/editpageblog')->with('blogs', $blogs);

    } 

    public function delete($id)
    {
        $blogs = blog::find($id);
        $blogs -> delete();
        return redirect('/editpageblog')->with('blogs', $blogs);
    }

    // public function cari(Request $request)
    // {
    //     $cari=$request->cari;
    //     $blog=blog::where('judul', $cari)->get();
    //     return $blog;
    // }
}
