<?php

namespace App\Http\Controllers;

use App\DTO\CreateSupportDTO;
use App\Http\Requests\DoubtRequest;
use App\Models\Doubt;
use APP\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    )
    {
        
    }
    public function index(Request $request)
    {
        $subs = $this->service->getAll($request->filter);

        return view('index', compact('subs'));
    }

    public function create(){
        return view('create');
    }

    public function store(DoubtRequest $request) 
        {

        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect('/supports');
    }

    public function show(string $id)
        {
        if(!$side = $this->service->findOne($id)){
            return back();
        }
        return view('show', compact('side'));
    }

    public function edit(string $id)
    {
        if(!$side = $this->service->findOne($id)){
            return back();
        }
        return view('edit', compact('side'));
    }

    public function update(DoubtRequest $request, Doubt $side, string $id)
    {
        if(!$side = Doubt::find($id)){
            return back();
        }
        $side->update($request->only([
            'subject','description'
        ]));

        return redirect()->route('supports-index');
    }
    
    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports-index');
    }
}