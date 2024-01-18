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
        $tickettype = TicketType::all();


        return view(
            'ticketsTypes/index',
            ['ticketTypes' => $tickettype]
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
