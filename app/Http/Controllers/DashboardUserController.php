<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Domain;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{

    public function accueil(Request $request)
    {
        /*$countries = Country::All();*/
        //$page = Page::where('name', 'terms')->first();
        //$page = Page::where('id_page',1);
        dd(session());
        return view("user.accueil");

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

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'description' => 'required',
                'image'=>'required|file'
            ]);
            
            if ($validator->fails()) {
                return redirect('')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
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

    }
    
    
       
}
