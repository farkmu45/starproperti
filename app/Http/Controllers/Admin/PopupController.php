<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Popup;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FacadesFile;

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
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'title' => 'required',
            'photo' => 'required|file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        $filetype = $request->file('photo')->extension();
        $source = \Tinify\fromFile($data['photo']);
        $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
        $source->toFile($text);
        $data['photo'] = Storage::putFile('popups', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        Popup::create($data);
        return redirect('/admin/popups')->with('status', 'Popup Created');
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
        return view('admin.popup.edit', ['title' => 'Edit Popup', 'popup' => $popup]);
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
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'title' => 'required',
            'photo' => 'file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        if ($request['photo']) {
            Storage::delete($popup->photo);
            $filetype = $request->file('photo')->extension();
            $source = \Tinify\fromFile($data['photo']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['photo'] = Storage::putFile('popups', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }

        $popup->update($data);
        return redirect('/admin/popups')->with('status', 'Popup Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Popup  $popup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popup $popup)
    {
        Storage::delete($popup->photo);
        $popup->delete();
        return redirect('/admin/popups')->with('status', 'Popup Deleted');
    }
}
