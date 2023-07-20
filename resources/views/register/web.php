<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('accueil');
});
*/
// ----------

Route::get('send-email', [SendEmailController::class, 'index']);
Route::get('/', [AccueilController::class,'accueil'])->name('accueil');
Route::get('/inscription', [AccueilController::class,'inscription'])->name('inscription');
Route::get('/partener', [AccueilController::class,'partener'])->name('partener');
Route::get('contact', [AccueilController::class,'contact'])->name('contact');
Route::post('contact', [FormController::class,'savecontact'])->name('savecontact');

Route::get('marketing', [AccueilController::class,'marketing'])->name('marketing');
Route::get('finance', [AccueilController::class,'finance'])->name('finance');
Route::get('digital', [AccueilController::class,'digital'])->name('digital');

Route::get('testimonial', [AccueilController::class,'testimonial'])->name('testimonial');
Route::post('testimonial', [FormController::class,'savetestimonial'])->name('testimonial');

Route::get('/compagny', [AccueilController::class,'compagny'])->name('compagny');
Route::get('/#service', [AccueilController::class,'service'])->name('service');
Route::get('/#dpi', [AccueilController::class,'accueil'])->name('accueildpi');
Route::get('/#marketing', [AccueilController::class,'accueil'])->name('accueilmarketing');
Route::get('/#finance', [AccueilController::class,'accueil'])->name('accueilfinance');
Route::get('/#digital', [AccueilController::class,'accueil'])->name('accueildigital');
Route::get('/#about', [AccueilController::class,'accueil'])->name('accueilabout'); 
Route::get('/#reference', [AccueilController::class,'accueil'])->name('accueilreference');

Route::get('/about', [AccueilController::class,'about'])->name('about');
Route::get('/about#vmvo', [AccueilController::class,'about'])->name('about_vmvo');
Route::get('/about#company', [AccueilController::class,'about'])->name('about_company');
Route::get('/about#leadership', [AccueilController::class,'about'])->name('about_leadership');
Route::get('/about#when_call', [AccueilController::class,'about'])->name('about_when_call');



Route::get('/avis', [AccueilController::class,'avis'])->name('avis');
Route::get('/dielshop', [ShopController::class,'accueil'])->name('dielshop');
Route::get('/dielsurvey', [SurveyController::class,'accueil'])->name('dielsurvey');


// terms

Route::get('/privacy', [AccueilController::class,'privacy'])->name('privacypolicy');
Route::get('/return', [AccueilController::class,'return'])->name('returnpolicy');
Route::get('/shipping', [AccueilController::class,'shipping'])->name('shippingpolicy');
Route::get('/terms', [AccueilController::class,'terms'])->name('termspolicy');

//

Route::get('/#offres', [AccueilController::class,'offres'])->name('offres');

Route::get('/mail-confirm', [FormController::class,'mail_confirm'])->name('mail_confirm');

Route::get('/mail-confirmation', [FormController::class,'mail_confirmation'])->name('mail_confirmation');
Route::post('/resgister-start-configuration', [FormController::class,'resgister_start_configuration'])->name('resgister_start_configuration');
Route::post('/dashboard', [FormController::class,'dashboard'])->name('activate_dashboard');


Route::post('register-form', [FormController::class, 'register'])->name('register_form');
Route::post('subscribe_newsletter', [FormController::class, 'subscibeNewsletter'])->name('subscibe_newsletter');

// dashoard

Route::get('dashboard/update_terms', [DashboardController::class,'terms'])->name('update_terms');
Route::post('dashboard/edit_terms', [DashboardController::class,'editTerms'])->name('EditTerms');

Route::get('dashboard/update_privacy_policy', [DashboardController::class,'privacyPolicy'])->name('update_privacy_policy');
Route::post('dashboard/edit_privacy_policy', [DashboardController::class,'editPrivacyPolicy'])->name('edit_privacy_policy');

Route::get('dashboard/update_shipping_policy', [DashboardController::class,'shippingPolicy'])->name('update_shipping_policy');
Route::post('dashboard/edit_shipping_policy', [DashboardController::class,'editShippingPolicy'])->name('edit_shipping_policy');

Route::get('dashboard/update_r_r_policy', [DashboardController::class,'rRPolicy'])->name('update_r_r_policy');
Route::post('dashboard/edit_r_r_policy', [DashboardController::class,'editRRPolicy'])->name('edit_r_r_policy');

Route::get('dashboard/list_contact', [DashboardController::class,'listContact'])->name('list_contact');
Route::get('dashboard/list_newsletter', [DashboardController::class,'listNewsletter'])->name('list_newsletter');
Route::get('dashboard/list_testimonial', [DashboardController::class,'listTestimonial'])->name('list_testimonial');
Route::post('dashboard/share_testimonial', [DashboardController::class,'shareTestimonial'])->name('share_testimonial');



