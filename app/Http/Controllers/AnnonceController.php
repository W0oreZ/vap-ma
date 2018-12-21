<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Annonce;
use App\Models\AnnonceImage;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();

        return view('annonce.index')->withAnnonces($annonces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annonce = new Annonce($request->all());
        $annonce->user_id = auth()->user()->id;
        $annonce->slug = str_replace(" ", "-", $request->input('title'));
        $annonce->save();

        $images = $request->input('images');
        $primary = $request->input('primary');
        foreach ($images as $img) {
            if($img != $primary){
                AnnonceImage::Create(['name'=>$img,'annonce_id'=>$annonce->id]);
            }
        }
        AnnonceImage::Create(['name'=>$primary,'annonce_id'=>$annonce->id,'isMain'=>1]);
        //$annonce->images()->save(new \App\Models\AnnonceImage(['name'=>$primary,'isMain'=>1]));
        redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        $annonces = Annonce::where('title','like','%a%')->take(4)->get();
        return view('annonce.show')->withAnnonce($annonce)->withAnnonces($annonces);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload(Request $request){
        $image = $request->file('image');
        $originalname = $image->getClientOriginalName();

        $imagefullname = time().'_'.$originalname;
    
        $destinationPath = public_path('images/tmp/');
    
        $image->move($destinationPath, $imagefullname);

        return $imagefullname;
    }
}