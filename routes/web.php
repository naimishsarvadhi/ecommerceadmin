<?php

use App\Http\Controllers\AddproductController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\VerifyEmailController;
use App\Http\Controllers\ViewCartController;
use App\Http\Controllers\ViewProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

// Route::get('/demo', function () {
//     //$titles = DB::table('customers')->get()->dd();
// });



Route::get('/', [HomeController::class, 'optionRec']);
Route::middleware(['guest', 'backbtn'])->group(function () {
    Route::any('/admin', function () {
        return view('admin.index');
    })->name('login');
    Route::any('admin/register', function () {
        return view('admin.register');
    });
});

Route::get('/view-products', [ViewProductController::class, 'ViewProduct']);
Route::get('/quickview/{id}', [ViewProductController::class, 'quickview']);
Route::post('customer/login', [CustomerController::class, 'signIn']);
Route::get('customer/login', [CustomerController::class, 'login']);
Route::get('customer/logout', [CustomerController::class, 'logout']);
Route::post('/add-to-cart', [AddToCartController::class, 'addTocart']);
Route::get('/view-cart', [ViewCartController::class, 'viewCart']);
Route::get('/clear-cart', [ViewCartController::class, 'clearCart']);
Route::post('/remove-to-cart', [ViewCartController::class, 'removeCart']);
// Route::group(['middleware' => ['auth', 'backbtn'], 'prefix' => 'admin'], function () {
// });

Route::group(['middleware' => ['auth', 'backbtn'], 'prefix' => 'admin'], function () {
    // Route::middleware(['auth', 'backbtn'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'viewTrash']);
    Route::get('/products', [ProductController::class, 'viewProd']);
    Route::get('/add-products', [AddproductController::class, 'view']);
    Route::get('/category', [CategoryController::class, 'viewCat']);
    Route::get('/subcategory', [SubcategoryController::class, 'view']);
    Route::get('/brands', [BrandsController::class, 'view']);
    Route::view('/orders', 'admin.orders');
    Route::get('/option', [OptionController::class, 'currency']);
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/edit-products/edit/{id}', [AddproductController::class, 'editProd']);
    Route::get('/delete-products/delete/{id}', [AddproductController::class, 'deleteProd']);
    Route::get('/restore-products/restore/{id}', [AddproductController::class, 'restoreProd']);
    Route::get('/delete-category/delete/{id}', [CategoryController::class, 'deleteCats']);
    Route::get('/restore-category/restore/{id}', [CategoryController::class, 'restoreCats']);
    Route::get('/delete-subcategory/delete/{id}', [SubcategoryController::class, 'deleteSubCats']);
    Route::get('/restore-subcategory/restore/{id}', [SubcategoryController::class, 'restoreSubCats']);
    Route::get('/delete-brand/delete/{id}', [BrandsController::class, 'deleteBrand']);
    Route::get('/restore-brand/restore/{id}', [BrandsController::class, 'restoreBrand']);
    Route::get('/products/deactive', [ProductController::class, 'viewtrashProd']);
    Route::get('/login/resendReq', [AdminController::class, 'sendMail']);
    Route::get('/enterotp', [VerifyEmailController::class, 'enterotp']);
    Route::get('/verifyemail', [VerifyEmailController::class, 'verifyemail']);
});
// Route::get('admin/verifyemail', [VerifyEmailController::class, 'verifyemail']);
Route::post('admin/register/registerAdmin', [AdminController::class, 'register']);
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/category/add', [CategoryController::class, 'addCat']);
Route::post('admin/subcategory/add', [SubcategoryController::class, 'AddCat']);
Route::post('admin/getSubCat', [BrandsController::class, 'subCat']);
Route::post('admin/brands/add', [BrandsController::class, 'AddBrands']);
Route::post('admin/getBrnd', [BrandsController::class, 'getBrnd']);
Route::post('admin/add-products/add', [AddproductController::class, 'addProd']);
Route::post('admin/option/add', [OptionController::class, 'option']);
Route::post('/getSingleProduct', [HomeController::class, 'getSingleProd']);
Route::post('/getcurrency', [HomeController::class, 'getcurrency']);
Route::post('/admin/login/resendReq', [AdminController::class, 'sendMail']);
Route::post('admin/checkotp', [AdminController::class, 'checkOtp']);
// Route::redirect('{any}', '/admin', 301)->where('{any}', '.*');
Route::get("{slug}", function () {
    return redirect('/admin');
})->where('slug', '[\w\s\-_\/]+');
