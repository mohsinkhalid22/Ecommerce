<?php


use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;



Route::view("/admin/add-product","pages.admin.addProduct");
Route::view("/home","pages.home");
Route::view("/register","pages.register");
Route::view('/admin/add-category','pages.admin.addCategory');
Route::view("/login","pages.login");
Route::post('/admin/add-product',[productController::class,'Add_Data']);
Route::post('/admin/add-category',[categoryController::class,'AddCategory']);

Route::get('/home',[productController::class,'GetProducts']);
Route::get('/admin/add-product',[categoryController::class,'GetCategories']);
Route::get('/single-product/{id}',function($id){
    $item = Products::find($id);
    return view('pages.singleProduct',compact('item'));
});

Route::post('/register',[userController::class,'SignUp']);
Route::post('/logout',[userController::class,'SignOut']);
Route::post('/login',[userController::class,'SignIn']);

Route::view('/view-cart','pages.cart')->middleware('auth');
Route::post('add-to-cart',[cartController::class,'addToCart']);
Route::get('/view-cart',[cartController::class,'getCartitems']);

?>