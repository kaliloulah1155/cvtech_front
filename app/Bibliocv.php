<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliocv extends Model
{
    
    protected $table="bibliocvs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'nom', 'prenoms','email','telephone','sexe','pos_conv','dom_comp','disponibilite','vitae','let_motiv'
    ];
}


 
