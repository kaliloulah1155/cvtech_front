<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Bibliocv;
use Carbon\Carbon;

class BibliocvController extends Controller
{
    public function store(Request $request){

       // dd($request->all());
        $validator = Validator::make($request->all(), [ 
            'nom' => 'required', 
            'prenoms' => 'required', 
            'email' => 'required|email', 
            'telephone' => 'required|numeric',
            'sexe' => 'required',  //sexe a ajouter dans le formulaire
            'pos_conv' => 'required', 
            'dom_comp' => 'required', 
            'disponibilite' => 'required',
            'vitae' => 'required|file|mimes:jpeg,jpg,png,pdf',
            'let_motiv' => 'file|mimes:jpeg,jpg,png,pdf',
            
        ]);
        if ($validator->fails()) { 
                return response()->json([
                    'status'=>400,
                    'error'=>$validator->errors()
                ],400);            
        }


        //traitement de données a inserer en base
        //insertion
        $current =Carbon::now();
        $data=[];
        $data[]=[
             'nom' => $request->nom,
            'prenoms'=>$request->prenoms,
            'email'=>$request->email,
            'telephone' => $request->telephone,
            'sexe'=>$request->sexe,
            'pos_conv'=>$request->pos_conv,
            'dom_comp'=>$request->dom_comp,
            'disponibilite'=>$request->disponibilite,
            //'vitae'=>$request->vitae,
            //'let_motiv'=>$request->let_motiv,
            'created_at'=>$current
        ];

         //////////traitement des doublons
         $record =\App\Bibliocv::where('email',$request->email)->first();

         if($record){
            //echo "trouvé";
            \App\Bibliocv::where('email',$request->email)->delete();
         }
        
        /////////////////////////////////
        $rq=DB::table('bibliocvs')->insert($data);
        $id = DB::getPdo()->lastInsertId();   //changer ce id par un identifiant unique 

        $idvitae=DB::table('bibliocvs')->where('id',$id)->latest('created_at')->update([
                'vitae'=>request()->vitae->store('uploads','public')
         ]);

         $idlet_motiv=DB::table('bibliocvs')->where('id',$id)->latest('created_at')->update([
                'let_motiv'=>request()->let_motiv->store('uploads','public')
         ]);
         $biblio =\App\Bibliocv::find($id);

        if($biblio){
           $data[]=[
                'documents' =>[
                       /* 'vitae'=> env('APP_URL').'/storage/'.$biblio['vitae'],
                        'let_motiv'=>env('APP_URL').'/storage/'.$biblio['let_motiv'], */
                        'vitae'=> $biblio['vitae'],
                        'let_motiv'=>$biblio['let_motiv'],
                    ]
            ];
            return response()->json([
                'status'=>200,
                'data'=>$data
            ],200);

        }else{
            return response()->json([
                'status'=>401,
                'data'=>'erreur de données'
            ],401);
        }

    }

    //Fiche des listes  + recherche

    public function format_data($model){

            $data=[];
           foreach ($model as $value) {
              // code...
                $data[]=[
                    "id"=> $value['id'],
                    "nom"=>$value['nom'],
                    "prenoms"=>$value['prenoms'],
                    "email"=>$value['email'],
                    "telephone"=>$value['telephone'],
                    "sexe"=>$value['sexe'],
                    "pos_conv"=>$value['pos_conv'],
                    "dom_comp"=>$value['dom_comp'],
                    "disponibilite"=>$value['disponibilite'],
                    "vitae"=>env('APP_URL').'/storage/'.$value['vitae'],
                    "let_motiv"=>env('APP_URL').'/storage/'.$value['let_motiv'],
                ]; 
            }

        return $data;
    }

    public function liste_cv(Request $request){ 

        $data=[];
        //critere de recherche  
        /* 
           nom , prenoms , domaine de competences , poste convoité
        */

        $nom = $request->nom;
        $prenoms=$request->prenoms;
        $dom_comp=$request->dom_comp;
        $poste_conv=$request->poste_conv;


        if($request->search >0){
            $biblio=NULL;
             

             //1-recherche par nom + prénom
           if( !empty($nom) AND !empty($nom)){

               $biblio=\App\Bibliocv::
                        where('nom', 'LIKE', '%'.$nom.'%')
                        ->where('prenoms', 'LIKE', '%'.$prenoms.'%')
                        ->orderBy('nom', 'asc')->get();

           }
           //2-recherche par domaine de competence + poste convoité
          if( !empty($dom_comp) AND !empty($poste_conv)){

               $biblio=\App\Bibliocv::
                       where('dom_comp', 'LIKE', '%'.$dom_comp.'%')
                       ->where('pos_conv', 'LIKE', '%'.$poste_conv.'%')
                        ->orderBy('nom', 'asc')->get();

           }
           //3-recherche par domaine de compétence
           if( !empty($dom_comp)){

               $biblio=\App\Bibliocv::
                       where('dom_comp', 'LIKE', '%'.$dom_comp.'%')
                        ->orderBy('nom', 'asc')->get();

           }  

            //4-recherche par poste convoité
           if( !empty($poste_conv)){
               $biblio=\App\Bibliocv::
                        where('pos_conv', 'LIKE', '%'.$poste_conv.'%')
                        ->orderBy('nom', 'asc')->get();

           }
/*
'link_cv'=> '',
'link_lettre_motiv'=>'' */

           if($biblio){

                ///format data
            $data=$this->format_data($biblio);
                
                return response()->json([
                        'status'=>200,
                        'lenght'=>count($biblio),
                        'data'=>$data,
                   ],200); 

           }else{

                 return response()->json([
                    'status'=>200,
                     'data'=>$data
                ],200); 

           }

        
        }else{
            $request['search']=0;
           
        }

 
        $biblio =\App\Bibliocv::get();

       ///format data
        $data=$this->format_data($biblio);

        return response()->json([
                'status'=>200,
                'lenght'=>count($biblio),
                'data'=>$data,

            ],200); 

    }




}


 
