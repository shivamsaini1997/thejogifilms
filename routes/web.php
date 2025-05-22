<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontemd\GlobalSettingController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\WorkPortfolioController;
use Illuminate\Support\Facades\Route;

// admin 
Route::middleware('authallreadylogin')->group(function(){
Route::get('/admin',[AdminController::class, 'loginAdmin'])->name('admin');
Route::post('/admin',[AdminController::class, 'adminLogin'])->name('admin-login');
Route::get('/admin/forget-password', [AdminController::class, 'forgetPassword'])->name('forgetpassword');
Route::post('/admin/forget-password', [AdminController::class, 'forgetPasswordSubmit'])->name('forgetpasswordsubmit');
Route::get('/admin/reset-password/{token}', [AdminController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/admin/reset-password', [AdminController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::middleware('auth')->group(function(){
    Route::get('/admin/register', [AdminController::class, 'registerAdmin'])->name('admin-register');
    Route::post('/admin/register', [AdminController::class, 'adminRegister'])->name('admin-register');
    Route::get('/admin/register/{id}', [AdminController::class, 'deleteRegister'])->name('delete-register');
    Route::get('/admin/logout',[AdminController::class, 'logout'])->name('logout');

    Route::get('/admin/dashboard',[AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/admin/add-wedding-work',[AdminController::class, 'addWeddingWork'])->name('add-wedding-work');
    Route::post('/admin/add-wedding-work',[AdminController::class, 'storeWeddingWork'])->name('store-wedding-work');
    Route::get('/admin/manage-wedding-work',[AdminController::class, 'manageWeddingWork'])->name('manage-wedding-work');
    Route::post('/admin/manage-wedding-work/update/{id}',[AdminController::class, 'updateWeddingWork'])->name('update-wedding-work');
    Route::get('/admin/manage-wedding-work/edit/{id}',[AdminController::class, 'editWeddingWork'])->name('edit-wedding-work');
    Route::get('/admin/manage-wedding-work/status/{id}/{status}', [AdminController::class, 'statusWeddingWork'])->name('status-wedding-work');
    Route::get('/admin/delete-wedding-work/delete/{id}', [AdminController::class, 'deleteWeddingWork'])->name('delete-wedding-work');

    Route::get('/admin/add-wedding-films',[AdminController::class, 'addWeddingFilms'])->name('add-wedding-films');
    Route::post('/admin/add-wedding-films',[AdminController::class, 'storeWeddingFilms'])->name('store-wedding-films');
    Route::get('/admin/manage-wedding-films',[AdminController::class, 'manageWeddingfilms'])->name('manage-wedding-films');
    Route::post('/admin/manage-wedding-films/update/{id}',[AdminController::class, 'updateWeddingFilms'])->name('update-wedding-films');
    Route::get('/admin/manage-wedding-films/edit/{id}',[AdminController::class, 'editWeddingFilms'])->name('edit-wedding-films');
    Route::get('/admin/manage-wedding-films/status/{id}/{status}', [AdminController::class, 'statusWeddingFilms'])->name('status-wedding-films');
    Route::get('/admin/delete-wedding-films/delete/{id}', [AdminController::class, 'deleteWeddingFilms'])->name('delete-wedding-films');

    Route::get('/admin/global',[AdminController::class, 'global'])->name('global');
    Route::post('/admin/global',[AdminController::class, 'storeGlobal'])->name('store-global');
    Route::get('/admin/add-testimonials', [AdminController::class, 'addTestimonials'])->name('add-testimonials');
    Route::post('/admin/add-testimonials',[AdminController::class, 'storeTestimonials'])->name('store-testimonial');
    Route::get('/admin/manage-testimonials', [AdminController::class, 'manageTestimonials'])->name('manage-testimonials');
    Route::post('/admin/manage-testimonials/update/{id}',[AdminController::class, 'updateTestimonials'])->name('update-testimonials');
    Route::get('/admin/manage-testimonials/edit/{id}', [AdminController::class, 'editTestimonials'])->name('edit-testimonials');
    Route::get('/admin/manage-testimonials/status/{id}/{status}', [AdminController::class, 'statusTestimonials'])->name('status-testimonials');
    Route::get('/admin/delete-testimonials/delete/{id}', [AdminController::class, 'deleteTestimonials'])->name('delete-testimonials');

    Route::get('/admin/add-team', [AdminController::class , 'addTeam'])->name('add-team');
    Route::post('/admin/add-team', [AdminController::class , 'storeTeam'])->name('store-team');
    Route::get('/admin/manage-team', [AdminController::class , 'manageTeam'])->name('manage-team');
    Route::post('/admin/manage-team/update/{id}',[AdminController::class, 'updateTeam'])->name('update-team');
    Route::get('/admin/manage-team/edit/{id}', [AdminController::class, 'editTeam'])->name('edit-team');
    Route::get('/admin/manage-team/status/{id}/{status}', [AdminController::class, 'statusTeam'])->name('status-team');
    Route::get('/admin/delete-team/delete/{id}', [AdminController::class, 'deleteTeam'])->name('delete-team');
});
// frontend 
Route::get('/',[HomeController::class, 'HomePage'])->name('homepage');
Route::get('/team',[TeamController::class, 'Team'])->name('team');
Route::get('/about-us',[AboutController::class, 'About'])->name('about');
Route::get('/contact',[GlobalSettingController::class, 'Contact'])->name('contact');
Route::get('/{slug}',[WorkPortfolioController::class, 'WorkProtfolio'])->name('work-protfolio');