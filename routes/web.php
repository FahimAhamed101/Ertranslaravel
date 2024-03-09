<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryControlle;
use App\Http\Controllers\Admin\TempImagesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
        Route::get('/change-password',[SettingController::class,'showChangePasswordForm'])->name('admin.showChangePasswordForm');
      Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
      Route::get('/category/create', [CategoryController::class, 'create'])->name('category.craete');
      Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
      Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('categort.edit');
      Route::put('/category/{category}', [CategoryController::class, 'update'])->name('categort.update');
      Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('categort.delete');
  
      //sub-category routes
      Route::get('/sub-categories', [SubCategoryControlle::class, 'index'])->name('sub-categories.index');
      Route::get('/sub-categories/create', [SubCategoryControlle::class, 'create'])->name('sub-categories.create');
      Route::post('/sub-categories', [SubCategoryControlle::class, 'store'])->name('sub-categories.store');
      Route::get('/sub-categories/{subCategory}/edit', [SubCategoryControlle::class, 'edit'])->name('sub-categories.edit');
      Route::put('/sub-categories/{subCategory}', [SubCategoryControlle::class, 'update'])->name('sub-categories.update');
      Route::delete('/sub-categories/{subCategory}', [SubCategoryControlle::class, 'destroy'])->name('sub-categories.destroy');


      Route::post('/upload-temp-image', [TempImagesController::class, 'create'])->name('temp-images.create');

      Route::get('/getslug', function (Request $request) {
          $slug = '';
          if (!empty($request->title)) {
              $slug = Str::slug($request->title);
          }
          return response()->json([
              'status' => true,
              'slug' => $slug,
          ]);
      })->name('getSlug');


    });

  
   

});