<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $raadi = Request()->raadi;
         $raadi?
         $words = Word::where('erayga', 'LIKE', '%'.$raadi.'%')->orderBy('erayga')->get():
         $words = Word::orderBy('erayga', 'asc')->get();
        return view('erayada.index', ['words'=>$words]);
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        return view('erayada.show', ['word'=>Word::where('slug', $slug)->first()]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('erayada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'erayga'=>['required', 'string','unique:words'],
            'nooca'=>'required',
            'qeexitaannada'=>'required',
            'image'=>'mimes:jpg,jpeg,png,svg,gif|max:5048'
        ]);
        if($request->image){
        $imageName = uniqid().'-'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    }
        else{
            $imageName = null;
        }
        $slug = SlugService::createSlug(Word::class, 'slug', $request->erayga);
        Word::create([
            'erayga'=>$request->erayga,
            'slug'=>$slug,
            'nooca'=>$request->nooca,
            'qeexitaannada'=>$request->qeexitaannada,
            'la_micne_ah'=>$request->la_micne_ah,
            'image_path'=>$imageName,
        ]); 
        return redirect('/')->with('message', 'Waad ku guuleysatay inaad xareyso eray!'); 

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $word = Word::where('slug', $slug)->first();
        return view('erayada.edit', ['word'=>$word]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        $imageName = Word::where('slug', $slug)->first()->image_path;
        $id = Word::where('slug', $slug)->first()->id;
        $request->validate([
            'erayga'=>['required', 'string','unique:words,erayga,'.$id],
            'nooca'=>'required',
            'qeexitaannada'=>'required',
            'image'=>'mimes:jpg,jpeg,png,svg,gif|max:5048'
         ]);

        if($request->image){
            $imageName = uniqid().'-'.$request->title.'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        
        $wslug = SlugService::createSlug(Word::class, 'slug', $request->erayga);
        Word::where('slug', $slug)->update([
            'erayga'=>$request->erayga,
            'slug'=>$wslug,
            'nooca'=>$request->nooca,
            'qeexitaannada'=>$request->qeexitaannada,
            'la_micne_ah'=>$request->la_micne_ah,
            'image_path'=>$imageName,
        ]);
        return redirect('/')->with('message', 'Waad ku guuleysatay inaad wax ka beddesho erayga!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Word::where('slug', $slug)
            ->delete();
            return redirect('/');
    }
}

