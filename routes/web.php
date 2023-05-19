<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PeopleController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use App\Models\JobOffer;
use App\Models\User;
use App\Models\PhoneNumber;

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

require __DIR__.'/auth.php';

Route::get('/', [JobController::class, 'index']);

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/signup', function () {
    return view('pages.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function ($user) {
    Route::get('/counts', function () {
        return view('pages.counts');
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Peoples routes
    Route::get('/people', [PeopleController::class, 'index']);
    Route::get('/people/search', [PeopleController::class, 'search'])->where('search', '[A-Za-z]+');

    // Job Routes
    Route::get('/jobs/search', [JobController::class, 'search'])->where('search', '[A-Za-z]+');
    Route::get('/jobs/categories', [JobController::class, 'categories']);
    Route::get('/dashboard', [JobController::class, 'dashboard']);
    Route::get('/jobs', [JobController::class, 'index']);
    Route::get('/jobs/create', [JobController::class, 'create']);
    Route::get('/jobs/{id}', [JobController::class, 'show'])->where('id', '[0-9]+');
    Route::post('/jobs/{id}/delete', [JobController::class, 'destroy'])->where('id', '[0-9]+');
    Route::post('/jobs', [JobController::class, 'store']);
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->where('id', '[0-9]+');
    Route::post('/jobs/{id}', [JobController::class, 'update']);

    // Company Routes
    Route::get('/company/categories', [CompanyController::class, 'categories']);
    Route::get('/company/search', [CompanyController::class, 'search'])->where('search', '[A-Za-z]+');
    Route::resource('/company', CompanyController::class);

    // Messages Routes

    Route::get('/messages/{id}', function (Request $request){
        return view('messages.index');
    });

    Route::get('/chat', function () {
        return view('pages.chat');
    });

    Route::get("/structure", function () {
        return view('pages.structure');
    });

    Route::get('/home', function () {
        return view('pages.home');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/login', function (Request $request){
            // return view('auth.login')->name('login');
        });
    });

    Route::get('/{id}/account', [PagesController::class, 'account'])->where('id', '[0-9]+');

    Route::get('/services', function () {
        return view('pages.services');
    });

    Route::get('/portfolio', function () {
        return view('pages.portfolio');
    });


    Route::fallback([PagesController::class, 'home']);


    // Settings
    Route::get('/settings', 'SettingController@index')->name('settings');
    Route::post('/settings', 'SettingController@store')->name('settings');


    // Notifications
    Route::get('/notifications', 'NotificationController@index')->name('notifications.index');
    Route::get('/notifications/unread_count', 'NotificationController@unreadCount')->name('notifications.unread_count');
    Route::get('/notifications/read_all', 'NotificationController@markAllRead')->name('notifications.read_all');
    Route::get('/notifications/{id}', 'NotificationController@show')->name('notifications.show')
        ->where('id', '[0-9]+');


    // File Manager
    Route::resource('files', 'FileManagerController');
});


Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
    // posts
    Route::get('/posts', 'PostController@getNewsFeed')->name('newsfeed.fetch_posts');
    Route::post('/posts', 'PostController@createPost');
    Route::post('/posts/{slug}/edit', 'PostController@updatePost');
    Route::post('/posts/share', 'PostController@sharePost');
    Route::post('/post_image_upload', 'PostController@uploadPostImages');
    Route::post('/post_document_upload', 'PostController@uploadPostDocument');
    Route::post('/posts/like-dislike', 'PostController@likeDislike');
    Route::post('/posts/delete', 'PostController@delete');

    // comments
    Route::get('/comments', 'CommentController@getComments');
    Route::post('/comments', 'CommentController@createComment');
    Route::post('/comments/like-dislike', 'CommentController@likeDislike');
});


Route::get('backend/sales', function (AnalyticSales $analytics) {
    return view('backend.sales-graph')->with(analytics);
})->middleware('atuh');

