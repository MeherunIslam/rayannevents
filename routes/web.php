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


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FontendController@index');
Route::get('pages/services', 'FontendController@services');
Route::get('pages/about', 'FontendController@about');
Route::get('pages/contact', 'FontendController@contact');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::get('admin/logout','AdminController@Logout')->name('admin.logout');

//========================Userfont Route================
Route::get('/home', 'UserfontController@user')->name('pages.font');
Route::get('pages/teenage', 'UserfontController@teenage');
Route::get('pages/baby', 'UserfontController@baby');
Route::get('pages/adult', 'UserfontController@adult');
Route::get('pages/christian', 'UserfontController@christian');
Route::get('pages/hindu', 'UserfontController@hindu');
Route::get('pages/muslim', 'UserfontController@muslim');
Route::get('pages/engage', 'UserfontController@engage');
Route::get('pages/anniversary', 'UserfontController@anniversary');
Route::get('pages/project', 'UserfontController@project');

// =========================== Feedback ===========================
Route::get('pages/contact_us', 'UserfontController@contact');
Route::post('contact/take','ContactController@storeContact')->name('store.contact');
Route::get('admin/feedback', 'AdminController@feedback');

// =========================== Newsletter Subscription ===========================
Route::post('email/subscribe','ContactController@storeSubscribe')->name('store.subscribe');
Route::get('admin/newsletter', 'AdminController@newsletter');

// =========================== Parlor Appointment ===========================
Route::get('pages/parlor', 'UserfontController@parlor');
Route::post('parlor/appointment','WeddingController@storeAppoint')->name('store.parlor');
Route::get('admin/parlor_appointment', 'AdminController@parlorAppoint');
Route::get('admin/parlors/delete/{parlor_id}','WeddingController@delete');
Route::get('admin/parlors/cancel/{parlor_id}','WeddingController@Cancel');
Route::get('admin/parlors/accept/{parlor_id}','WeddingController@Accept');
Route::get('admin/parlors/pending/{parlor_id}','WeddingController@Pending');
Route::get('admin/parlors/done/{parlor_id}','WeddingController@Done');

//my parlor appointments
Route::get('user/appoint','UserController@appoint')->name('user.appoint');
Route::get('user/appointdelete/{parlor_id}', 'UserController@delete');

// =========================== Car Booking ===========================
Route::get('pages/car', 'UserfontController@car');
// ============================= Cars ============================
Route::get('admin/cars/add','WeddingController@addCar')->name('add-cars');
Route::post('admin/cars/store','WeddingController@storeCar')->name('store-cars');
Route::get('admin/cars/manage','WeddingController@manageCar')->name('manage-cars');
Route::get('admin/cars/edit/{car_id}','WeddingController@editCar');
Route::post('admin/cars/update','WeddingController@updateCar')->name('update-cars');
Route::post('admin/cars/image','WeddingController@updateImage')->name('image');
Route::get('admin/cars/delete/{car_id}','WeddingController@destroy');
Route::get('admin/cars/inactive/{car_id}','WeddingController@Inactive');
Route::get('admin/cars/active/{car_id}','WeddingController@Active');
Route::get('admin/cars/view/{car_id}','WeddingController@viewCar');
Route::get('car/details/{car_id}','UserfontController@carDetail');


Route::get('admin/car_book', 'AdminController@carBook');
Route::post('car/book','WeddingController@storeCarbook')->name('store.carbook');
Route::get('admin/carbooks/delete/{car_book_id}','WeddingController@carbookdelete');
Route::get('admin/carbooks/pending/{car_book_id}','WeddingController@carPending');
Route::get('admin/carbooks/accept/{car_book_id}','WeddingController@carAccept');
Route::get('admin/carbooks/cancel/{car_book_id}','WeddingController@carCancel');
Route::get('admin/carbooks/done/{car_book_id}','WeddingController@carDone');

//my car bookings
Route::get('user/rent','UserController@rent')->name('user.rent');
Route::get('user/carbookingdelete/{car_book_id}', 'UserController@danger');


