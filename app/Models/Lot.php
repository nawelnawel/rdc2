<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;
    protected $fillable = ["num_lot","num_ao","num_ap","fournisseur","qte","cout","categorie_id","marque_id","modele","dateAchat"];
   
    public function Categorie (){ 
        return $this ->belongsTo(Categorie::class);
    }
    public function Marque (){ 
        return $this ->belongsTo(Marque::class);
    }

    public function scopeSearch($query,$term){
        $term="%$term%";
        $query->where(function($query) use ($term){
            $query->where('modele','like',$term)
                   ->orWhere('num_lot','like',$term);
                  
        });
    
    }
}

