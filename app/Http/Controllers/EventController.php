<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;
use App\Validators\EventValidator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function getEvents()
    {
        $events = $this->eventRepository->all();
        return view('events/index', ['events' => $events]);
    }

    public function getEventDetail($id)
    {
        $event = $this->eventRepository->find($id);
        return view('events/detail', ['event' => $event]);
    }

    public function createEventForm()
    {
        return view('events/create');
    }

    public function createEvent(Request $request, EventValidator $validator)
    {
        $validator->validate($request);
        $this->eventRepository->create($request->all());
        return redirect('/events');
    }

    public function updateEventForm($id)
    {
        $event = $this->eventRepository->find($id);
        return view('events/edit', ['event' => $event]);
    }

    public function updateEvent(Request $request, $id, EventValidator $validator)
    {
        $validator->validate($request);
        $this->eventRepository->update($id, $request->all());
        return redirect('/events');
    }

    public function deleteEvent($id)
    {
        $this->eventRepository->delete($id);
        return redirect('/events');
    }
}
