<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use Illuminate\Http\Request;

class AdminOrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizer = Organizer::all();
        return view ('admin.organizers.index')->with('organizer', $organizer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organizers.create')->with('flash_message', 'Organizer added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //Check Organizer name is existed or not.
        $isExist = Organizer::where('name', '=', $input['name'])->first();
        if ($isExist) {
            return view('admin.organizers.create')->with('flash_message', 'Already Exists');
        }

        Organizer::create($input);
        return redirect('admin/organizer')->with('flash_message', 'Organizer Added!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organizer = Organizer::find($id);
        return view('admin.organizers.show')->with('organizer', $organizer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizer = Organizer::find($id);
        return view('admin.organizers.edit')->with('organizer',  $organizer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $organizer = Organizer::find($id);
        $input = $request->all();
        $organizer->update($input);
        return redirect('admin/organizer')->with('flash_message', 'Organizer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Organizer::destroy($id);
        return redirect('admin/organizer')->with('flash_message', 'Organizer deleted!');  
    }
}
