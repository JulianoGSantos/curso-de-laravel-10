<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoubtRequest;
use App\Models\Doubt;

class SupportController extends Controller
{
    public function index(){
        return view('index', [
            'side' => $side
        ]);
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

    public function show(string|int $id)
        {
        if(!$side = Doubt::find($id) ){
            return back();
        }
        dd($side);
    }
}