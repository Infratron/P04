<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Homepage () {
        return view('Homepage');
    }

    public function Dettagli () {
        return view('dettaglio-utente');
        }
}
