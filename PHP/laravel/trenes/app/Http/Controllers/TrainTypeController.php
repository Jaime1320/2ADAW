<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traintype;
use App\Models\Train;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $traintypes = TrainType::all();

        return view(
            'trainstypes/index',
            ['trainTypes' => $traintypes]
        );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainsTypes/create', ['train_types' =>TrainType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new TrainType;
        $type->type = $request->input('type');
        $type->save();


        return redirect('trainsTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('trainsTypes/show', ['trainType' => TrainType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('trainsTypes/edit', ['trainsType' =>TrainType::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainsType = TrainType::find($id);

        $trainsType->type = $request->input('type');
        $trainsType->save();


        return redirect('trainsTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TrainType::find($id)->delete();
        return redirect('trainsTypes');
    }
}