// =========================== Career ===========================
Route::get('pages/career', 'UserfontController@career');
Route::get('pages/apply', 'UserfontController@apply');
Route::post('apply/job','CareerController@storeApply')->name('store.apply');
Route::get('admin/application', 'AdminController@application');
Route::get('admin/application/delete/{apply_id}','CareerController@delete');
Route::get('admin/document_details/{id}','CareerController@show');
Route::get('file/download/{file}','CareerController@download');


Route::get('admin/positions/add','CareerController@addPosition')->name('add-positions');
Route::post('admin/positions/store','CareerController@storePosition')->name('store-positions');
Route::get('admin/positions/manage','CareerController@managePosition')->name('manage-positions');
Route::get('admin/positions/edit/{position_id}','CareerController@editPosition');
Route::post('admin/positions/update','CareerController@updatePosition')->name('update-positions');
Route::get('admin/positions/delete/{position_id}','CareerController@destroy');
Route::get('admin/positions/inactive/{position_id}','CareerController@Inactive');
Route::get('admin/positions/active/{position_id}','CareerController@Active');
Route::get('admin/positions/view/{position_id}','CareerController@viewPosition');
Route::get('position/details/{position_id}','UserfontController@positionDetail');


// =========================== Admin Route ===========================
// category section
Route::get('admin/categories','Admin\CategoryController@index')->name('admin.category');
Route::post('admin/categories-store','Admin\CategoryController@StoreCat')->name('store.category');
Route::get('admin/categories/edit/{cat_id}','Admin\CategoryController@Edit');
Route::post('admin/categories-update','Admin\CategoryController@UpdateCat')->name('update.category');
Route::get('admin/categories/delete/{cat_id}','Admin\CategoryController@Delete');
Route::get('admin/categories/inactive/{cat_id}','Admin\CategoryController@Inactive');
Route::get('admin/categories/active/{cat_id}','Admin\CategoryController@Active');
// ====================== Subcategory ===============
Route::get('admin/subcategories','Admin\SubcategoryController@index')->name('admin.subcategory');
Route::post('admin/subcategories-store','Admin\SubcategoryController@Store')->name('store.subcategory');
Route::get('admin/subcategories/edit/{subcat_id}','Admin\SubcategoryController@Edit');
Route::post('admin/subcategories-update','Admin\SubcategoryController@Update')->name('update.subcategory');
Route::get('admin/subcategories/delete/{subcat_id}','Admin\SubcategoryController@Delete');
Route::get('admin/subcategories/inactive/{subcat_id}','Admin\SubcategoryController@Inactive');
Route::get('admin/subcategories/active/{subcat_id}','Admin\SubcategoryController@Active');

// ====================== Group ===============
Route::get('admin/groups','Admin\GroupController@index')->name('admin.group');
Route::post('admin/groups-store','Admin\GroupController@Store')->name('store.group');
Route::get('admin/groups/edit/{group_id}','Admin\GroupController@Edit');
Route::post('admin/groups-update','Admin\GroupController@Update')->name('update.group');
Route::get('admin/groups/delete/{group_id}','Admin\GroupController@Delete');
Route::get('admin/groups/inactive/{group_id}','Admin\GroupController@Inactive');
Route::get('admin/groups/active/{group_id}','Admin\GroupController@Active');

// ============================= Products ============================
Route::get('admin/products/add','Admin\ProductController@addProduct')->name('add-products');
Route::post('admin/products/store','Admin\ProductController@storeProduct')->name('store-products');
Route::get('admin/products/manage','Admin\ProductController@manageProduct')->name('manage-products');
Route::get('admin/products/edit/{proudct_id}','Admin\ProductController@editProduct');
Route::post('admin/products/update','Admin\ProductController@updateProduct')->name('update-products');
Route::post('admin/products/image-update','Admin\ProductController@updateImage')->name('update-images');
Route::get('admin/products/delete/{product_id}','Admin\ProductController@destroy');
Route::get('admin/products/inactive/{product_id}','Admin\ProductController@Inactive');
Route::get('admin/products/active/{product_id}','Admin\ProductController@Active');
Route::get('admin/products/view/{product_id}','Admin\ProductController@viewProduct');
// ============= product details ============
Route::get('proudct/details/{product_id}','UserfontController@productDetail');

