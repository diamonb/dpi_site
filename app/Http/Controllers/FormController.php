<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Career;
use App\Models\Domain;
use App\Models\Invest;
use App\Mail\OrderMail;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Founder;
use App\Models\Service;
use App\Models\Sponsor;
use App\Mail\CareerMail;
use App\Mail\InvestMail;
use App\Mail\NotifyMail;
use App\Mail\ContactMail;
use App\Mail\FounderMail;
use App\Mail\SponsorMail;
use App\Mail\PartenerMail;
use App\Models\Dobusiness;
use App\Models\Newsletter;
use App\Models\Servicenow;
use App\Mail\ConultantMail;
use App\Models\Testimonial;
use App\Mail\DobusinessMail;
use App\Mail\NewsletterMail;
use App\Mail\ServicenowMail;
use Illuminate\Http\Request;
use App\Mail\participentMail;
use App\Mail\ServicenowMailFr;
use App\Models\PartenerWithUs;
use App\Mail\ContactNotifyMail;
use App\Mail\OrderNotificationMail;
use App\Mail\CareerMailNotification;
use App\Mail\InvestMailNotification;
use Illuminate\Support\Facades\Mail;
use App\Mail\FounderNotificationMail;
use App\Mail\SponsorMailNotification;
use App\Models\DielsurveyParticipent;
use App\Mail\PartenerNotificationMail;
use App\Mail\ConultantNotificationMail;
use App\Mail\DobusinessNotificationMail;
use App\Mail\NewsletterNotificationMail;
use App\Mail\ServicenowMailNotification;
use App\Mail\participentNotificationMail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
   

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
        ]);
        
        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('erreur_registration','Error during registration.'); 
        }
 
        $emp = new User;
 
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->password = $request->password;
        $emp->config_level = "first";
        $emp->id_user_type =1;
 
        if($emp->save()){
            Mail::to($emp->email)->send(new NotifyMail($emp->email,$emp->name));
            //Mail::to($emp->email)->send(new WelcomeMember($emp, $options));
            return redirect('mail-confirm')->with('status','Thanks for signing up, we value your business.')
            ->with('email',$emp->email)
            ->with('name',$emp->name);
        }else{
            return redirect()->with('erreur','Error during registration.'); 
        };
 
       
 
    }

    public function mail_confirm(Request $request)
    {
        return view("register.mail_confirm");
 
    }
    public function mail_confirmation(Request $request)
    {
        return view("register.mail_confirmation");
 
    }
    public function resgister_start_configuration(Request $request)
    {
        $countries = Country::All();
        $domains = Domain::All();
        return view("register.register_strat_configuration")->with(compact('countries','domains'));

    }

    public function dashboard(Request $request)
    {
        $countries = Country::All();
        $domains = Domain::All();
        return view("user.dashboard")->with(compact('countries','domains'));

    }


    public function savetestimonial(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:100',
            'last_name' => 'required',
            'domain' => 'required',
            'testimonial' => 'required',
            'photo' => 'required|image', //|mimes:jpg,png,jpeg,gif,svg|max:2048
        ]);


        $imageName = time().'.'.$request->photo->extension();  
       
        $request->photo->move('images/testimonial', $imageName);

        $path = base_path().'/images/testimonial/';
        $testimonial = new Testimonial;
 
        $testimonial->first_name = $request->first_name;
        $testimonial->last_name = $request->last_name;
        $testimonial->domain = $request->domain;    
        $testimonial->testimonial = $request->testimonial;
        $testimonial->photo = "/images/testimonial/".$imageName;
        $testimonial->statut = "no";

        if($testimonial->save()){
            //Mail::to($testimonial->email)->send(new ContactMail($testimonial->first_name));
            return view('confirm_testimonial')->with("success_testimonial","Message sent successfully")
                                     ->with('name',$testimonial->first_name);;
        }else{
            return redirect()->back()->with("erreur_testimonial","Error during saving");
        }

    }

    public function savecontact(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|max:100',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $reference = 'DPI_C_'.time();
        $contact = new Contact;
 
        $contact->full_name = $request->full_name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->reference = $reference;

        if($contact->save()){
            Mail::to($contact->email)->send(new ContactMail($contact->full_name,$reference));
            Mail::to('contact@dielpi.com')->send(new ContactNotifyMail($contact->email,$contact->full_name,$reference));
            return redirect()->back()->with("succes","Thank you, your request has been sent successfully!\n Our team will contact you shortly for assistance.")
                                     ->with('name',$contact->full_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }

    public function takeOrder(Request $request)
    {
        
        $validated = $request->validate([
            'full_name' => 'required|max:100',
            'email' => 'required|email',
            'town' => 'required',
            'number' => 'required',
        ]);
        $service =  Service::where('id_service', $request->service)->first();
        $Date = date("d-m-Y");  
        $Year = date("Y");
        $now = time();
        $order = new Order;
 
        $order->full_name = $request->full_name;
        $order->email = $request->email;
        $order->town = $request->town;
        $order->note = $request->note;
        $order->number = $request->number;
        $order->id_service = $request->service;
        $order->reference = $now;

        if($order->save()){
            Mail::to($order->email)->send(new OrderMail($order->full_name, $order->reference,$service->libelle,$service->id_service));
            Mail::to("order@dielpi.com")->send(new OrderNotificationMail($order->email, $order->reference,$service->libelle,$service->id_service));
            return redirect()->back()->with("succes","Thank you, your order ". $order->reference." has been submitted successfully!\n Our team will contact you shortly for assistance.")
                                     ->with('name',$order->full_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }
    
    public function subscibeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $newsletter = new Newsletter;
 
        $newsletter->email = $request->email;

        if($newsletter->save()){

            Mail::to($request->email)->send(new NewsletterMail($newsletter->email));
            Mail::to('newsletter@dielpi.com')->send(new NewsletterNotificationMail($newsletter->email));
            return redirect()->back()->with("success","Thank you, your subscription has been successfully submitted!");
                                     
        }else{

            return redirect()->back()->with("erreur","Error during saving");
        }

    }
    public function service_ch(Request $request,int $id_service)

    {
        //$request->session()->forget('service_id');
        
        $request->session()->put('service_id', [$id_service]);
        $service =  Service::where('id_service', $id_service)->first();
        return view('pages.service_select_form')->with(compact('service'));

    }
    public function takeService()

    {
        $countries = Country::All();
        return view('pages.take_service')->with(compact('countries'));

    }
    public function takeServiceFr()

    {
        $countries = Country::All();
        return view('pages.take_service_fr')->with(compact('countries'));

    }


    public function save_servicenow_service(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'session' => 'required',
            'experience_it' => 'required',
            'prefer_time' => 'required',
            'customization' => 'required',
            'number' => 'numeric',
        ]);
        $reference = 'DPI_ST_'.time();
        $servicenow = new Servicenow;
 
        $servicenow->name = $request->name;
        $servicenow->email = $request->email;
        $servicenow->session = $request->session;
        $servicenow->experience_it = $request->experience_it;
        $servicenow->prefer_time = $request->prefer_time;
        $servicenow->customization = $request->customization;
        $servicenow->number = $request->number;
        $servicenow->note = $request->note;
        $servicenow->country = $request->country;
        $servicenow->town = $request->town;
        $servicenow->statut = "no";


        if($servicenow->save()){
            Mail::to($servicenow->email)->send(new ServicenowMail($servicenow->name,$reference));
            Mail::to("training@dielpi.com")->send(new ServicenowMailNotification($servicenow->name,$reference));
            return redirect()->back()->with("succes","Thank you, your application referenced ".$reference." has been successfully submitted. 
            Our team will contact you to proceed with the enrollment process.")
                                     ->with('name',$servicenow->name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }

    public function save_servicenow_service_fr(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'session' => 'required',
            'experience_it' => 'required',
            'prefer_time' => 'required',
            'customization' => 'required',
            'number' => 'numeric',
        ]);
        $reference = 'DPI_STFR_'.time();
        $servicenow = new Servicenow;
 
        $servicenow->name = $request->name;
        $servicenow->email = $request->email;
        $servicenow->session = $request->session;
        $servicenow->experience_it = $request->experience_it;
        $servicenow->prefer_time = $request->prefer_time;
        $servicenow->customization = $request->customization;
        $servicenow->number = $request->number;
        $servicenow->note = $request->note;
        $servicenow->country = $request->country;
        $servicenow->town = $request->town;
        $servicenow->statut = "no";


        if($servicenow->save()){
            Mail::to($servicenow->email)->send(new ServicenowMailFr($servicenow->name,$reference));
            Mail::to("training@dielpi.com")->send(new ServicenowMailNotification($servicenow->name,$reference));
            return redirect()->back()->with("succes","Merci, votre demande référencée : ".$reference." a bien été soumise. 
            Notre équipe vous contactera pour procéder aux formalités d’enrôlement. Merci! Your application referenced")
                                     ->with('name',$servicenow->name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }

    public function save_do_business(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|max:255',
            'industry' => 'required|max:255'
            /*'business_area' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'tell_us' => 'required',
            'hear' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',*/
        ]);
        $reference = 'DPI_DB_'.time();
        $dobusiness = new Dobusiness;
 
        $dobusiness->company = $request->company;
        $dobusiness->industry = $request->industry;
        $dobusiness->business_area = $request->business_area;
        $dobusiness->business_long = $request->duration;
        $dobusiness->business_with = 1;
        $dobusiness->type = $request->type;
        $dobusiness->tell_us = $request->tell_us;
        $dobusiness->language = $request->language;
        $dobusiness->hear = $request->hear;
        $dobusiness->first_name = $request->first_name;
        $dobusiness->last_name = $request->last_name;
        $dobusiness->email = $request->email;
        $dobusiness->address = $request->country;
        $dobusiness->number = $request->number;
        $dobusiness->city = $request->city;
        $dobusiness->state = $request->city;
        $dobusiness->country = $request->country;
        $dobusiness->reference = $reference;


        if($dobusiness->save()){
            Mail::to($dobusiness->email)->send(new DobusinessMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("business@dielpi.com")->send(new DobusinessNotificationMail($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Do business with us” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }

     public function save_become_consultant(Request $request)
    {
       /* $validated = $request->validate([
            'company' => 'required|max:255',
            'industry' => 'required|max:255'
            /*'business_area' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'tell_us' => 'required',
            'hear' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);*/
        $reference = 'DPI_BC_'.time();
        $dobusiness = new Dobusiness;
 
        $dobusiness->company = $request->company;
        $dobusiness->industry = $request->industry;
        $dobusiness->business_area = $request->business_area;
        $dobusiness->business_long = $request->duration;
        $dobusiness->business_with = 1;
        $dobusiness->type = $request->type;
        $dobusiness->tell_us = $request->tell_us;
        $dobusiness->language = $request->language;
        $dobusiness->hear = $request->hear;
        $dobusiness->first_name = $request->first_name;
        $dobusiness->last_name = $request->last_name;
        $dobusiness->email = $request->email;
        $dobusiness->address = $request->country;
        $dobusiness->number = $request->number;
        $dobusiness->city = $request->city;
        $dobusiness->state = $request->city;
        $dobusiness->country = $request->country;
        $dobusiness->reference = $reference;


        /*if($dobusiness->save()){*/
            Mail::to($dobusiness->email)->send(new ConultantMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("consultant@dielpi.com")->send(new ConultantNotificationMail($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Become a consultant” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
       /* }else{
            return redirect()->back()->with("erreur","Error during saving");
        }*/

    }

    public function Becomme_partner(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|max:255',
            'industry' => 'required|max:255',
            'business_area' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'language' => 'required',
            'hear' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        $reference = 'DPI_BP_'.time();
        $partner = new PartenerWithUs;
 
        $partner->company = $request->company;
        $partner->industry = $request->industry;
        $partner->business_area = $request->business_area;
        $partner->business_long = $request->duration;
        $partner->partner_with = 1;
        $partner->type = $request->type;
        $partner->language = $request->language;
        $partner->hear = $request->hear;
        $partner->first_name = $request->first_name;
        $partner->last_name = $request->last_name;
        $partner->email = $request->email;
        $partner->address = $request->country;
        $partner->number = $request->number;
        $partner->city = $request->city;
        $partner->state = $request->city;
        $partner->country = $request->country;
        $partner->reference = $reference;


        if($partner->save()){
            Mail::to($partner->email)->send(new PartenerMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("partner@dielpi.com")->send(new PartenerNotificationMail($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Become a Partner” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }
    public function Save_founder(Request $request)
    {
        $validated = $request->validate([
            'how_much' => 'required',
            'language' => 'required',
            'hear' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        $reference = 'DPI_BF_'.time();
        $founder = new Founder;
 
        $founder->expectation = $request->expectation;
        $founder->founder_with = 1;
        $founder->language = $request->language;
        $founder->hear = $request->hear;
        $founder->first_name = $request->first_name;
        $founder->last_name = $request->last_name;
        $founder->email = $request->email;
        $founder->address = $request->country;
        $founder->number = $request->number;
        $founder->city = $request->city;
        $founder->state = $request->city;
        $founder->country = $request->country;
        $founder->reference = $reference;

        if($founder->save()){
            Mail::to($founder->email)->send(new FounderMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("investors@dielpi.com")->send(new FounderMailNotification($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Become a Founder application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }
       
    }

    public function Save_invest(Request $request)
    {
        $validated = $request->validate([
            'expectation' => 'required|max:255',
            'language' => 'required',
            'hear' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        $reference = 'DPI_INV_'.time();

        $invest = new Invest;
        $invest->how_much = 1;
        $invest->invest_with = 1;
        $invest->language = $request->language;
        $invest->hear = $request->hear;
        $invest->first_name = $request->first_name;
        $invest->last_name = $request->last_name;
        $invest->email = $request->email;
        $invest->address = $request->country;
        $invest->number = $request->number;
        $invest->city = $request->city;
        $invest->state = $request->city;
        $invest->country = $request->country;
        $invest->reference = $reference;
       
        if($invest->save()){
            Mail::to($invest->email)->send(new InvestMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("founder@dielpi.com")->send(new InvestMailNotification($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Invest with us” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }




    }

    public function Save_sponsors(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|max:255',
            'amount' => 'required',
            'motivation' => 'required',
            'recognition' => 'required',
            'hear' => 'required',
            'discuss'=>'required',
            'duration'=>'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);
        $reference = 'DPI_SD_'.time();
        $sponsor = new Sponsor;
 
        $sponsor->type = $request->type;
        $sponsor->amount = $request->amount;
        $sponsor->motivation = $request->motivation;
        $sponsor->recognition =  $request->recognition;
        $sponsor->discuss =  $request->discuss;
        $sponsor->duration = $request->duration;
        $sponsor->hear = $request->hear;
        $sponsor->first_name = $request->first_name;
        $sponsor->last_name = $request->last_name;
        $sponsor->email = $request->email;
        $sponsor->address = $request->country;
        $sponsor->number = $request->number;
        $sponsor->city = $request->city;
        $sponsor->state = $request->city;
        $sponsor->country = $request->country;
        $sponsor->reference = $reference;


        if($sponsor->save()){
            Mail::to($sponsor->email)->send(new SponsorMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("sponsor@dielpi.com")->send(new SponsorMailNotification($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Sponsor/Donate” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }

    public function Save_career(Request $request)
    {
        $validated = $request->validate([
            'field' => 'required',
            'tell_us'=> 'required',
            'experience' => 'required',
            'hear' => 'required',
            'language' => 'required',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
           // 'resume_link' => 'required|mimes:pdf,jpg,png' //|mimes:jpg,png,jpeg,gif,svg|max:2048
        ]);
        $reference = 'DPI_CA_'.time();
        $career = new Career;

        /*$imageName = time().'.'.$request->resume_link->extension();  
       
        $request->resume_link->move('images/career', $imageName);*/
 
        $career->education_level = $request->education_level;
        $career->field = $request->field;
        $career->experience = $request->experience;
        $career->tell_us = $request->tell_us;
        $career->language = $request->language;
        $career->hear = $request->hear;
        $career->first_name = $request->first_name;
        $career->last_name = $request->last_name;
        $career->email = $request->email;
        $career->address = $request->country;
        $career->number = $request->number;
        $career->city = $request->city;
        $career->state = $request->city;
        $career->linkedin = $request->linkedin;
        $career->resume_link =  "test";//"/images/career/".$imageName;
        $career->country = $request->country;
        $career->reference = $reference;


        if($career->save()){
            Mail::to($career->email)->send(new CareerMail($request->first_name." ".$request->last_name,$reference));
            Mail::to("career@dielpi.com")->send(new CareerMailNotification($request->first_name." ".$request->last_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Career” application process.')
                                     ->with('name',$request->first_name." ".$request->last_name);
        }else{
            return redirect()->back()->with("erreur","Error during saving");
        }

    }
    
    public function Save_dielsurvey_participent(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required|max:255',
            'full_name'=>'required'
        ]);
        $reference = 'PSurvey_'.time();
        $participent = new DielsurveyParticipent;

        /*$imageName = time().'.'.$request->resume_link->extension();  
       
        $request->resume_link->move('images/career', $imageName);*/

            Mail::to($request->email)->send(new participentMail($request->full_name,$reference));
            Mail::to("dielsurvey@dielpi.com")->send(new participentNotificationMail($request->full_name,$reference));
            return redirect()->back()->with("succes",'Thank you, your application referenced '.$reference.' has been submitted successfully. Our team will contact you to proceed with your “Become a participant” application process.')
                                     ->with('name',$request->full_name);
    }
    
}
