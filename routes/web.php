<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CreateBlogController;

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

// ?????????????????????????? User routes ???????????????????????????????????????????????????????


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    // ->middleware('isLoggedIn');

});



// Route::middleware(['auth', 'role:user'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/blog', 'Index')->name('pageblog');
        Route::get('/detail-blog/{id}/{slug}', 'DetailBlog')->name('detailblog');
        Route::get('/connexion', 'Connexion')->name('connexion');
        Route::post('/connexion-store', 'ConnexionStore')->name('connexionstore');
        Route::post('/inscription-store', 'InscriptionStore')->name('inscriptionstore');
        Route::post('/message-store', 'MessageStore')->name('messagestore');
        Route::get('/inscription', 'Inscription')->name('inscription');
        Route::get('/deconnexion', 'Deconnexion')->name('deconnexion');
        Route::get('/contact', 'Contact')->name('contact');
        Route::post('/contact-store', 'ContactStore')->name('contactstore');
        Route::get('/services', 'Services')->name('services');
        Route::get('/portfiolo', 'Portfiolo')->name('portfolio');



    });
    // Route::controller(CategoryController::class)->group(function () {
    //     Route::get('/admin/all-category', 'Index')->name('allcategory');

    //          });

    // });


// ?????????????????????????? Admin routes ???????????????????????????????????????????????????????


Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('admindashboard');



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Index')->name('admindashboard');

    });

    Route::controller(CreateBlogController::class)->group(function () {
        Route::get('/admin/all-blog', 'Index')->name('allblog');
        Route::get('/admin/add-blog', 'AddBlog')->name('addblog');
        Route::post('/admin/store-blog', 'StoreBlog')->name('storeblog');
        Route::get('/admin/edit-blog-img/{id}', 'EditBlogImg')->name('editblogimg');
        Route::post('/admin/update-blog-img', 'UpdateBlogImg')->name('updateblogimg');
        Route::get('/admin/edit-blog/{id}', 'EditBlog')->name('editblog');
        Route::post('/admin/update-blog', 'UpdateBlog')->name('updateblog');
        Route::get('/admin/delete-blog/{id}', 'DestroyBlog')->name('deleteblog');

    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'Index')->name('allcategory');
        Route::get('/admin/add-category', 'AddCategory')->name('addcategory');
        Route::post('/admin/store-create-blog', 'StoreCreateBlog')->name('storecreateblog');
        Route::get('/admin/edit-category/{id}', 'EditCategory')->name('editcategory');
        Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
        Route::get('/admin/delete-category/{id}', 'DestroyCategory')->name('deletecategory');

    });

});




require __DIR__.'/auth.php';
