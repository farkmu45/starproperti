<?php

namespace App\Http\Controllers\Admin;

use App\EventCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventCategory = EventCategory::all();
        return view('admin.event-category.index', ['title' => 'Events-Categories', 'eventCategory' => $eventCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event-category.create', ['title' => 'Add Category']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        EventCategory::create($data);
        return redirect('/admin/events-categories')->with('status', 'Event Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategory $eventCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EventCategory $eventCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventCategory $eventCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventCategory $eventCategory)
    {
        //
    }
}
