<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("lots")->insert([

            ["num_lot"=>"11/2020/RDC/DAG/ACHAT","num_ao"=>"02/C/ELIT/2020","num_ap"=>"82 CV 0437 8400","fournisseur"=>"CBS","qte"=>"25","cout"=>"92750000","modele"=>"Esprimo p758 E95+","categorie_id"=>"1","marque_id"=>"4","dateAchat"=>"2021-07-8","created_at"=>"2021-08-25 13:08:13"],
            
            
            ["num_lot"=>"11/2020/RDC/DAG/ACHAT2","num_ao"=>"02/C/ELIT/2020","num_ap"=>"82 CV 0437 8400","fournisseur"=>"CBS","qte"=>"35","cout"=>"52750000","modele"=>"display 21+","categorie_id"=>"2","marque_id"=>"11","dateAchat"=>"2021-07-8","created_at"=>"2021-08-25 13:08:13"],
           

        ]);







    }
}
