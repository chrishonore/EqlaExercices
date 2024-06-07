<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuesVotesTable extends Migration
{
    public function up()
    {
        Schema::create('ques_votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id'); // L'id de la question liée
            $table->string('reponse'); // Le choix de réponse de l'utilisateur
            $table->timestamps();
        });

        // Ajoute une clé étrangère pour relier à la table "questions"
        Schema::table('ques_votes', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ques_votes');
    }
}
