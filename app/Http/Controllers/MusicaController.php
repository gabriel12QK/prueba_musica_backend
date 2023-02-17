<?php

namespace App\Http\Controllers;

use App\Models\musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musica=musica::where('estado',1)->get();
        return response()->json($musica);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $musica=musica::create([
            'title'=>$request->title,
            'title_short'=>$request->title_short,
            'preview'=>$request->preview,
            'duration'=>$request->duration,
            'cover_small'=>$request->cover_small,
            'estado'=>1
        ]);
        return response()->json("musica agregada con exito");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function show(musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function edit(musica $musica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, musica $musica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $musica=musica::find($id);
       if (is_null($musica)) {
        return response()->json("no se encuentar la cancion");
       }
       $musica->estado=0;
       $musica->save();
       return response()->json("cancion eliminada");
    }
}
