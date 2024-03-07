<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function get()
    {
        $events = Event::all();
        return view('events/index', ['events' => $events]);
    }

    public function detail($id)
    {
        $event = Event::find($id);
        return view('events/detail', ['event' => $event]);
    }

    public function createView()
    {
        return view('events/create');
    }

    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            ]);
        Event::create($validate);
        return redirect('/events');
    }
  
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events/edit', ['event' => $event]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);
        
        $event = Event::findOrFail($id);
        $event->update($validate);

        return redirect('/events');
    }   

    public function delete($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/events');
    }  
}
