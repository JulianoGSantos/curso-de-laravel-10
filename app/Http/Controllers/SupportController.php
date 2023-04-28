<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoubtRequest;
use App\Models\Doubt;
use Illuminate\Http\Request;

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

    public function show(string|int $id)
        {
        if(!$side = Doubt::find($id)){
            return back();
        }
        return view('show', compact('side'));
    }

    public function edit(Doubt $side, string|int $id)
    {
        if(!$side = Doubt::find($id)){
            return back();
        }
        return view('edit', compact('side'));
    }

    public function update(Doubt $side, Doubt $request,string $id)
    {
        if(!$side = Doubt::find($id)){
            return back();
        }
        $side->update($request->only([
            'subject','description'
        ]));

        return redirect()->route('supports-index');
    }
    public function destroy(Doubt $side, string|int $id)
    {
        if(!$side = Doubt::find($id)){
            return back();
        }
        $side->delete();

        return redirect()->route('supports-index');
    }
}