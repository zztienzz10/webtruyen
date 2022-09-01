<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
class IndexController extends Controller
{
    public function home(){
        $danhmuc = Danhmuctruyen::orderBy('id','DESC')->get();

        $truyen = Truyen::paginate(8);

        return view('pages.home')->with(compact('danhmuc','truyen'));

    }
    public function danhmuc($slug){
        $danhmuc = Danhmuctruyen::orderBy('id','DESC')->get();

        $danhmuc_id = Danhmuctruyen::where('slug_danhmuc',$slug)->first();

        $tendanhmuc = $danhmuc_id->tendanhmuc;


        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$danhmuc_id->id)->get();

        return view('pages.danhmuc')->with(compact('danhmuc','truyen'));
    }
    public function xemtruyen($slug){
        $danhmuc = Danhmuctruyen::orderBy('id','DESC')->get();

        $truyen = Truyen::with('danhmuctruyen')->where('slug_truyen',$slug)->where('kichhoat',0)->first();

        $chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->get();

        $chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->first();

        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id',$truyen->danhmuctruyen->id)->whereNotIn('id',[$truyen->id])->get();

        return view('pages.truyen')->with(compact('danhmuc','truyen','chapter','cungdanhmuc','chapter_dau'));
    }
    public function xemchapter($slug){

        $danhmuc = Danhmuctruyen::orderBy('id','DESC')->get();

        $truyen = Chapter::where('slug_chapter',$slug)->first();

        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->first();

        $all_chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->truyen_id)->get();

        $next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>',$chapter->id)->min('slug_chapter');

    	$max_id =  Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();
    	$min_id =  Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();
    	
    	$previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<',$chapter->id)->max('slug_chapter');

        return view('pages.chapter')->with(compact('danhmuc','chapter','all_chapter','next_chapter','max_id','min_id','previous_chapter'));
    }
    public function timkiem(){
        $danhmuc = Danhmuctruyen::orderBy('id','DESC')->get();
        $tukhoa = $_GET['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen')->where('tentruyen','LIKE','%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc','truyen','tukhoa'));
    }
    
}