// ============================= Projects ============================
Route::get('admin/projects/add','Admin\ProjectController@addProject')->name('add-projects');
Route::post('admin/projects/store','Admin\ProjectController@storeProject')->name('store-projects');
Route::get('admin/projects/manage','Admin\ProjectController@manageProject')->name('manage-projects');
Route::get('admin/projects/edit/{project_id}','Admin\ProjectController@editProject');
Route::post('admin/projects/update','Admin\ProjectController@updateProject')->name('update-projects');
Route::post('admin/projects/image-update','Admin\ProjectController@updateImage')->name('update-image');
Route::get('admin/projects/delete/{project_id}','Admin\ProjectController@destroy');
Route::get('admin/projects/inactive/{project_id}','Admin\ProjectController@Inactive');
Route::get('admin/projects/active/{project_id}','Admin\ProjectController@Active');
Route::get('admin/projects/view/{project_id}','Admin\ProjectController@viewProject');
Route::get('project/details/{project_id}','UserfontController@projectDetail');


// ======================= coupon =============================
Route::get('admin/coupon','Admin\CouponController@index')->name('admin.coupon');
Route::post('admin/coupon-store','Admin\CouponController@Store')->name('store.coupon');
Route::get('admin/coupon/edit/{coupon_id}','Admin\CouponController@couponEdit');
Route::post('admin/coupon-update','Admin\CouponController@update')->name('update.coupon');
Route::get('admin/coupon/delete/{coupon_id}','Admin\CouponController@couponDelete');
Route::get('admin/coupon/inactive/{coupon_id}','Admin\CouponController@Inactive');
Route::get('admin/coupon/active/{coupon_id}','Admin\CouponController@Active');
//
Route::get('admin/orders','Admin\CouponController@orderIndex')->name('admin.orders');
Route::get('admin/orders/view/{id}','Admin\CouponController@viewOrder');
Route::get('admin/orders/delete/{id}','Admin\CouponController@orderDelete');
Route::get('admin/orders/cancel/{order_id}','Admin\CouponController@Cancel');
Route::get('admin/orders/accept/{order_id}','Admin\CouponController@Accept');
Route::get('admin/orders/pending/{order_id}','Admin\CouponController@Pending');
Route::get('admin/orders/done/{order_id}','Admin\CouponController@Done');
// =========================== fontend routes ===================
// ================= cart ============
Route::post('add/to-cart/{prouct_id}','CartController@addToCart');
Route::get('cart','CartController@cartPage');
Route::get('cart/destroy/{cart_id}','CartController@destroy');
Route::post('cart/quantity/update/{cart_id}','CartController@quantityUpdate');
Route::post('customise/update/{cart_id}','CartController@storeCustomize')->name('store.customize');
Route::post('coupon/apply','CartController@applyCoupon');
Route::get('coupon/destroy','CartController@couponDestroy');
// ================= wishlist ============
Route::get('add/to-wishlist/{prouct_id}','WishlistController@addToWishlist');
Route::get('wishlist','WishlistController@wishPage');
Route::get('wishlist/destroy/{wishlist_id}','WishlistController@destroy');

//shop page routes
Route::get('store','UserfontController@storePage')->name('store.page');
//categorywise product show
Route::get('subcategory/product-show/{id}','UserfontController@subcatWiseProduct');

// checkout page
Route::get('checkout','CheckoutController@index');
Route::post('place/order','OrderController@storeOrder')->name('place-order');
Route::get('order/success','OrderController@orderSuccess');

//user routes
Route::get('user/order','UserController@order')->name('user.order'); 
Route::get('user/order_view/{id}','UserController@orderView');
Route::get('user/delete/{id}', 'UserController@destroy');  

// user profile update
/* Route::get('user/profile','UserController@profile')->name('profile.user'); 
Route::post('user/profile/update','UserController@updateProfile')->name('update.user');  */

//google login
Route::get('login/google','Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback','Auth\LoginController@handleGoogleCallback');

//facebook login
Route::get('login/facebook','Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback','Auth\LoginController@handleFacebookCallback');

//github login
Route::get('login/github','Auth\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback','Auth\LoginController@handleGithubCallback');

Auth::routes();

//search products
Route::get('/search', 'UserfontController@search')->name('search');




