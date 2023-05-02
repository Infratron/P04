<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function Homepage () {
        return view('Homepage');
    }

    public function Dettagli () {
        return view('dettaglio-utente');
        }
        
    public function Contattaci () {
            return view('Contattaci');
            }

    public function Contattacci_submit(Request $request){
        $name = $request->input('name');
        $email = $request->email;
        $user_message = $request->user_message;

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message));

        } catch(Exception $error){
            return redirect()->back()->with('emailError', 'Problema di invio mail riprova tra qualche minuto');
        }

        return redirect(route('Homepage'))->with('emailSent', 'Abbiamo ricevuto la tua e-mail, ti rincontatteremo il prima possibile');
        
    }
    }
