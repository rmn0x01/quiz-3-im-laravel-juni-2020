<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        $list_artikel = Artikel::all();
        return view('artikel',['list_artikel'=>$list_artikel]);
    }

    public function create(){
        return view('artikel_create');
    }

    public function store(Request $request){
        $creator_id = 1; //hardcoded before applying dynamic user auth
        $judul = $request->judul;
        $isi = $request->isi;
        function slugify($string){
            return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
        }
        $slug = slugify($judul);
        $tag = $request->tag;

        $artikel = new Artikel;
        $artikel->creator_id = $creator_id;
        $artikel->judul = $judul;
        $artikel->isi = $isi;
        $artikel->slug = $slug;
        $artikel->tag  =$tag;
        $artikel->save();

        return redirect('/artikel');
    }

    public function show($id){
        $artikel = Artikel::where('id',$id)->first();
        return view('artikel_show',['artikel'=>$artikel]);
    }

    public function edit($id){
        $artikel = Artikel::where('id',$id)->first();
        return view('artikel_edit',['artikel'=>$artikel]);
    }

    public function update(Request $request, $id){
        $artikel = Artikel::find($id);

        function slugify($string){
            return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
        }

        $judul = $request->judul;
        $isi = $request->isi;
        $slug = slugify($judul);
        $tag = $request->tag;

        $artikel->judul = $judul;
        $artikel->isi = $isi;
        $artikel->tag = $tag;
        $artikel->slug = $slug;

        $artikel->save();
        return redirect('/artikel');
    }
    
    public function destroy($id){
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect('/artikel');
    }
}
