<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Insight;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function accueil(){
        $surveys = Survey::orderBy('id_survey', 'DESC')->paginate(5);
        $insights = Insight::paginate(5);
        //$data = User::paginate(5);
        return view('dielsurvey/accueil')->with(compact('insights','surveys'));
    }
}
