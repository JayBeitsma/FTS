<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;

class BusridesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busrides = Busride::all(); // Fetch all
        return view('pages.busrides', compact('busrides'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $busride = Busride::findOrFail($id);
        return view('busrides.show', compact('busride'));
    }

    /**
     * Allow buying tickets.
     */
    public function buyTicket(Request $request, $id)
    {
        $busride = Busride::findOrFail($id);

        // Example: Save ticket
        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'busride_id' => $busride->id,
            'price' => $busride->price,
        ]);

        return redirect()->route('busrides.index', $id)
            ->with('success', 'Ticket purchased successfully!');
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
