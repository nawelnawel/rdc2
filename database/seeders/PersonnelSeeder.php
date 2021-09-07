<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnels")->insert([

            ["nom"=>"khelil","prenom"=>"nawel","adresse"=>"tizi ouzou","email"=>"khelil@gmail.com","telephone"=>"0556161526","pieceIdentite"=>"1","numeroPieceIdentite"=>"5595+","structure_id"=>"4","created_at"=>"2021-08-25 13:08:13"],
            
            
            ["nom"=>"kasmi","prenom"=>"kenza","adresse"=>"boumerdess","email"=>"kasmi@gmail.com","telephone"=>"0556161527","pieceIdentite"=>"2","numeroPieceIdentite"=>"559566","structure_id"=>"5","created_at"=>"2021-08-25 13:08:13"],

        ]);
    }
}
