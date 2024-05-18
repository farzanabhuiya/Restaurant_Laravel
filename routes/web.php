<?php

use App\Http\Controllers\Backend\BurgerItemController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FoodplatController;
use App\Http\Controllers\Backend\JuicoController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RestaurantController;
use App\Http\Controllers\Backend\SpecialDishController;
use App\Http\Controllers\Backend\SubCategoryController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Backend\BurgerItem;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

//Route::get('/',)->name('frontend');

Route::get('/', function (){
return view('frontend.homePage');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[ProfileController::class,'showprofile'])->name('profile');
Route::put('/profile-upadate',[ProfileController::class,'Updateprofile'])->name('profile.update');
Route::put('/password-upadate',[ProfileController::class,'passwordUpdate'])->name('profile.password.update');








Route::get('/addview-category',[CategoryController::class,'addviewCategory'])->name('Category.Addview');

Route::post('/add-category',[CategoryController::class,'addcategory'])->name('Category.Add');
Route::get('/view-category',[CategoryController::class,'viewcategory'])->name('Category.view');
Route::get('/backend/category/edit/{slug}',[CategoryController::class,'editcategory'])->name('Category.edit');
Route::post('/backend/category/update/{slug}',[CategoryController::class,'updatecategory'])->name('Category.update');






Route::get('/add-post',[PostController::class,'postAdd'])->name('Post.Add');
Route::post('/post-store',[PostController::class,'postStore'])->name('Post.Store');
Route::get('/post-all',[PostController::class,'postall'])->name('Post.All');
Route::get('/post-edit/{slug}',[PostController::class,'EditPost'])->name('Post.Edit');
Route::put('/post-all-update/{slug}',[PostController::class,'UpdatePostAll'])->name('Post.All.Update');
Route::delete('/post-delete/{id}',[PostController::class,'deletepost'])->name('Post.Delete');





Route::get('/post-title',[PostController::class,'postTitle'])->name('Post.title');
// Route::get('/posttitle-store',[PostController::class,'postTitleStore'])->name('Posttitle.store');






             //burgerITEM


Route::get('/Burger-Item',[BurgerItemController::class,'burgerItem'])->name('BurgerItem.Add');
Route::get('/Burger-Item-title',[BurgerItemController::class,'BurgerItemAddTitle'])->name('BurgerItem.Add.title');
Route::get('/BurgerItem-store',[BurgerItemController::class,'BurgerItemstore'])->name('BurgerItem.store');


//BURGER



Route::post('/Burger-Store',[BurgerItemController::class,'Burgerstore'])->name('Burger.store');
Route::get('/Burger-all',[BurgerItemController::class,'Burgerall'])->name('Burger.All');



//juico item

Route::get('/juico-Item',[JuicoController::class,'juicoitem'])->name('JuicoItem.Add');
Route::get('/juico-Item-title',[JuicoController::class,'juicoitemAddTitle'])->name('JuicoItem.Add.title');

//juico
Route::post('/Juico-Store',[JuicoController::class,'juicostore'])->name('Juico.store');
Route::get('/Juico-All',[JuicoController::class,'juicoAll'])->name('Juico.All');




//restaurant

Route::get('/Restaturant',[RestaurantController::class,'restaurantAdd'])->name('Restaturant.Add');
Route::post('/Restaturant-Store',[RestaurantController::class,'restaurantStore'])->name('Restaturant.Add.Store');
Route::get('/Restaturant-all',[RestaurantController::class,'restaurantAll'])->name('Restaturant.Add.all');



//special dish
Route::get('/SpecialDish',[SpecialDishController::class,'specialdishAdd'])->name('SpecialDish.Add');
Route::post('/SpecialDish-Store',[SpecialDishController::class,'specialdishAddStore'])->name('SpecialDish.Add.Store');
Route::get('/SpecialDish-All',[SpecialDishController::class,'specialdishAll'])->name('SpecialDish.Add.All');




//foodplat

Route::get('/Foodplat',[FoodplatController::class,'foodplatAdd'])->name('Foodplat.Add');
Route::post('/Foodplat-Store',[FoodplatController::class,'foodplatAddStore'])->name('Foodplat.Add.Store');
Route::get('/Foodplat-Store',[FoodplatController::class,'foodplatAll'])->name('Foodplat.All');
































// Route::get('/addview-subcategory',[SubCategoryController::class,'addviewsubcategory'])->name('SubCategory.Addview');

// Route::get('/add-subcategory',[SubCategoryController::class,'addsubcategory'])->name('SubCategory.Add');

// Route::post('/view-subcategory',[SubCategoryController::class,'subcategoryStory'])->name('SubCategory.view');

//Route::post('/get-all-subcategory',[SubCategoryController::class,'subcategoryget'])->name('SubCategory.get');
