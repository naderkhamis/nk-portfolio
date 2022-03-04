<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\HomeController::class, 'show'])->name('test');

######################################## CAREER-CONTROLLER ROUTES ########################################

Route::prefix('career')->middleware('auth')->group(function () {
    Route::get('index', 'CareerController@index')->name('career-index');
    Route::get('create', 'CareerController@create')->name('create-career');
    Route::post('store', 'CareerController@store')->name('store-career');
    Route::get('show/{id}', 'CareerController@show')->name('show-career');
    Route::get('edit/{id}', 'CareerController@edit')->name('edit-career');
    Route::post('update', 'CareerController@update')->name('update-career');
    Route::get('delete/{id}', 'CareerController@destroy')->name('delete-career');
});

######################################## /CAREER-CONTROLLER ROUTES ########################################

######################################## DEVELOPER-CONTROLLER ROUTES ########################################

Route::prefix('personal-information')->middleware('auth')->group(function () {
    Route::get('index', 'DeveloperController@index')->name('developer-index');
    Route::get('create', 'DeveloperController@create')->name('create-developer');
    Route::post('store', 'DeveloperController@store')->name('store-developer');
    Route::get('show/{id}', 'DeveloperController@show')->name('show-developer');
    Route::get('edit/{id}', 'DeveloperController@edit')->name('edit-developer');
    Route::post('update', 'DeveloperController@update')->name('update-developer');
    Route::get('delete/{id}', 'DeveloperController@destroy')->name('delete-developer');
});

######################################## /DEVELOPER-CONTROLLER ROUTES ########################################

######################################## CLIENT-REVIEW-CONTROLLER ROUTES ########################################

Route::prefix('client-review')->middleware('auth')->group(function () {
    Route::get('index', 'ClientReviewController@index')->name('review-index');
    Route::get('create', 'ClientReviewController@create')->name('create-review');
    Route::post('store', 'ClientReviewController@store')->name('store-review');
    Route::get('show/{id}', 'ClientReviewController@show')->name('show-review');
    Route::get('edit/{id}', 'ClientReviewController@edit')->name('edit-review');
    Route::post('update', 'ClientReviewController@update')->name('update-review');
    Route::get('delete/{id}', 'ClientReviewController@destroy')->name('delete-review');
});

######################################## /CLIENT-REVIEW-CONTROLLER ROUTES ########################################

######################################## CERTIFICATES-CONTROLLER ROUTES ########################################

Route::prefix('certificates')->middleware('auth')->group(function () {
    Route::get('index', 'CertificateController@index')->name('certificates-index');
    Route::get('create', 'CertificateController@create')->name('create-certificate');
    Route::post('store', 'CertificateController@store')->name('store-certificate');
    Route::get('show/{id}', 'CertificateController@show')->name('show-certificate');
    Route::get('edit/{id}', 'CertificateController@edit')->name('edit-certificate');
    Route::post('update', 'CertificateController@update')->name('update-certificate');
    Route::get('delete/{id}', 'CertificateController@destroy')->name('delete-certificate');
});

######################################## /CERTIFICATES-CONTROLLER ROUTES ########################################

######################################## SKILL-CATEGORY-CONTROLLER ROUTES ########################################

Route::prefix('skills-categories')->middleware('auth')->group(function () {
    Route::get('index', 'SkillCategoryController@index')->name('categories-index');
    Route::get('create', 'SkillCategoryController@create')->name('create-category');
    Route::post('store', 'SkillCategoryController@store')->name('store-category');
    // Route::get('show/{id}', 'SkillCategoryController@show')->name('show-certificate');
    Route::get('edit/{id}', 'SkillCategoryController@edit')->name('edit-category');
    Route::post('update', 'SkillCategoryController@update')->name('update-category');
    Route::get('delete/{id}', 'SkillCategoryController@destroy')->name('delete-category');
});

######################################## /SKILL-CATEGORY-CONTROLLER ROUTES ########################################

######################################## SKILL-CONTROLLER ROUTES ########################################

Route::prefix('skills')->middleware('auth')->group(function () {
    Route::get('index', 'SkillController@index')->name('skills-index');
    Route::get('create', 'SkillController@create')->name('create-skill');
    Route::post('store', 'SkillController@store')->name('store-skill');
    // Route::get('show/{id}', 'SkillController@show')->name('show-skill');
    Route::get('edit/{id}', 'SkillController@edit')->name('edit-skill');
    Route::post('update', 'SkillController@update')->name('update-skill');
    Route::get('delete/{id}', 'SkillController@destroy')->name('delete-skill');
});

######################################## /SKILL-CONTROLLER ROUTES ########################################

######################################## EMAILS-CONTROLLER ROUTES ########################################

