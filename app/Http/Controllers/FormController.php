<?php

namespace App\Http\Controllers;

use App\Element;
use App\Need;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index', ['needs' => Need::with('elements')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $need = new Need();
            $need->formation = $request->formation;
            $need->responsible = $request->responsible;
            $need->community = $request->community;
            $need->number = $request->number;
            $need->saveOrFail();

            foreach ($request->name as $key => $val)
            {
                $element = new Element();
                $element->needs_id = $need->id;
                $element->name = $request["name"][$key];
                $element->unit = $request['units_measurement'][$key];
                $element->count = $request['count'][$key];
                $element->saveOrFail();

                $need->elements()->save($element);
            }
            return redirect()->route('form.index');


        } catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('forms.show', ['need' => Need::with('elements')->findOrFail($id), ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
