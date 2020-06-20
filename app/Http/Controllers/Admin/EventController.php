<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\EventCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FacadesFile;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', ['title' => 'Events', 'events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = EventCategory::all();
        return view('admin.event.create', ['title' => 'Add Event', 'events' => $events]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'photo' => 'requiredfile|between:0,2048|mimes:jpeg,jpg,png',
        ]);

        $filetype = $request->file('photo')->extension();
        $source = \Tinify\fromFile($data['photo']);
        $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
        $source->toFile($text);
        $data['photo'] = Storage::putFile('eventPhotos', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        Event::create($data);
        return redirect('/admin/events')->with('status', 'Event Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $eventCategory = EventCategory::all();
        return view('admin.event.edit', ['title' => 'Edit Events', 'event' => $event, 'eventCategory' => $eventCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'photo' => 'file|between:0,2048|mimes:jpeg,jpg,png',
        ]);

        if ($request['photo']) {
            Storage::delete($event->photo);
            $filetype = $request->file('photo')->extension();
            $source = \Tinify\fromFile($data['photo']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['photo'] = Storage::putFile('eventPhotos', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }


        $event->update($data);
        return redirect('/admin/events')->with('status', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Storage::delete($event->photo);
        $event->delete();
        return redirect('/admin/events')->with('status', 'Event Deleted');
    }
}
