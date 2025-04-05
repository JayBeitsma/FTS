<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Ticket;
use App\Models\Busride;
use App\Models\User;


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
//        $busrides = Busride::all();
        $busrides = Busride::withCount('tickets')->get();

        //get all users
        $users = User::all();

        //get all admins
        $admins = Admin::all();

        //pass the data to the view
        return view('admindashboard', compact('tickets', 'busrides', 'users', 'admins'));
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

    public function destroyAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->back()->with('success', 'Admin deleted successfully.');
    }

    public function createBusride(Request $request)
    {
        $busride = new Busride();
        $busride->name = $request->input('name');
        $busride->ftimg = $request->input('ftimg') ?? 'festival1.jpg';
        $busride->festival_name = $request->input('festival_name');
        $busride->description = $request->input('description');
        $busride->price = $request->input('price');
        $busride->starting_point = $request->input('starting_point');
        $busride->end_point = $request->input('end_point');
        $busride->departure_time = $request->input('departure_time');
        $busride->arrival_time = $request->input('arrival_time');
        $busride->tickets_available = $request->input('tickets_available');

        // Save the busride
        if ($busride->save()) {
            return redirect()->back()->with('success', 'Busride created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create busride.');
        }
    }
}
