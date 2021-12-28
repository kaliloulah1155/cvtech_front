<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Http\Controllers\BibliocvController;

class SearchController extends Controller
{
     protected $launchApi;
    public function __construct(BibliocvController $launchApi ){
        $this->launchApi=$launchApi;
    }

    public function index(){

        return view('search');
    }

    public function list_cv(Request $request){

         $reponseDt= $this->launchApi->liste_cv($request);
          $response= $reponseDt->getData();

         if($response->status ==200){
             return response()->json([
                        $response,
                   ],200); 
       }

         
    }
}
