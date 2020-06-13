<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class FrontEndController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'agent'])->only(['profile', 'profileUpdate', 'dashboard']);
    }

    public function index()
    {
        $properties = Property::limit(3)->get();
        $agents = User::where('role_id', '!=', 3)->get(['id','photo', 'name', 'facebook_link', 'youtube_link', 'twitter_link']);
        return view('index')->withAgents($agents)->withProperties($properties);
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
        \Tinify\setKey(env('TINIFY_KEY'));

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

    public function showAgentProperties(User $agent)
    {

        return view('agent-properties')->withProperties($agent->properties)->withAgent($agent);
    }

    public function showProperties()
    {
        $properties = Property::all();
        return view('all-properties')->withProperties($properties);
    }

    public function showProperty(Property $property)
    {
        return view('property-details')->withProperty($property);
    }

    public function search()
    {
        return view('search');
    }
}
