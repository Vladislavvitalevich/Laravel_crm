<?php

namespace App\Http\Controllers;

use App\DifferentCategory;
use App\Http\Requests\FormPeopleRequest;
use App\People;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('forms.first_form');
    }

    public function create(FormPeopleRequest $request)
    {

        $people = new People();
        $people->pip = $request->pip;
        $people->age = $request->age;
        $people->count_family = $request->count_family;
        $people->age_children = $request->age_children;
        $people->study_children = $request->study_children==='true' ? true : false;
        $people->vpo = $request->vpo==='true' ? true : false;
        $people->gromada = $request->gromada;
        $people->w_y_live_now = $request->w_y_live_now;
        $people->have_work = $request->have_work==='true' ? true : false;
        $people->phone = $request->phone;
        $people->volonter = $request->volonter==='true' ? true : false;
        $people->w_y_g_do = $request->w_y_g_do;
        $people->h_m_time = $request->h_m_time;
        $people->save();

        $services = [];
        foreach ($request->services as $service)
        {
                $s =  new service();
                $s->title = $service;
                $s->slug = Str::slug($service);
                $people->services()->save($s);
        }

        $dif_cat = [];
        foreach ($request->different_categories as $different_category)
        {
            $dc =  new DifferentCategory();
            $dc->title = $different_category;
            $dc->slug = Str::slug($different_category);
            $people->services()->save($dc);
        }

    }
}
