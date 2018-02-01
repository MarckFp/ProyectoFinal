<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;//Importa las Request de los Tickets
use App\Ticket; //Importa el Modelo Ticket
use Illuminate\Support\Facades\Mail;//Importamos el mail

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('login')) {
            $tickets = Ticket::all(); //Obtenemos todos los tickets
            return view('tickets.index', compact('tickets')); //Devolvemos la vista tickets y convierte el resultado en un array
        }else{
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function store(TicketFormRequest $request)//Crea un Ticket desde el modelo
    {
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug
        ));

        $ticket->save();

        $data = array(
            'ticket' => $slug,
        );

        Mail::send('emails.ticket', $data, function ($message) {

            $message->from('marcos_fernandezperez@lagunadejoatzel.org', 'Nuevo Ticket');
            $message->to('marcos_fernandezperez@lagunadejoatzel.org')->subject('¡Hay un nuevo ticket!');

        });


        return redirect('/contact')->with('status', 'Su ticket ha sido creado. Su id es: ' . $slug);

    }

    public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();//Retoma el primer resultado y si no da error buscando por el slug
        return view('tickets.show', compact('ticket'));
    }

    public function edit($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit', compact('ticket'));

    }

    public function update($slug, TicketFormRequest $request)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');
        if ($request->get('status') != null) {
            $ticket->status = 0;
        } else {
            $ticket->status = 1;
        }
        $ticket->save();
        return redirect(action('TicketsController@edit', $ticket->slug))->with('status', '¡El ticket ' . $slug . ' ha sido actualizado!');
    }


    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect('/tickets')->with('status', 'El ticket ' . $slug . 'ha sido borrado');
    }
}