Route::prefix('emails')->middleware('auth')->group(function () {
    Route::get('index', 'EmailController@index')->name('emails-index');
    Route::get('create', 'EmailController@create')->name('create-email');
    Route::post('store', 'EmailController@store')->name('store-email');
    Route::get('show/{id}', 'EmailController@show')->name('show-email');
    // Route::get('edit/{id}', 'EmailController@edit')->name('edit-skill');
    // Route::post('update', 'EmailController@update')->name('update-skill');
    Route::get('delete/{id}', 'EmailController@destroy')->name('delete-skill');
});

######################################## /EMAILS-CONTROLLER ROUTES ########################################

######################################## SERVICE-CONTROLLER ROUTES ########################################

Route::prefix('services')->middleware('auth')->group(function () {
    Route::get('index', 'ServiceController@index')->name('services-index');
    Route::get('create', 'ServiceController@create')->name('create-service');
    Route::post('store', 'ServiceController@store')->name('store-service');
    Route::get('show/{id}', 'ServiceController@show')->name('show-service');
    Route::get('edit/{id}', 'ServiceController@edit')->name('edit-service');
    Route::post('update', 'ServiceController@update')->name('update-service');
    Route::get('delete/{id}', 'ServiceController@destroy')->name('delete-service');
});

######################################## /SERVICE-CONTROLLER ROUTES ########################################

######################################## PROCESS-CONTROLLER ROUTES ########################################

Route::prefix('processes')->middleware('auth')->group(function () {
    Route::get('index', 'ProcessController@index')->name('processes-index');
    Route::get('create', 'ProcessController@create')->name('create-process');
    Route::post('store', 'ProcessController@store')->name('store-process');
    Route::get('show/{id}', 'ProcessController@show')->name('show-process');
    Route::get('edit/{id}', 'ProcessController@edit')->name('edit-process');
    Route::post('update', 'ProcessController@update')->name('update-process');
    Route::get('delete/{id}', 'ProcessController@destroy')->name('delete-process');
});

######################################## /PROCESS-CONTROLLER ROUTES ########################################

######################################## PROJECT-CATEGORY-CONTROLLER ROUTES ########################################

Route::prefix('projects-categories')->middleware('auth')->group(function () {
    Route::get('index', 'ProjectCategoryController@index')->name('projects-categories-index');
    Route::get('create', 'ProjectCategoryController@create')->name('create-project-category');
    Route::post('store', 'ProjectCategoryController@store')->name('store-project-category');
    // Route::get('show/{id}', 'ProjectCategoryController@show')->name('show-project-category');
    Route::get('edit/{id}', 'ProjectCategoryController@edit')->name('edit-project-category');
    Route::post('update', 'ProjectCategoryController@update')->name('update-project-category');
    Route::get('delete/{id}', 'ProjectCategoryController@destroy')->name('delete-project-category');
});

######################################## /PROJECT-CATEGORY-CONTROLLER ROUTES ########################################

######################################## PROJECT-CONTROLLER ROUTES ########################################

Route::prefix('projects')->middleware('auth')->group(function () {
    Route::get('index', 'ProjectController@index')->name('projects-index');
    Route::get('create', 'ProjectController@create')->name('create-project');
    Route::post('store', 'ProjectController@store')->name('store-project');
    // Route::get('show/{id}', 'ProjectController@show')->name('show-project');
    Route::get('edit/{id}', 'ProjectController@edit')->name('edit-project');
    Route::post('update', 'ProjectController@update')->name('update-project');
    Route::get('delete/{id}', 'ProjectController@destroy')->name('delete-project');
});

######################################## /PROJECT-CONTROLLER ROUTES ########################################

######################################## STATISTICS-CONTROLLER ROUTES ########################################

Route::prefix('statistics')->middleware('auth')->group(function () {
    Route::get('index', 'StatisticController@index')->name('statistics-index');
    Route::get('create', 'StatisticController@create')->name('create-statistic');
    Route::post('store', 'StatisticController@store')->name('store-statistic');
    // Route::get('show/{id}', 'StatisticController@show')->name('show-statistic');
    Route::get('edit/{id}', 'StatisticController@edit')->name('edit-statistic');
    Route::post('update', 'StatisticController@update')->name('update-statistic');
    Route::get('delete/{id}', 'StatisticController@destroy')->name('delete-statistic');
});

######################################## /STATISTICS-CONTROLLER ROUTES ########################################

######################################## CONTACT-INFORMATION-CONTROLLER ROUTES ########################################

Route::prefix('contact-information')->middleware('auth')->group(function () {
    Route::get('index', 'ContactInformationController@index')->name('contacts-index');
    Route::get('create', 'ContactInformationController@create')->name('create-contact');
    Route::post('store', 'ContactInformationController@store')->name('store-contact-info');
    // Route::get('show/{id}', 'ContactInformationController@show')->name('show-contacts');
    Route::get('edit/{id}', 'ContactInformationController@edit')->name('edit-contact');
    Route::post('update', 'ContactInformationController@update')->name('update-contact');
    Route::get('delete/{id}', 'ContactInformationController@destroy')->name('delete-contact');
});

######################################## /CONTACT-INFORMATION-CONTROLLER ROUTES ########################################