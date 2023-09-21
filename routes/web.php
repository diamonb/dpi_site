<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DielBusinessNewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AccueilController::class,'accueil'])->name('accueil');

Route::get('invest_with_us', [AccueilController::class,'investwithus'])->name('investwithus');
Route::get('partner_with_us', [AccueilController::class,'partner'])->name('partner');
Route::get('become_consultant', [AccueilController::class,'consultant'])->name('consultant');
Route::get('become_founder', [AccueilController::class,'founder'])->name('founder');
Route::get('career', [AccueilController::class,'career'])->name('career');
Route::get('sponsor', [AccueilController::class,'sponsor'])->name('sponsor');
Route::get('do_business_with_us', [AccueilController::class,'doBusiness'])->name('dobusiness');
Route::get('client_application', [AccueilController::class,'becomeClient'])->name('becomeclient');
Route::get('/fund_your_business', [AccueilController::class,'fund'])->name('fund');
Route::post('saveservicenowservice', [FormController::class,'save_servicenow_service'])->name('saveservicenowservice'); 
Route::post('saveservicenowservice_fr', [FormController::class,'save_servicenow_service_fr'])->name('saveservicenowservicefr');
Route::post('fundbusiness', [FormController::class,'fund_business'])->name('fund_business');



Route::any('dielsurvey/become_participant', [AccueilController::class,'becomeParticpent'])->name('becomeparticipent');


Route::get('marketing', [AccueilController::class,'marketing'])->name('marketing');
Route::get('finance', [AccueilController::class,'finance'])->name('finance');
Route::get('digital_services', [AccueilController::class,'digital'])->name('digital');

Route::post('services_ch/{id_service}',[FormController::class,'service_ch'])->name('service_choose');
Route::get('services_ch/{id_service}',[FormController::class,'service_ch'])->name('service_choose');
Route::get('service/snowtraining',[FormController::class,'takeService'])->name('take_service');
Route::get('service/fr/snowtraining',[FormController::class,'takeServiceFr'])->name('take_service_fr');

Route::post('service/saveorder',[FormController::class,'takeOrder'])->name('save_order');


Route::get('contact', [AccueilController::class,'contact'])->name('contact');
Route::post('contact', [FormController::class,'savecontact'])->name('savecontact');

Route::get('/compagny', [AccueilController::class,'compagny'])->name('compagny');
Route::get('/#service', [AccueilController::class,'service'])->name('service');
Route::get('/#dpi', [AccueilController::class,'accueil'])->name('accueildpi');
Route::get('/#marketing', [AccueilController::class,'accueil'])->name('accueilmarketing');
Route::get('/#finance', [AccueilController::class,'accueil'])->name('accueilfinance');
Route::get('/#digital', [AccueilController::class,'accueil'])->name('accueildigital');
Route::get('/#about', [AccueilController::class,'accueil'])->name('accueilabout'); 
Route::get('/#reference', [AccueilController::class,'accueil'])->name('accueilreference');

Route::post('subscribe_newsletter', [FormController::class, 'subscibeNewsletter'])->name('subscibe_newsletter');


Route::post('/do_business', [FormController::class,'save_do_business'])->name('do_business');
Route::post('/become_consultant', [FormController::class,'save_become_consultant'])->name('become_consultant');
Route::post('/savepartner', [FormController::class,'Becomme_partner'])->name('savepartner'); 
Route::post('/savefounder', [FormController::class,'Save_founder'])->name('savefounder');
Route::post('/saveinvest', [FormController::class,'Save_invest'])->name('saveinvest');
Route::post('/savesponsor', [FormController::class,'Save_sponsors'])->name('savesponsors');
Route::post('/savecareer', [FormController::class,'Save_career'])->name('savecareer');
Route::post('/saveparticipent', [FormController::class,'Save_dielsurvey_participent'])->name('saveparticipent');
Route::post('/saveclient', [FormController::class,'Save_client'])->name('saveclient');




// terms

Route::get('/privacy', [AccueilController::class,'privacy'])->name('privacypolicy');
Route::get('/return', [AccueilController::class,'return'])->name('returnpolicy');
Route::get('/shipping', [AccueilController::class,'shipping'])->name('shippingpolicy');
Route::get('/terms', [AccueilController::class,'terms'])->name('termspolicy');
Route::get('/faq', [AccueilController::class,'faq'])->name('faq');

Route::get('testimonial', [AccueilController::class,'testimonial'])->name('testimonial');
Route::post('testimonial', [FormController::class,'savetestimonial'])->name('testimonial');

//

Route::get('/#offres', [AccueilController::class,'offres'])->name('offres');

Route::get('/mail-confirm', [FormController::class,'mail_confirm'])->name('mail_confirm');

Route::get('/mail-confirmation', [FormController::class,'mail_confirmation'])->name('mail_confirmation');
Route::post('/resgister-start-configuration', [FormController::class,'resgister_start_configuration'])->name('resgister_start_configuration');
Route::post('/dashboard', [FormController::class,'dashboard'])->name('activate_dashboard');


Route::post('register-form', [FormController::class, 'register'])->name('register_form');
Route::post('subscribe_newsletter', [FormController::class, 'subscibeNewsletter'])->name('subscibe_newsletter');

//
Route::get('/about', [AccueilController::class,'about'])->name('about');
Route::get('/about#vmvo', [AccueilController::class,'about'])->name('about_vmvo');
Route::get('/about#company', [AccueilController::class,'about'])->name('about_company');
Route::get('/about#leadership', [AccueilController::class,'about'])->name('about_leadership');
Route::get('/about#when_call', [AccueilController::class,'about'])->name('about_when_call');

