<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Ipconfig;
use Alert;
use App\Http\Controllers\BibliocvController;

class CreatedController extends Controller
{

     protected $ipconfig;
     protected $launchApi;
     

    public function __construct(Ipconfig $ipconfig,BibliocvController $launchApi ){
        $this->ipconfig=$ipconfig;
        $this->launchApi=$launchApi;
    }

    public function index(){

        return view('created');
    }

    public function store(Request $request){

        $ipadress_api=$this->ipconfig->ipadress();
        $reponseDt= $this->launchApi->store($request);
        $response= $reponseDt->getData();

        if($response->status ==200){
            Alert::success("Votre demande a été enregistrée avec succès ")->persistent('Fermer');

        }else{
            Alert::error("Une error a été produite")->persistent('Fermer');
        }

        return redirect()->back();
       
    }
}
