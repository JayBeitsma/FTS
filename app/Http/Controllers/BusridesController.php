<?php

namespace App\Http\Controllers;

use App\Models\Busride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use App\Models\ActiveRoute;

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
        }

        if ($request->has('end') && $request->input('end') !== null) {
            $query->where('end_point', $request->input('end'));
        }

        if ($request->has('date') && $request->input('date') !== null) {
            $query->whereDate('departure_date', $request->input('date'));
        }

        if ($request->has('time') && $request->input('time') !== null) {
            $query->whereTime('departure_time', $request->input('time'));
        }


        $busrides = $query->get();

        foreach ($busrides as $busride) {
            $busride->ticket_count = Ticket::where('busride_id', $busride->id)->count();
        }

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

        // Check ticket availability
        $ticketCount = Ticket::where('busride_id', $busride->id)->count();

        // if ticket count is more or equal to tickets available
        if ($ticketCount >= $busride->tickets_available) {
            return redirect()->back()->with('error', 'No tickets available for this busride.');
        }

        // Save ticket
        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'busride_id' => $busride->id,
            'price' => $busride->price,
        ]);

        // Get ticket count
        $ticketCount = Ticket::where('busride_id', $busride->id)->count();

        if ($ticketCount == 30) {
            ActiveRoute::create([
                'name' => $busride->name,
                'busride_id' => $busride->id,
                'starting_point' => $busride->starting_point,
                'end_point' => $busride->end_point,
                'number_of_passangers' => 29,
                'number_of_seats' => 60,
                'departure_date' => $busride->departure_date,
                'departure_time' => $busride->departure_time,
                'arrival_date' => $busride->arrival_date,
                'arrival_time' => $busride->arrival_time,
            ]);
        }

        // Check if other active routes exist
        $activeRoute = ActiveRoute::where('busride_id', $busride->id)->latest()->first();

        if ($activeRoute) {
            $activeRoute->increment('number_of_passangers');

            if ($activeRoute->number_of_passangers == $activeRoute->number_of_seats) {
                ActiveRoute::create([
                    'name' => $busride->name,
                    'busride_id' => $busride->id,
                    'starting_point' => $busride->starting_point,
                    'end_point' => $busride->end_point,
                    'number_of_passangers' => 1,
                    'number_of_seats' => 60,
                    'departure_date' => $busride->departure_date,
                    'departure_time' => $busride->departure_time,
                    'arrival_date' => $busride->arrival_date,
                    'arrival_time' => $busride->arrival_time,
                ]);
            }
        }

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
