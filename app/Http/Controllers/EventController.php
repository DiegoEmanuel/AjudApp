<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{

    public function index()
    {

        $search = request('search');

        if ($search) {

            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->itens = $request->itens;


        // image upload
        if ($request->hasfile('image') && $request->file('image')->isValid()) { //Se a requisição tiver arquivo de imagem e se for válida

            $RequestImage = $request->image; #salvando a request->image em $RequestImage

            $extension =  $RequestImage->extension(); // salvando a extensão da imagem na variavel $extension

            $imageName = md5($RequestImage->getClientOriginalName() . strtotime("Now") . "." . $extension); // nome do path no banco

            $RequestImage->move(public_path('/image/events'), $imageName);

            $event->image = $imageName;
        }
        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Pedido de doação criado com sucesso !');
    }

    public function show($id)
    {
        $event = Event::findOrfail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);


        return view('events.show', ['event' => $event]);
    }

    public function dashboard()
    {
        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }
    public function destroy($id){
        Event::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg','Evento excluido!');
    }
    public function edit($id){
        $event = Event::findOrFail($id);
        return view('events.edit',['event'=> $event]);
    }
}
##teste
