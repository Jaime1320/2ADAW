<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketType = TicketType::all();


        return view(
            'ticketsTypes/index',
            ['ticketTypes' => $ticketType]
        );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketsTypes/create', ['ticket_types' =>TicketType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new TicketType;
        $type->type = $request->input('type');
        $type->save();

        return redirect('ticketsTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ticketsTypes/show', ['ticketType' => TicketType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('ticketsTypes/edit', ['ticketsType' =>TicketType::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketsType = TicketType::find($id);

        $ticketsType->type = $request->input('type');
        $ticketsType->save();


        return redirect('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TicketType::find($id)->delete();
        return redirect('ticketsTypes');
    }
}
