<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('pages.comics.index', compact('comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // va a recuperare la pagina dove ci sarà solo il form
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDAZIONE BACK-END
        $request->validate(
            [
                'title'=> 'required|max:100|unique:comics',
                'description'=> 'required',
                'thumb'=> 'required|url|unique:comics',
                'price'=> 'required',
                'series'=> 'required|max:100',
                'sale_date'=> 'required|date',
                'type'=> 'required|max:100',
            ]
        );

        // la "richiesta" (parametro della funzione) fatta al server attraverso il form (POST) presente nella CREATE e contenente le informazioni scritte negli input
        $data = $request->all();

        // nuova istanza 
        $new_comic = new Comic();
        
        // salvare le informazioni passate nel "$fillable"
        $new_comic->fill($data);
        $new_comic->save();

        // dopo aver inviato il form si viene reindirizzati alla SHOW dell'elemento creato -> il metodo POST non ci permette di fare il "return" di una vista -> c'è bisogno del REDIRECT
        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // passando il Model riferito all'entità più una variabile si va a sostituire la scrittura con il findOrFail() -> struttura rivisitata -> "id" passato dalla rotta
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact('comic') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // VALIDAZIONE BACK-END
        $request->validate(
            [
                'title'=> 'required|max:100',
                'description'=> 'required',
                'thumb'=> 'required|url',
                'price'=> 'required',
                'series'=> 'required|max:100',
                'sale_date'=> 'required|date',
                'type'=> 'required|max:100',
            ]
        );

        $data = $request->all();
        $comic->update($data);

        return redirect()->route( 'comics.show', $comic )->with('message', "$comic->title è stato aggiornato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route( 'comics.index' )->with('message', "$comic->title è stato eliminato con successo.");
    }
}
