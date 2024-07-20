<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function __invoke()
    {
        $clients = Client::latest()->paginate(15);
        return view('clients.index', compact('clients'));
    }
}
