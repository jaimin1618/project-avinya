<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        return view('events');
    }

    public function addEvent(Request $req)
    {

        $event = new Event;

        // $req->created_by = "admin";

        $req->validate([
            'club' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'name' => ['required', 'string'],
            'level' => ['required', 'integer', 'min:0', 'max:5'],
            'text' => ['required'],

        ]);

        $event->club = $req->club;
        $event->date = $req->date;
        $event->time = $req->time;
        $event->eventName = $req->name;
        $event->level = $req->level;
        $event->description = $req->text;
        $event->certificate = $req->certificate || false;
        $event->created_by = $req->created_by || "admin";

        if ($event->save()) {
            return json_encode(true);
        }

        return json_encode(false);
    }

    public function displayEvents(Request $req)
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return json_encode($events);
    }

}
