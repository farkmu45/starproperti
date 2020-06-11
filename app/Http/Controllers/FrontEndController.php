<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class FrontEndController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'internalAgent'])->only(['profile', 'profileUpdate', 'dashboard']);
    }

    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('agent.dashboard');
    }

    public function profile()
    {
        return view('agent.profile');
    }

    public function profileUpdate(Request $request)
    {
        \Tinify\setKey("9krHPgyjMb8GlwyZlzjnTNWMfvSbdSxq");

        $data = $request->validate([
            'photo' => '',
            'id_number' => '',
            'address' => '',
            'whatsapp_number' => '',
            'instagram_link' => '',
            'facebook_link' => '',
            'youtube_link' => '',
            'twitter_link' => ''
        ]);

        if ($request['photo']) {
            Storage::delete(auth()->user()->photo);
            $filetype = $request->file('photo')->extension();
            $source = \Tinify\fromFile($data['photo']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['photo'] = Storage::putFile('photos', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }


        auth()->user()->update($data);

        return back();
    }

    public function propertyDetails()
    {
        return view('property-details');
    }

    public function add()
    {
        return view('agent.properties.add');
    }

    public function search()
    {
        return view('search');
    }

    public function allProperties()
    {
        return view('agent.properties.all-properties');
    }
}