//
Route::get('/avis', [AccueilController::class,'avis'])->name('avis');
Route::get('/dielshop', [ShopController::class,'accueil'])->name('dielshop');

Route::get('/dielsurvey', [SurveyController::class,'accueil'])->name('dielsurvey');
Route::get('/dielsurvey/{id}', [SurveyController::class,'detail'])->name('detail_survey');

Route::get('/social-media-share', [SurveyController::class,'ShareWidget']);

// DielBusinessNew 
Route::get('/dielBusinessNews', [DielBusinessNewController::class,'index'])->name('diel_business_news');
Route::get('/dielBusinessNews/{id}', [DielBusinessNewController::class,'detail'])->name('detail_diel_business_news');
Route::get('dashboard/DielBusinessNews', [DielBusinessNewController::class,'index'])->name('bnew_list');
Route::get('dashboard/DielBusinessNews', [DielBusinessNewController::class,'create'])->name('add_news');
Route::post('dashboard/DielBusinessNews', [DielBusinessNewController::class,'store'])->name('add_news');

//User dashboard
Route::get('/user_dashboard', [DashboardUserController::class,'accueil'])->name('dashboardUser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// dashboard admin
Route::get('dashboard/add_survey', [DashboardController::class,'addSurvey'])->name('add_survey');
Route::post('dashboard/store_survey', [DashboardController::class,'storeSurvey'])->name('store_survey');
Route::get('dashboard/list_survey', [DashboardController::class,'listSurvey'])->name('list_survey'); 
Route::post('dashboard/delete_survey', [DashboardController::class,'deleteSurvey'])->name('delete_survey');
Route::post('dashboard/delete_member', [DashboardController::class,'deleteMember'])->name('delete_member');

Route::get('dashboard/add_insight', [DashboardController::class,'addInsight'])->name('add_insight');
Route::post('dashboard/store_insight', [DashboardController::class,'storeInsight'])->name('store_insight');
Route::get('dashboard/list_insight', [DashboardController::class,'listInsight'])->name('list_insight'); 

Route::get('dashboard/add_faq', [DashboardController::class,'addFaq'])->name('add_faq'); 
Route::post('dashboard/store_faq', [DashboardController::class,'storeFaq'])->name('store_faq');
Route::get('dashboard/list_faq', [DashboardController::class,'listFaq'])->name('list_faq'); 
Route::post('dashboard/store_categorie_faq', [DashboardController::class,'storeCategorieFaq'])->name('store_categorie_faq');
Route::get('dashboard/add_categorie_faq', [DashboardController::class,'addCategorieFaq'])->name('add_categorie_faq'); 


Route::get('dashboard/add_service', [DashboardController::class,'addService'])->name('add_service');
Route::post('dashboard/store_service', [DashboardController::class,'storeService'])->name('store_service');
Route::get('dashboard/list_service', [DashboardController::class,'listService'])->name('list_service'); 
Route::post('dashboard/update_service', [DashboardController::class,'updateService'])->name('update_service'); 
Route::post('dashboard/edit_service', [DashboardController::class,'editService'])->name('edit_service'); 


Route::get('dashboard/add_type_service', [DashboardController::class,'addTypeService'])->name('add_type_service');



Route::get('dashboard/update_terms', [DashboardController::class,'terms'])->name('update_terms');
Route::post('dashboard/edit_terms', [DashboardController::class,'editTerms'])->name('EditTerms');

Route::get('dashboard/update_privacy_policy', [DashboardController::class,'privacyPolicy'])->name('update_privacy_policy');
Route::post('dashboard/edit_privacy_policy', [DashboardController::class,'editPrivacyPolicy'])->name('edit_privacy_policy');

Route::get('dashboard/update_shipping_policy', [DashboardController::class,'shippingPolicy'])->name('update_shipping_policy');
Route::post('dashboard/edit_shipping_policy', [DashboardController::class,'editShippingPolicy'])->name('edit_shipping_policy');

Route::get('dashboard/update_r_r_policy', [DashboardController::class,'rRPolicy'])->name('update_r_r_policy');
Route::post('dashboard/edit_r_r_policy', [DashboardController::class,'editRRPolicy'])->name('edit_r_r_policy');

Route::get('en/dashboardDPIL', [DashboardController::class,'accueil'])->name('dashboard_admin_accueil');

Route::get('dashboard/list_contact', [DashboardController::class,'listContact'])->name('list_contact');
Route::get('dashboard/list_newsletter', [DashboardController::class,'listNewsletter'])->name('list_newsletter');
Route::get('dashboard/list_testimonial', [DashboardController::class,'listTestimonial'])->name('list_testimonial');
Route::post('dashboard/share_testimonial', [DashboardController::class,'shareTestimonial'])->name('share_testimonial');
Route::get('dashboard/list_snow_subscribe', [DashboardController::class,'listSnowSubscribe'])->name('list_snow_subscribe');

Route::get('dashboard/list_team', [DashboardController::class,'listTeam'])->name('list_team');
Route::get('dashboard/add_team_member', [DashboardController::class,'addTeamMember'])->name('add_team_member');
Route::post('dashboard/add_team_member', [DashboardController::class,'storeTeamMember'])->name('store_team_member');


Route::get('dashboard/services_subscription', [DashboardController::class,'servicesSubscription'])->name('services_subscription'); 
Route::get('dashboard/order_subscription', [DashboardController::class,'OrderSubscription'])->name('order_subscription');

// applications listview
Route::get('dashboard/client_application_listview', [DashboardController::class,'listViewClient'])->name('list_view_client');
Route::get('dashboard/do_business_list_view', [DashboardController::class,'listViewDobusiness'])->name('list_view_do_business');


Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
require __DIR__.'/auth.php';
