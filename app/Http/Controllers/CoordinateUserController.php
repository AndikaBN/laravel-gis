<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;

class CoordinateUserController extends Controller
{



    public function index()
    {
        $coordinate = Coordinate::paginate(10);
        return view('pages.coordinates.index', compact('coordinate'));
    }

    public function create()
    {
        return view('pages.coordinates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'longitude' => 'required',
            'latitude' => 'required',

        ]);

        $coordinate = new Coordinate;
        $coordinate->longitude = $request->longitude;
        $coordinate->latitude = $request->latitude;

        $coordinate->save();

        return redirect()->route('coordinateUsers.index')->with('success', 'Coordinate berhasil ditambahkan');
    }


    public function show($id)
    {
        $coordinate = Coordinate::findOrFail($id);
        return view('pages.coordinates.show', compact('coordinate'));
    }


    public function edit($id)
    {
        $coordinate = Coordinate::findOrFail($id);
        return view('pages.coordinates.edit', compact('coordinate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'longitude' => 'required',
            'latitude' => 'required',

        ]);

        $coordinate = Coordinate::findOrFail($id);
        $coordinate->longitude = $request->longitude;
        $coordinate->latitude = $request->latitude;

        $coordinate->save();

        return redirect()->route('coordinateUsers.index')->with('succes', 'coordinate update succesfully');
    }

    public function destroy($id)
    {
        $coordinate = Coordinate::find($id);
        $coordinate->delete();
        return redirect()->route('coordinateUsers.index')->with('success', 'coordinate delete succesfully');
    }
}
