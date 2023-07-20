<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Team;
use App\Models\Domain;
use App\Models\Country;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function accueil(){

        $testimonials = Testimonial::where('statut','active')->get();
        return view('accueil')->with(compact('testimonials'));
    }

    public function compagny(){
     return view('projets');   
    }

    public function service(){
        return view('actualites');
    }
    public function accueildpi(){
        return view('accueil');
    }
    public function avis(){
        return view('avis');
    }

    public function offres(){
        return view('offres');
    }
    public function inscription(){
        return view('pages/inscription');
    }
    public function partener(){
        return view('pages/partener');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function marketing(){
        $services = Service::where('id_type_service', 1)->get();
        return view('pages/marketing')->with(compact('services'));
    }
    public function faq(){
        $faqs = Faq::All();
        return view('pages/faq')->with(compact('faqs'));
    }
    public function digital(){
        $services = Service::where('id_type_service', 3)->get();
        return view('pages/digital')->with(compact('services'));
    }
    public function finance(){
        $services = Service::where('id_type_service', 2)->get();
        return view('pages/finance')->with(compact('services'));
    }

    public function about(){
        $teams = Team::All();
        return view('pages/about')->with(compact('teams'));
    }
    public function privacy(){
        $page = Page::where('name', 'privacy_policy')->first();
        return view('pages/privacy_policy')->with(compact('page'));;
    }
    public function return(){
        $page = Page::where('name', 'r_r_policy')->first();
        return view('pages/return')->with(compact('page'));
    }
    public function shipping(){
        $page = Page::where('name', 'shipping_policy')->first();
        return view('pages/shipping_policy')->with(compact('page'));
    }
    
    public function terms(){
        $page = Page::where('name', 'terms')->first();
        return view('pages/terms')->with(compact('page'));
    }

    public function partner(){
        $countries = Country::All();
        $domains = Domain::All();
        return view('pages/partener')->with(compact('countries','domains'));
    }
    public function investwithus(){
        $countries = Country::All();
        $domains = Domain::All();
        return view('pages/invest_with_us')->with(compact('countries','domains'));
    }
    public function consultant(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('pages/consultant')->with(compact('countries','domains'));
    }
    public function founder(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('pages/founder')->with(compact('countries','domains'));
    }
    public function career(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('pages/career')->with(compact('countries','domains'));
    }
    public function sponsor(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('pages/sponsor')->with(compact('countries','domains'));
    }
    public function doBusiness(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('pages/do_business')->with(compact('countries','domains'));
    }

    public function becomeParticpent(){
        $countries = Country::All();
        $domains = Domain::All();  
        return view('dielsurvey/become_participent')->with(compact('countries','domains'));
    }


   
    
}
