<?php

namespace App\Http\Controllers;

use App\Models\IngoEvent;
use App\Models\Venue;
use App\Models\Category;
use App\Models\Organizer;

use Illuminate\Http\Request;

class AdminIngoEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingoEvent = IngoEvent::all();
        return view('admin.ingoEvents.index')->with('ingoEvent', $ingoEvent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // These variable are for create option for age_restriction and event_chain
        $age_restriction_array = ["all", "18", "21"];
        $event_chain_array = ["daily", "weekly", "monthly", "yearly", "once"];

        $venues = Venue::select('id', 'title')->get();
        $categories = Category::select('id', 'name')->get();
        $organizers = Organizer::select('id', 'name')->get();
        
        return view('admin.ingoEvents.create')->with('ingoEvent', [
            "age_restriction_array" => $age_restriction_array,
            "event_chain_array" => $event_chain_array,
            "venues" => $venues,
            "categories" => $categories,
            "organizers" => $organizers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // These variable are for create option for age_restriction and event_chain
        $age_restriction_array = ["all", "18", "21"];
        $event_chain_array = ["daily", "weekly", "monthly", "yearly", "once"];

        $input = $request->all();

        //Check Event name is existed or not.
        $isExist = IngoEvent::where('event', '=', $input['event'])->first();
        if ($isExist) {
            return view('admin.ingoEvents.create')->with('ingoEvent', [
                "age_restriction_array" => $age_restriction_array,
                "event_chain_array" => $event_chain_array
            ]);
        }

        IngoEvent::create($input);
        return redirect('admin/ingoevent')->with('flash_message', 'Event Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingoEvent = IngoEvent::find($id);
        $venueName = Venue::find($ingoEvent->venueid);
        $categoryName = Category::find($ingoEvent->categoryid);
        $organizerName = Organizer::find($ingoEvent->organizerid);

        return view('admin.ingoEvents.show')->with('ingoEvent', [
            "ingoEvent" => $ingoEvent,
            "venueName" => $venueName['title'],
            "categoryName" => $categoryName['name'],
            "organizerName" => $organizerName['name']
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingoEvent = IngoEvent::find($id);
        $age_restriction_array = ["all", "18", "21"];
        $event_chain_array = ["daily", "weekly", "monthly", "yearly", "once"];


        $venues = Venue::select('id', 'title')->get();
        $categories = Category::select('id', 'name')->get();
        $organizers = Organizer::select('id', 'name')->get();
       

        return view('admin.ingoEvents.edit')->with('ingoEvent', [
            "ingoEvent" => $ingoEvent,
            "age_restriction_array" => $age_restriction_array,
            "event_chain_array" => $event_chain_array,
            "venues" => $venues,
            "categories" => $categories,
            "organizers" => $organizers,
        ]);
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
        $ingoEvent = IngoEvent::find($id);
        $input = $request->all();
        $ingoEvent->update($input);
        return redirect('admin/ingoevent')->with('flash_message', 'Venue Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IngoEvent::destroy($id);
        return redirect('admin/ingoevent')->with('flash_message', 'Venue deleted!');
    }
}