<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\BuyComponent;
use App\Http\Livewire\CompareComponent;
use App\Http\Livewire\StoreComponent;
use App\Http\Livewire\MetroComponent;
use App\Http\Livewire\OurVisionComponent;
use App\Http\Livewire\StoreDetailComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminCategoryComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminProductComponent;
use App\Http\Livewire\admin\AdminAddProductComponent;
use App\Http\Livewire\admin\AdminEditProductComponent;
use App\Http\Livewire\admin\AdminCouponsComponent;
use App\Http\Livewire\admin\AdminAddCouponComponent;
use App\Http\Livewire\admin\AdminEditCouponComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('index');
Route::get('buy', BuyComponent::class)->name('buy');
Route::get('compare', CompareComponent::class)->name('compare');
Route::get('store', StoreComponent::class)->name('store');
Route::get('cart', CartComponent::class)->name('store.cart');
Route::get('metro', MetroComponent::class)->name('metro');
Route::get('our-vision', OurVisionComponent::class)->name('our-vision');
Route::get('store/{slug}', StoreDetailComponent::class)->name('store.store-details');
Route::get('store-category/{category_slug}', CategoryComponent::class)->name('store.category');
Route::get('/checkout',CheckoutComponent::class)->name('checkout');


// for user or customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

// for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products/',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupon/add',AdminAddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupon/edit/{coupon_id}',AdminEditCouponComponent::class)->name('admin.editcoupon');
});
