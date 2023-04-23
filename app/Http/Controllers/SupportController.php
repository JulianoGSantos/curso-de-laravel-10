<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoubtRequest;
use App\Models\Doubt;

class SupportController extends Controller
{
    public function index(Doubt $sub)
    {
        $subs = $sub->all();

        return view('index', compact('subs'));
    }

    public function create(){
        return view('create');
    }

    public function store(DoubtRequest $request) 
        {

        $side = new Doubt();

        $side->subject = $request->subject;
        $side->description = $request->description;

        $side->save();

        return redirect('/supports');
    }

    public function show(string|int $id, Doubt $sub)
        {
        
        if(!$side = Doubt::find($id) ){
            return back();
        }

        $subs = $sub->all();
        return view('show', compact('subs'));
    }
}