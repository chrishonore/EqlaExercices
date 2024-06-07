<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\ques_vote;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {
        $imageCompetitions = Question::all(); // Récupère toutes les questions
        return view('imagesCompetition', compact('imageCompetitions'));
    }

    public function show($id)
    {
        $question = Question::find($id);
              return view('imageCompetition', ['question' => $question]);
    }


    // Autres méthodes pour créer, mettre à jour, supprimer, etc.
    // ...
}
