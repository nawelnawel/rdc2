<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("materiel_id")->constrained();
            $table->foreignId("personnel_id")->constrained();
            $table->date("dateDebut");
            $table->timestamps();
    
    
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affectations', function(Blueprint $table){
            $table->dropForeign(["personnel_id", "materiel_id"]);
        });

        Schema::dropIfExists('affectations');
    }
}
