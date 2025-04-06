<?php

namespace App\Http\Controllers;

use App\Models\ActiveRoute;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch tickets for the authenticated user
        $tickets = Ticket::with('busride')->where('user_id', $user->id)->get();

        // Pass the tickets to the view
        return view('dashboard', compact('tickets'));
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
        // Get the authenticated user
        $user = Auth::user();

        // Get ticket
        $ticket = Ticket::where('id', $id)->where('user_id', $user->id)->firstOrFail();

        // Get the busride id
        $busrideId = $ticket->busride_id;

        // Delete the ticket
        $ticket->delete();

        // Get active route
        $activeRoute = ActiveRoute::where('busride_id', $busrideId)->latest()->first();

        // If active route decrease by 1
        if ($activeRoute) {
            $activeRoute->decrement('number_of_passangers');
        }

        return redirect()->route('dashboard')
            ->with('success', 'Ticket cancelled successfully!');
    }
}
