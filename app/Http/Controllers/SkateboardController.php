<?php

namespace App\Http\Controllers;

use App\Models\Skateboard;
use App\Http\Requests\StoreSkateboardRequest;
use App\Http\Requests\UpdateSkateboardRequest;

class SkateboardController extends Controller
{

    public function redirecting(){
        return redirect('mainPage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skateboard = Skateboard::paginate('6');

        return view('mainPage', compact('skateboard'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skateboard = Skateboard::All();

        return view('add_Skateboard', compact('skateboard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkateboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkateboardRequest $request)
    {
        //$fileName = NULL;

        $validate = $request-> validate([
            'skateboard_name' => 'required|max:40',
            'skateboard_model' => 'required|max:20',
            'skateboard_length' => 'required|max:10',
            'skateboard_price' => 'required|max:10',
            // 'country_id' => 'required',
        ]);
        Skateboard::create([
            'skateboard_name' =>request('skateboard_name'),
            'skateboard_model' =>request('skateboard_model'),
            'skateboard_length' =>request('skateboard_length'),
            'skateboard_price' =>request('skateboard_price'),
            // 'country_id' =>request('country_id'),
        ]);

        // if ( Country::where('id', '=', request('country_id') ) -> exists() ){
        // }
        // else{
        //     return view('denied');
        // }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skateboard $skateboard
     * @return \Illuminate\Http\Response
     */
    public function show(Skateboard $skateboard)
    {
        $skateboard = Skateboard::paginate(6);
        $skateboard = Skateboard::paginate(6);

        return view('mainPage', compact('skateboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skateboard  $skateboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Skateboard $skateboard)
    {
        $skateboard = Skateboard::All();
        return view('edit_Skateboard', compact('skateboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkateboardRequest  $request
     * @param  \App\Models\Skateboard  $skateboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkateboardRequest $request, Skateboard $skateboard)
    {
        Skateboard::where('id', $skateboard -> id)-> update($request->only(['skateboard_name', 'skateboard_model', 'skateboard_length', 'skateboard_price']));
        return redirect('/mainPage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkateboardCont  $skateboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skateboard $skateboard)
    {
        $skateboard -> delete();
        return redirect('/');
    }
}
