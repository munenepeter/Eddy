<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Client;

class ClientController extends Controller
{
    public function index()
    {

        //   $clients = client::latest()->get();

        $clients = DB::table('clients')->get();

        return view('eddy.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('eddy.create');
    }

    public function show($client)
    {

       $client = Client::find($client);
        return view('eddy.show', [
            'client' => $client

        ]);
    }
    public function edit($client)
    {
        $client = Client::find($client);

        return view('eddy.edit', [
            'client' => $client
        ]);
    }

    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'Kra_pin' => 'required',
            'national_ID' => 'required',
            'registration_no' => 'required',
            'policy_no' => 'required',
            'make_of_car' => 'required',
            'color' => 'required',
            'cover_type' => 'required',
            'year_of_manufacture' => 'required|date',
            'chasis_no' => 'required',
            'engine_no' => 'required',
            'cubic_capacity' => 'required',
            'basic_rate' => 'required',
            'excess_protector' => 'required',
            'political_risk' => 'required',
            'commencement_date' => 'required|date',
            'expiry_date' => 'required|date',

        ]);

        //persist the record
        $client = new Client();
        $client->name = request('name');
        $client->email = request('email');
        $client->address = request('address');
        $client->Kra_pin = request('Kra_pin');
        $client->national_ID = request('national_ID');
        $client->registration_no = request('registration_no');
        $client->policy_no = request('policy_no');
        $client->make_of_car = request('make_of_car');
        $client->color = request('color');
        $client->cover_type = request('cover_type');
        $client->year_of_manufacture = request('year_of_manufacture');
        $client->chasis_no = request('chasis_no');
        $client->engine_no = request('engine_no');
        $client->cubic_capacity = request('cubic_capacity');
        $client->basic_rate = request('basic_rate');
        $client->excess_protector = request('excess_protector');
        $client->political_risk = request('political_risk');
        $client->commencement_date = request('commencement_date');
        $client->expiry_date = request('expiry_date');
        $client->save();
        //redirect
        return redirect('/eddy');
    }
}
