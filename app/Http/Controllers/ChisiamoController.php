<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChisiamoController extends Controller
{

    public $utenti = 
        [
            ['id'=> 1, 'name'=> 'Mario', 'surname'=>'Rossi', 'age'=> 25, 'materia' => 'CSS'],
            ['id'=> 2, 'name'=> 'Filippo', 'surname'=>'Tedeshi', 'age'=> 42, 'materia' => 'Javascript'],
            ['id'=> 3, 'name'=> 'Manuel', 'surname'=>'Genovesi', 'age'=> 30, 'materia' => 'HTML'],
            ['id'=> 4, 'name'=> 'Sara', 'surname'=>'Pileio', 'age'=> 27, 'materia' => 'Laravel'],  
        ];

    public function index () {
    
        return view('chisiamo', ['users' => $this->utenti]);
    }

    public function show ($id){
        // recupero l'user che ha scelto l'utente
            foreach($this->utenti as $utente){
        
                if($id == $utente['id']){
                    return view('dettaglio-utente', ['utente' => $utente]);
                }
        
            };
        
        }
}

