<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function __invoke()
    {
        $clients = Client::latest()->paginate(15);
        return view('clients.index', compact('clients'));
    }
}
