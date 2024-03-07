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
    

}
