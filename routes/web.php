<?php
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Visitor ;
use App\Models\Commentaire;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



Route::get('food',[
    'uses' => 'App\Http\Controllers\FoodController@getfood',
    'as' => 'food'
    ]);
    Route::get('menu','App\Http\Controllers\FoodController@getfoodmenu')->name('foodmenu');
    Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
    Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 
    Route::get('registration', 'App\Http\Controllers\AuthController@registration');
    Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration'); 
    Route::post('addCommentaires','App\Http\Controllers\CommentaireController@addCommentaires')->name('addCommentaires');
   
    Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/', function (Request $request) {
    $visitor = new Visitor;
$visitor->ip_address = $request->ip();
$visitor->visit_date = now()->format('Y-m-d');
$category = Category::OrderBy('name')->get();
$food = Food::OrderBy('name')->get();
$visitor->save();
$user=null;
$commentaire=Commentaire::All();
    return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);
});

Route::get('users', 'App\Http\Controllers\UserController@getUsers')->name("users")->middleware('App\Http\Middleware\admin');
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->name("dashboard")->middleware('App\Http\Middleware\admin');

Route::get('categories', 'App\Http\Controllers\CategoryController@getCategories')->name("Categories")->middleware('App\Http\Middleware\admin');
Route::post('addCategory', 'App\Http\Controllers\CategoryController@addCategory')->name("addCategory")->middleware('App\Http\Middleware\admin');
Route::post('addReservation', 'App\Http\Controllers\ResarvationController@addReservation')->name("addReservation")->middleware('App\Http\Middleware\admin');
Route::get('delete/{id}', 'App\Http\Controllers\CategoryController@removeCategory')->name("removeCategory")->middleware('App\Http\Middleware\admin');

Route::get('foods/{id}', 'App\Http\Controllers\FoodController@getfoods')->name("foods")->middleware('App\Http\Middleware\admin');
Route::post('storeFood', 'App\Http\Controllers\FoodController@storeFood')->name("storeFood")->middleware('App\Http\Middleware\admin');
Route::get('Deletefoods/{id}', 'App\Http\Controllers\FoodController@deletefood')->name("deletefood")->middleware('App\Http\Middleware\admin');
Route::post('updatefood/{food}', 'App\Http\Controllers\FoodController@update_food')->name("update_food")->middleware('App\Http\Middleware\admin');
Route::get('/about', function () {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    return view('about')->with('user',$user);
})->name('about');



   

