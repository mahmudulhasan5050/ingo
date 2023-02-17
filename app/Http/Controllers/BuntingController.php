<?php

namespace App\Http\Controllers;

use App\Models\Bunting;
use Illuminate\Http\Request;

class BuntingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bunting = Bunting::all();
        return view('admin.buntings.index')->with('bunting', $bunting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buntings.create')->with('flash_message', 'Bunting added');
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

        Bunting::create($input);
        return redirect('admin/bunting')->with('flash_message', 'Bunting Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bunting = Bunting::find($id);
        return view('admin.buntings.show')->with('bunting', $bunting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bunting = Bunting::find($id);
        return view('admin.buntings.edit')->with('bunting', $bunting);
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
        $bunting = Bunting::find($id);
        $input = $request->all();
        $bunting->update($input);
        return redirect('admin/bunting')->with('flash_message', 'Bunting Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bunting::destroy($id);
        return redirect('admin/bunting')->with('flash_message', 'Bunting deleted!');
    }
}
