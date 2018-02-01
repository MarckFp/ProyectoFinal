<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FilmFormRequest;
use App\Film;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{

    public function index()
    {
        $films = Film::simplePaginate(5);
        return view('films.index', compact('films'));
    }


    public function create()
    {
        return view('films.create');
    }


    public function store(FilmFormRequest $request)
    {
        $film = new Film(array(
            'titulo' => $request->get('titulo'),
            'descripcion' => $request->get('descripcion'),
            'fecha_estreno' => $request->get('fecha_estreno'),
            'director' => $request->get('director'),
            'duracion' => $request->get('duracion'),
            'imagen' => $request->get('imagen'),
            'likes' => 0,
        ));

        $film->save();

        return redirect('/films')->with('status', 'Se ha creado la pelicula correctamente');
    }


    public function show(Request $request)
    {
        $films = DB::table('films')->where('titulo', 'LIKE', $request->get('titulo'))->get();//Retoma el primer resultado y si no da error buscando por el slug
        return view('films.show', compact('films'));
    }


    public function edit($id)
    {
        $films = Film::whereId($id)->firstOrFail();
        return view('films.edit', compact('films'));
    }


    public function update(FilmFormRequest $request, $id)
    {
        $film = Film::whereId($id)->firstOrFail();
        $film->titulo = $request->get('titulo');
        $film->descripcion = $request->get('descripcion');
        $film->fecha_estreno = $request->get('fecha_estreno');
        $film->director = $request->get('director');
        $film->duracion = $request->get('duracion');
        $film->imagen = $request->get('imagen');
        $film->save();
        return redirect(action('FilmsController@edit', $film->id))->with('status', 'La pelicula ha sido actualizada correctamente');
    }


    public function destroy($id)
    {
        $film = Film::whereId($id)->firstOrFail();
        $film->delete();
        return redirect('/films')->with('status', 'Se ha eliminado correctamente');
    }

    public function like($id)
    {
        $film = Film::whereId($id)->firstOrFail();
        $film->likes = $film->likes + 1;
        $film->save();
        return redirect('/films')->with('status', 'Le has dado like a la pelicula: '.$film->titulo);
    }
}
