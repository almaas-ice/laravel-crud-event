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

    public function delete($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/events');
    }
}
