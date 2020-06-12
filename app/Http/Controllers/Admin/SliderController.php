<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slide::all();
        return view('admin.slider.index', ['title' => 'Slides', 'sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create', ['title' => 'Add Slider']);
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
        $data['photo'] = Storage::putFile('slides', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        Slide::create($data);
        return redirect('/admin/slides')->with('status', 'Slider Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slider.edit', ['title' => 'Edit Slider', 'slide' => $slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");
        $data = $request->validate([
            'title' => 'required',
            'photo' => 'file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        if ($request['photo']) {
            Storage::delete($slide->photo);
            $filetype = $request->file('photo')->extension();
            $source = \Tinify\fromFile($data['photo']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['photo'] = Storage::putFile('slides', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }

        $slide->update($data);
        return redirect('/admin/slides')->with('status', 'Slider Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        Storage::delete($slide->photo);
        $slide->delete();
        return redirect('/admin/slides')->with('status', 'Slider Deleted');
    }
}
