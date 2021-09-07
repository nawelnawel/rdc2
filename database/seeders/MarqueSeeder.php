<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("marques")->insert([
            ["nom"=>"Alfatron","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"condor","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"hp","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"fujitsu","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"compaq","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"dell","categorie_id"=>"1","created_at"=>"2021-08-25 13:08:13"],

            ["nom"=>"acer","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"aoc","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"condor","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"dell","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"fujitsu","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"hp","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"samsung","categorie_id"=>"2","created_at"=>"2021-08-25 13:08:13"],

            ["nom"=>"brother","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"hp","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"kyocera","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"lexmark","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"panasonic","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"versalink","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"xerox","categorie_id"=>"3","created_at"=>"2021-08-25 13:08:13"]
        ]);
    }
}
