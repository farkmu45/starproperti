<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popups = Popup::all();
        return view('admin.popup.index', ['title' => 'Popups', 'popups' => $popups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.popup.create', ['title' => 'Add Popups']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function show(Popup $popup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function edit(Popup $popup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popup $popup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popup $popup)
    {
        //
    }
}
