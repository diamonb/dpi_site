<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Insight;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function accueil(){
        $surveys = Survey::orderBy('id_survey', 'DESC')->where('statut', "no")->paginate(5);
        //$surveys = Survey::paginate(5)->where('statut', "no")->orderBy('id_survey', 'DESC')->get();
        $insights = Insight::paginate(5);
        //$data = User::paginate(5);
        return view('dielsurvey/accueil')->with(compact('insights','surveys'));
    }
    public function detail(int  $id){
        /*$shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();*/
        $shareComponent ="";
        $survey = Survey::where('id_survey', $id)->first();
        $insights = Insight::paginate(5);
        return view('dielsurvey/detail_survey')->with(compact('survey','insights','shareComponent'));
    }
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        
        return view('posts', compact('shareComponent'));
    }
}
