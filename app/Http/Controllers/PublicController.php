<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $games=[
        ["id"=>1, "name"=>"Hogwarts Legacy", "genre"=>"Avventura", "console"=>"PS5", "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo perspiciatis non et quas corrupti unde, libero qui quasi fuga iusto sunt animi porro veritatis facere laudantium possimus explicabo alias pariatur?", "img"=>"/img/hog.jpg"], 
        ["id"=>2, "name"=>"Fifa 23", "genre"=>"Sport", "console"=>"PS4", "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo perspiciatis non et quas corrupti unde, libero qui quasi fuga iusto sunt animi porro veritatis facere laudantium possimus explicabo alias pariatur?", "img"=>"/img/fifa.jpg"],
        ["id"=>3, "name"=>"GTA V", "genre"=>"Azione", "console"=>"Xbox One", "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo perspiciatis non et quas corrupti unde, libero qui quasi fuga iusto sunt animi porro veritatis facere laudantium possimus explicabo alias pariatur?", "img"=>"/img/gta.jpg"],
    ];
   
    public function welcome () {
        return view('welcome', ["giochi"=>$this->games]);
    }

    public function createGame($idGame){
        foreach($this->games as $game){
            if($idGame==$game['id']){
              return view('gameDettaglio', ["unicoGioco"=>$game]); 
            }
        }
        
    }

    public function createForm(){
        return view('paginaForm'); 
    }

    public function contactUs(Request $request){
        // salvo nelle variabili l'input che hanno quei nomi
        $indirizzo= $request->input("email"); 
        $nomeCognome= $request->input("nameSurname"); 
        $messaggio= $request->input("message"); 
        $admin= "admin@noreply.it";

        // per inviare mail di ringraziamento al submit
        Mail::to($indirizzo)->send(new ContactMail($indirizzo, $nomeCognome, $messaggio));
        Mail::to($admin)->send(new AdminMail($messaggio, $nomeCognome, $indirizzo)); 
       
// caso di redirect sulla stessa pagina con messaggio alert
    //    return redirect(route('pageForm'))->with("alertmessage", "Grazie per averci contattato, email inviata con successo!"); 
// caso redirect alla pagina Thank you
            return redirect(route('pageThankYou', ["nameRedirect"=>$nomeCognome])); 



    }

    public function crateThankYou($nameRedirect){
        return view('paginaGrazie', ["nomeReindirizzato"=>$nameRedirect, "giochiProposti"=>$this->games]); 
    }
}
