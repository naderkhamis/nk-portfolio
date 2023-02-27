<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

######################################## CAREER-API-CONTROLLER ROUTES #########################################

Route::resource('career-api', 'Api\CareerApiController');

######################################## /CAREER-API-CONTROLLER ROUTES ########################################

######################################## CERTIFICATES-API-CONTROLLER ROUTES #########################################

Route::resource('certificates-api', 'Api\CertificateApiController');

######################################## /CERTIFICATES-API-CONTROLLER ROUTES ########################################

######################################## CLIENTS-REVIEWS-API-CONTROLLER ROUTES #########################################

Route::resource('clients-reviews-api', 'Api\ClientReviewApiController');

######################################## /CLIENTS-REVIEWS-API-CONTROLLER ROUTES ########################################

######################################## CONTACT-INFORMATION-API-CONTROLLER ROUTES #########################################

Route::resource('contact-information-api', 'Api\ContactInformationApiController');

######################################## /CONTACT-INFORMATION-API-CONTROLLER ROUTES ########################################

######################################## PERSONAL-INFORMATION-API-CONTROLLER ROUTES #########################################

Route::resource('personal-information-api', 'Api\PersonalInformationApiController');

######################################## /PERSONAL-INFORMATION-API-CONTROLLER ROUTES ########################################

######################################## PROCESSES-API-CONTROLLER ROUTES #########################################

Route::resource('processes-api', 'Api\ProcessApiController');

######################################## /PROCESSES-API-CONTROLLER ROUTES ########################################

######################################## PROJECTS-API-CONTROLLER ROUTES #########################################

Route::resource('projects-api', 'Api\ProjectApiController');

######################################## /PROJECTS-API-CONTROLLER ROUTES ########################################

######################################## SERVICES-API-CONTROLLER ROUTES #########################################

Route::resource('services-api', 'Api\ServiceApiController');

######################################## /SERVICES-API-CONTROLLER ROUTES ########################################

######################################## SKILLS-API-CONTROLLER ROUTES #########################################

Route::resource('skills-api', 'Api\SkillApiController');

######################################## /SKILLS-API-CONTROLLER ROUTES ########################################

######################################## SOCIAL-ACCOUNTS-API-CONTROLLER ROUTES #########################################

Route::resource('social-accounts-api', 'Api\SocialAccountApiController');

######################################## /SOCIAL-ACCOUNTS-API-CONTROLLER ROUTES ########################################

######################################## STATISTICS-API-CONTROLLER ROUTES #########################################

Route::resource('statistics-api', 'Api\StatisticApiController');

######################################## /STATISTICS-API-CONTROLLER ROUTES ########################################
