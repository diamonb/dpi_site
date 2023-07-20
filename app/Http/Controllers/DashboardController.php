<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Team;
use App\Models\Domain;
use App\Models\Survey;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Insight;
use App\Models\Service;
use App\Models\Newsletter;
use App\Models\Servicenow;
use App\Models\Testimonial;
use App\Models\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    public function accueil()
    {
        return view("admin.accueil");
    }
    public function terms(Request $request)
    {
        /*$countries = Country::All();*/
        $page = Page::where('name', 'terms')->first();
        //$page = Page::where('id_page',1);
        return view("admin.update_terms")->with(compact('page'));

    }

    public function editTerms(Request $request)
    {
        if ($request->isMethod('post')) {

            $page =Page::where('id_page', $request->id_page)->first();
            $page->description = $request->description;
            if($page->update()){
                return redirect()->back()->with("succes","Updated successfuly");
            }else{
                return redirect()->back()->with("erreur","Error");
            }
        }         

    }

    public function privacyPolicy(Request $request)
    {
        /*$countries = Country::All();*/
        $page = Page::where('name', 'privacy_policy')->first();
        //$page = Page::where('id_page',1);
        return view("admin.update_privacy_policy")->with(compact('page'));

    }
    public function editPrivacyPolicy(Request $request)
    {
        if ($request->isMethod('post')) {

            $page =Page::where('id_page', $request->id_page)->first();
            $page->description = $request->description;
            if($page->update()){
                return redirect()->back()->with("succes","Updated successfuly");
            }else{
                return redirect()->back()->with("erreur","Error");
            }
        }
       
        

    }

    public function shippingPolicy(Request $request)
    {
        /*$countries = Country::All();*/
        $page = Page::where('name', 'shipping_policy')->first();
        //$page = Page::where('id_page',1);
        return view("admin.update_shipping_policy")->with(compact('page'));

    }
    public function editShippingPolicy(Request $request)
    {
        if ($request->isMethod('post')) {

            $page =Page::where('id_page', $request->id_page)->first();
            $page->description = $request->description;
            if($page->update()){
                return redirect()->back()->with("succes","Updated successfuly");
            }else{
                return redirect()->back()->with("erreur","Error");
            }
        }
       
        

    }

    public function rRPolicy(Request $request)
    {

        $page = Page::where('name', 'r_r_policy')->first();
        return view("admin.update_r_r_policy")->with(compact('page'));

    }
    public function editRRPolicy(Request $request)
    {
        if ($request->isMethod('post')) {

            $page =Page::where('id_page', $request->id_page)->first();
            $page->description = $request->description;
            if($page->update()){
                return redirect()->back()->with("succes","Updated successfuly");
            }else{
                return redirect()->back()->with("erreur","Error");
            }
        }
       
        

    }

    public function listContact(Request $request)
    {

        $contacts = Contact::All();
        return view("admin.list_contact")->with(compact('contacts'));

    }
    public function listNewsletter(Request $request)
    {

        $newsletters = Newsletter::All();
        return view("admin.list_newsletter")->with(compact('newsletters'));

    }
    public function listTestimonial(Request $request)
    {

        $testimonials = Testimonial::where('statut','no')->get();
        return view("admin.list_testimonial")->with(compact('testimonials'));

    }

    public function shareTestimonial(Request $request)
    {

        if ($request->isMethod('post')) {

            $testimonial =Testimonial::where('id_testimonial', $request->id_testimonial)->first();
            
            $testimonial->statut = "active";
            if($testimonial->update()){
                return redirect()->back()->with("success","Updated successfuly");
            }else{
                return redirect()->back()->with("erreur","Error");
            }
        }      

    }


    public function addSurvey()
    {

        return view("admin.add_survey");

    }
    public function addInsight()
    {

        return view("admin.add_insight");

    }
    public function storeSurvey(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255|unique:surveys',
                'description' => 'required',
                'link'=>'required',
                'image' => 'required|image',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }
     
            $imageName = time().'.'.$request->image->extension();  
       
            $request->image->move('images/survey', $imageName);

            $survey = new Survey;
     
            $survey->title = $request->title;
            $survey->description = $request->description;
            $survey->image = "/images/survey/".$imageName;
            $survey->link = $request->link;
            $survey->statut = "no";

            if($survey->save()){
                return redirect()->back()->with("succes","Survey saved");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       
              

    }

    

    public function addFaq()
    {

        return view("admin.add_faq");

    }
    public function listFaq()
    {
        $faqs = Faq::All();
        return view("admin.list_faq")->with(compact('faqs'));

    }
    public function storeFaq(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'response' => 'required',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }

            $faq = new Faq;
     
            $faq->question = $request->question;
            $faq->response = $request->response;

            if($faq->save()){
                return redirect()->back()->with("succes","FAQ saved");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       
              

    }
    public function storeInsight(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'description' => 'required',
                'file'=>'required|file'
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }
     
            $fileName = time().'.'.$request->file->extension();  
       
            $request->file->move('files/insight', $fileName);

            $insight = new Insight;
     
            $insight->title = $request->title;
            $insight->description = $request->description;
            $insight->file = "/files/insight/".$fileName;
            $insight->statut = "no";

            if($insight->save()){
                return redirect()->back()->with("succes","Insight saved");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       
        

    }
    public function listSurvey()
    {

        $surveys = Survey::All();
        return view("admin.list_survey")->with(compact('surveys'));

    }

    public function deleteSurvey(Request $request)
    {
        $survey = Survey::where('id_survey', $request->id_survey)->first();
        $survey->delete();
        return redirect()->route('list_survey')->with("succes","Survey deleted successfuly");
    }

    public function deleteMember(Request $request)
    {
        $member = Team::where('id_team', $request->id_team)->first();
        $member->delete();
        return redirect()->route('list_team')->with("succes","Member deleted successfuly");
    }
    public function listInsight()
    {

        $insights = Insight::All();
        return view("admin.list_insight")->with(compact('insights'));

    }

    public function addService()
    {
        $typeservices = TypeService::All();

        return view("admin.add_service")->with(compact('typeservices'));

    }

    public function storeService(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'libelle' => 'required|max:255',
                'description' => 'required',
                'application_fee' => 'required',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }
     

            $service = new Service;
     
            $service->libelle = $request->libelle;
            $service->description = $request->description;
            $service->application_fee = $request->application_fee;
            $service->service_price = $request->service_price;
            $service->id_type_service = $request->typeservice;
            $service->statut = "no";

            if($service->save()){
                return redirect()->back()->with("succes","Service saved");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       
        

    }
    public function editService(Request $request)
    {
        $typeservices = TypeService::All();
        $service = Service::where('id_service', $request->service)->first();
        return view("admin.update_service")->with(compact('service','typeservices'));
    }

    public function updateService(Request $request)
    {
        $typeservices = TypeService::All();
        $service = Service::where('id_service', $request->id_service)->first();

        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'libelle' => 'required|max:255',
                'description' => 'required',
                'application_fee' => 'required',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during update.'); 
            }
     
            $service->libelle = $request->libelle;
            $service->description = $request->description;
            $service->application_fee = $request->application_fee;
            $service->service_price = $request->service_price;
            $service->id_type_service = $request->typeservice;

            if($service->update()){
                return redirect()->route('list_service')->with("succes","Service update successfuly");
            }else{
                return redirect()->back()->with("erreur","Error during updat");
            }
        }
    }
    public function listService()
    {

        $services = Service::All();
        return view("admin.list_service")->with(compact('services'));

    }

    public function servicesSubscription()
    {

        $servicenows = Servicenow::All();
        $countries = Country::All();
        return view("admin.list_service_subscription")->with(compact('servicenows','countries'));

    }

    public function listTeam()
    {

        $teams = Team::All();
        return view("admin.list_leadership")->with(compact('teams'));

    }

    public function addTeamMember()
    {
        $typeservices = TypeService::All();

        return view("admin.add_leadership")->with(compact('typeservices'));

    }

    public function storeTeamMember(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'full_name' => 'required|max:255',
                'profil' => 'required|max:255',
                'description' => 'required',
                'photo' => 'required|max:255',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }
            $imageName = time().'.'.$request->photo->extension();  
       
            $request->photo->move('images/team', $imageName);
     

            $team = new Team;
     
            $team->full_name = $request->full_name;
            $team->profil = $request->profil;
            $team->description = $request->description;
            $team->photo = "/images/team/".$imageName;
            $team->linkedin = $request->linkedin_link;
            $team->twitter = $request->twitter_link;
            $team->facebook = $request->facebook_link;

            if($team->save()){
                return redirect()->back()->with("succes","Team member saved");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       

    }

    
    public function listSnowSubscribe()
    {

        $servicenows = Servicenow::All();
        return view("admin.list_snow_subscribe")->with(compact('servicenows'));

    }
     
    
       
}
