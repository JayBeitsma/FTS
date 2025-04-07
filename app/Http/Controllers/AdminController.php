<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Ticket;
use App\Models\Busride;
use App\Models\User;
use App\Models\ActiveRoute;
use App\Models\Supportticket;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function index()
    {
        //get all tickets
        $tickets = Ticket::all();

        //get all busrides
        $busrides = Busride::withCount('tickets')->get();

        //get all users
        $users = User::all();

        //get all active routes
        $activeRoutes = ActiveRoute::all();

        //get all support tickets
        $supportTickets = Supportticket::all();

        //pass the data to the view
        return view('admindashboard', compact('tickets', 'busrides', 'users', 'activeRoutes', 'supportTickets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function destroyTicket($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->back()->with('success', 'Ticket deleted successfully.');
    }

    public function destroyBusride($id)
    {
        $busride = Busride::findOrFail($id);
        $busride->delete();

        return redirect()->back()->with('success', 'Busride deleted successfully.');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function destroyActiveRoute($id)
    {
        $activeRoute = ActiveRoute::findOrFail($id);

        //destroy all tickets related to this active route
        $tickets = Ticket::where('busride_id', $activeRoute->busride_id)->get();
        foreach ($tickets as $ticket) {
            $ticket->delete();
        }

        //destroy the active route
        $activeRoute->delete();

        return redirect()->back()->with('success', 'Active route deleted successfully.');
    }

    public function destroySupportTicket($id)
    {
        $supportTicket = Supportticket::findOrFail($id);
        $supportTicket->delete();

        return redirect()->back()->with('success', 'Support ticket deleted successfully.');
    }

    public function createBusride(Request $request)
    {
        $busride = Busride::find($request->input('id')) ?? new Busride();
        $busride->name = $request->input('name');
        $busride->ftimg = $request->input('ftimg') ?? 'festival1.jpg';
        $busride->festival_name = $request->input('festival_name');
        $busride->description = $request->input('description');
        $busride->price = $request->input('price');
        $busride->starting_point = $request->input('starting_point');
        $busride->end_point = $request->input('end_point');
        $busride->departure_date = $request->input('departure_date');
        $busride->departure_time = $request->input('departure_time');
        $busride->arrival_date = $request->input('arrival_date');
        $busride->arrival_time = $request->input('arrival_time');
        $busride->tickets_available = $request->input('tickets_available');

        // Save the busride
        if ($busride->save()) {
            return redirect()->back()->with('success', 'Busride created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create busride.');
        }
    }

    public function editBusride($id)
    {
        $busride = Busride::findOrFail($id);
        $busrides = Busride::all();
        return view('components.admin-busrides-view', compact('busride', 'busrides'));
    }

    public function updateBusride(Request $request, $id)
    {
        $busride = Busride::findOrFail($id);
        $busride->name = $request->input('name');
        $busride->ftimg = $request->input('ftimg') ?? 'festival1.jpg';
        $busride->festival_name = $request->input('festival_name');
        $busride->description = $request->input('description');
        $busride->price = $request->input('price');
        $busride->starting_point = $request->input('starting_point');
        $busride->end_point = $request->input('end_point');
        $busride->departure_date = $request->input('departure_date');
        $busride->departure_time = $request->input('departure_time');
        $busride->arrival_date = $request->input('arrival_date');
        $busride->arrival_time = $request->input('arrival_time');
        $busride->tickets_available = $request->input('tickets_available');

        if ($busride->save()) {
            return redirect()->route('admin.dashboard')->with('success', 'Busride updated successfully.');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Failed to update busride.');
        }
    }
}
