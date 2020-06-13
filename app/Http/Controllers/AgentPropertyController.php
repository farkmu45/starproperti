<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyImage;
use App\PropertyStatus;
use App\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class AgentPropertyController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'agent']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('status', 'type')->where('user_id',auth()->user()->id)->get();
        return view('agent.properties.all-properties')->withProperties($properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.properties.add')
            ->withStatus(PropertyStatus::all(['id', 'name']))
            ->withTypes(PropertyType::all(['id', 'name']));
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
            'title' => '',
            'surface_area' => '',
            'building_area' => '',
            'location' => '',
            'direction' => '',
            'bathroom' => '',
            'bedroom' => '',
            'price' => '',
            'value' => '',
            'electricity' => '',
            'water' => '',
            'legality' => '',
            'garage' => '',
            'name' => '',
            'description' => '',
            'status_id' => '',
            'type_id' => '',
            'phone_number' => ''
        ]);

        // dd($request->file('photo'));
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg|max:2000' 
        ]);

        $data['code'] = 'R' . random_int(10000, 99999);
        
        $result = auth()->user()->properties()->create($data);

        \Tinify\setKey(env('TINIFY_KEY'));
       
        foreach ($request->file('photo') as $photo) {
            $filetype = $photo->extension();
            $source = \Tinify\fromFile($photo);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $url = Storage::putFile('propertyPhotos', new File(public_path($text)));

            FacadesFile::delete(public_path($text));

            PropertyImage::create([
                'photo' => $url,
                'property_id' => $result->id
            ]);
        }

        return redirect('/agent/properties');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        abort_if(auth()->user()->id !== $property->user->id,404);
        return view('property-details')->withProperty($property);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        abort_if(auth()->user()->id !== $property->user->id,404);
        return view('agent.properties.edit')
            ->withProperty($property)
            ->withStatus(PropertyStatus::all(['id', 'name']))
            ->withTypes(PropertyType::all(['id', 'name']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        abort_if(auth()->user()->id !== $property->user->id, 404);
        dd($request->photo);
        $data = $request->validate([
            'title' => '',
            'surface_area' => '',
            'building_area' => '',
            'location' => '',
            'direction' => '',
            'bathroom' => '',
            'bedroom' => '',
            'price' => '',
            'value' => '',
            'electricity' => '',
            'water' => '',
            'legality' => '',
            'garage' => '',
            'name' => '',
            'description' => '',
            'status_id' => '',
            'type_id' => '',
            'phone_number' => ''
        ]);

        $property->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        abort_if(auth()->user()->id !== $property->user->id, 404);
    }
}
