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
    public function index(Request $request)
    {
        $query = Busride::query();

        if ($request->has('start') && $request->input('start') !== null) {
            $query->where('starting_point', $request->input('start'));
        } elseif ($request->has('end') && $request->input('end') !== null) {
            $query->where('end_point', $request->input('end'));
        }

        if ($request->has('date') && $request->input('date') !== null) {
            $query->whereDate('departure_date', $request->input('date'));
        }

        if ($request->has('time') && $request->input('time') !== null) {
            $query->whereTime('departure_time', $request->input('time'));
        }


        $busrides = $query->get();

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
