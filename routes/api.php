<?php

use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use App\Product;
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products/{id}', 'ProductController@show');
 

/*Route::get('/products', function()
{
	$products = Product::find(2);
	return new ProductResource($products);
});
*/


Route::get('index',[
	'as'=>'index',
	'uses'=>'controllerPage@getIndex'
]);

Route::get('collection_women/{type}',[
	'as'=>'collection_women',
	'uses'=>'controllerPage@getCollectionWomen'
]);

Route::get('listingMenu',[
	'as'=>'listingMenu',
	'uses'=>'controllerPage@getListingMenu'
]);

Route::get('customerInformation',[
	'as'=>'getCustomerInformation',
	'uses'=>'controllerPage@getCustomerInformation'
]);

Route::get('shippingMethod',[
	'as'=>'getShippingMethod',
	'uses'=>'controllerPage@getShippingMethod'
]);

Route::get('paymentMethod',[
	'as'=>'getPaymentMethod',
	'uses'=>'controllerPage@getPaymentMethod'
]);

/*
Route::get('listing',[
	'as'=>'listing',
	'uses'=>'controllerPage@getListing'
]);
*/

Route::get('productTitle/{id}',[
	'as'=>'productTitle',
	'uses'=>'controllerPage@getProductTitle'
]);

Route::get('cart',[
	'as'=>'cart',
	'uses'=>'controllerPage@getCart'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'addCart',
	'uses'=>'controllerPage@getAddCart'
]);

Route::post('get-add-to-cart/{id}',[
	'as'=>'AddCartTitle',
	'uses'=>'controllerPage@getAddCartTitle'
]);

Route::get('del-cart/{id}',[
	'as'=>'deleteCart',
	'uses'=>'controllerPage@getDeleteCart'
]);

Route::get('update-cart',[
	'as'=>'updateCart',
	'uses'=>'controllerPage@getUpdateCart'
]);

Route::get('order',[
	'as'=>'orders',
	'uses'=>'controllerPage@getOrder'
]);

Route::post('order',[
	'as'=>'orders',
	'uses'=>'controllerPage@postOrder'
]);

//
//
//
//

// Admin

//
//
//

Route::get('indexAdmin',[
	'as'=>'indexAdmin',
	'uses'=>'PageAdminController@getIndexAdmin'
]);


// start small categories
// 
// 
// 
Route::get('shop_small_category',[
	'as'=>'shop_small_category',
	'uses'=>'ControllerSmallCategories@getSmallCategories'
]);
Route::get('addSmallCategory',[
	'as'=>'getaddSmallCategory',
	'uses'=>'ControllerSmallCategories@getaddSmallCategories'
]);
Route::post('addSmallCategory',[
	'as'=>'postaddSmallCategory',
	'uses'=>'ControllerSmallCategories@postAddSmallCategories'
]);

Route::get('editSmallCategory/{id}',[
	'as'=>'geteditSmallCategory',
	'uses'=>'ControllerSmallCategories@getEditSmallCategory'
]);
Route::post('editSmallCategory/{id}',[
	'as'=>'posteditSmallCategory',
	'uses'=>'ControllerSmallCategories@postEditSmallCategory'
]);
Route::get('deleteSmallCategory/{id}',[
	'as'=>'getdeleteSmallCategory',
	'uses'=>'ControllerSmallCategories@getDeleteSmallCategory'
]);

// end small categories
// 
// 
// 

// Categories
Route::get('categories',[
	'as'=>'categories',
	'uses'=>'ControllerCategories@getCategories'
]);

Route::get('categories/add',[
	'as'=>'getaddCategories',
	'uses'=>'ControllerCategories@getAddCategories'
]);

Route::post('categories/add',[
	'as'=>'postaddCategories',
	'uses'=>'ControllerCategories@postAddCategories'
]);

Route::get('categories/edit/{id}',[
	'as'=>'geteditCategory',
	'uses'=>'ControllerCategories@getEditCategory'
]);

Route::post('categories/edit/{id}',[
	'as'=>'posteditCategory',
	'uses'=>'ControllerCategories@postEditCategory'
]);

Route::get('categories/delete/{id}',[
	'as'=>'getdeleteCategory',
	'uses'=>'ControllerCategories@getDeleteCategory'
]);

// end categories


// Posts

Route::get('admin_post',[
	'middleware' => 'cors',
	'as'=>'admin_post',
	'uses'=>'PostController@getPosts'
]);
Route::get('admin_post_api',[
	'middleware' => 'cors',
	'as'=>'admin_post_api',
	'uses'=>'PostController@getPostsAPI'
]);
Route::get('admin_post_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getpostsAPIaccordingID',
	'uses'=>'PostController@getPostsAPIaccordingID'
]);


Route::get('admin_post/add',[
	'as'=>'getaddPost',
	'uses'=>'PostController@getAddPost'
]);

Route::post('admin_post/add',[
	'as'=>'postaddPost',
	'uses'=>'PostController@postAddPost'
]);

Route::get('admin_post/edit/{id}',[
	'as'=>'geteditPost',
	'uses'=>'PostController@getEditPost'
]);

Route::post('admin_post/edit/{id}',[
	'as'=>'posteditPost',
	'uses'=>'PostController@postEditPost'
]);

Route::get('admin_post/delete/{id}',[
	'as'=>'getdeletePost',
	'uses'=>'PostController@getDeletePost'
]);

// end posts


// Skills

Route::get('admin_skill',[
	'as'=>'admin_skill',
	'uses'=>'SkillController@getSkill'
]);
Route::get('admin_skill_api',[
	'middleware' => 'cors',
	'as'=>'admin_skill_api',
	'uses'=>'SkillController@getSkillAPI'
]);
Route::get('admin_skill_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getskillaccordingID',
	'uses'=>'SkillController@getSkillaccordingID'
]);

Route::get('admin_skill/add',[
	'as'=>'getaddSkill',
	'uses'=>'SkillController@getAddSkill'
]);

Route::post('admin_skill/add',[
	'as'=>'postaddSkill',
	'uses'=>'SkillController@postAddSkill'
]);

Route::get('admin_skill/edit/{id}',[
	'as'=>'geteditSkill',
	'uses'=>'SkillController@getEditSkill'
]);

Route::post('admin_skill/edit/{id}',[
	'as'=>'posteditSkill',
	'uses'=>'SkillController@postEditSkill'
]);

Route::get('admin_skill/delete/{id}',[
	'as'=>'getdeleteSkill',
	'uses'=>'SkillController@getDeleteSkill'
]);

// end skills

// Location

Route::get('admin_location',[
	'as'=>'admin_location',
	'uses'=>'ControllerLocation@getLocation'
]);
Route::get('admin_location_api',[
	'middleware' => 'cors',
	'as'=>'admin_location_api',
	'uses'=>'ControllerLocation@getLocationAPI'
]);
Route::get('admin_location_according_IDemployer/{id}',[
	'middleware' => 'cors',
	'as'=>'getlocationAPIaccordingID',
	'uses'=>'ControllerLocation@getLocationAPIaccordingID'
]);
Route::get('admin_location_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getlocationaccordingID',
	'uses'=>'ControllerLocation@getLocationaccordingID'
]);

Route::get('admin_location/add',[
	'as'=>'getaddLocation',
	'uses'=>'ControllerLocation@getAddLocation'
]);

Route::post('admin_location/add',[
	'as'=>'postaddLocation',
	'uses'=>'ControllerLocation@postAddLocation'
]);

Route::get('admin_location/edit/{id}',[
	'as'=>'geteditLocation',
	'uses'=>'ControllerLocation@getEditLocation'
]);

Route::post('admin_location/edit/{id}',[
	'as'=>'posteditLocation',
	'uses'=>'ControllerLocation@postEditLocation'
]);

Route::get('admin_location/delete/{id}',[
	'as'=>'getdeleteLocation',
	'uses'=>'ControllerLocation@getDeleteLocation'
]);

// end Location

// Employer

Route::get('admin_employer',[
	'as'=>'admin_employer',
	'uses'=>'ControllerEmployer@getEmployers'
]);
Route::get('admin_employer_api',[
	'middleware' => 'cors',
	'as'=>'admin_employer_api',
	'uses'=>'ControllerEmployer@getEmployersAPI'
]);
Route::get('admin_employer_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getemployersAPIaccordingID',
	'uses'=>'ControllerEmployer@getEmployersAPIaccordingID'
]);
Route::get('admin_reviews_according_IDemployer/{id}',[
	'middleware' => 'cors',
	'as'=>'getreviewsAPIaccordingID',
	'uses'=>'ControllerEmployer@getReviewsAPIaccordingID'
]);
Route::get('admin_posts_according_IDemployer/{id}',[
	'middleware' => 'cors',
	'as'=>'getpostsAPIaccordingID',
	'uses'=>'ControllerEmployer@getPostsAPIaccordingID'
]);
Route::get('admin_location_according_IDemployer/{id}',[
	'middleware' => 'cors',
	'as'=>'getlocation',
	'uses'=>'ControllerEmployer@getLocation'
]);
Route::get('admin_jobs_detail/{id}',[
	'middleware' => 'cors',
	'as'=>'gettotal',
	'uses'=>'ControllerEmployer@getTotal'
]);


Route::get('admin_employer/add',[
	'as'=>'getaddEmployer',
	'uses'=>'ControllerEmployer@getaddEmployer'
]);

Route::post('admin_employer/add',[
	'as'=>'postaddEmployer',
	'uses'=>'ControllerEmployer@postAddEmployer'
]);

Route::get('admin_employer/edit/{id}',[
	'as'=>'geteditEmployer',
	'uses'=>'ControllerEmployer@getEditEmployer'
]);

Route::post('admin_employer/edit/{id}',[
	'as'=>'posteditEmployer',
	'uses'=>'ControllerEmployer@postEditEmployer'
]);

Route::get('admin_employer/delete/{id}',[
	'as'=>'getdeleteEmployer',
	'uses'=>'ControllerEmployer@getDeleteEmployer'
]);

// end employer

// Employer detail

Route::get('admin_employer_detail',[
	'as'=>'admin_employer_detail',
	'uses'=>'ControllerEmployerDetail@getEmployerDetails'
]);
Route::get('admin_employer_detail_api',[
	'middleware' => 'cors',
	'as'=>'admin_employer_detail_api',
	'uses'=>'ControllerEmployerDetail@getEmployerDetailsAPI'
]);
Route::get('admin_employer_detail_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getemployerDetailAPI',
	'uses'=>'ControllerEmployerDetail@getEmployerDetailAPI'
]);
Route::get('admin_employer_detail/add',[
	'as'=>'getaddEmployerDetail',
	'uses'=>'ControllerEmployerDetail@getaddEmployerDetail'
]);

Route::post('admin_employer_detail/add',[
	'as'=>'postaddEmployerDetail',
	'uses'=>'ControllerEmployerDetail@postAddEmployerDetail'
]);

Route::get('admin_employer_detail/edit/{id}',[
	'as'=>'geteditEmployerDetail',
	'uses'=>'ControllerEmployerDetail@getEditEmployerDetail'
]);

Route::post('admin_employer_detail/edit/{id}',[
	'as'=>'posteditEmployerDetail',
	'uses'=>'ControllerEmployerDetail@postEditEmployerDetail'
]);

Route::get('admin_employer_detail/delete/{id}',[
	'as'=>'getdeleteEmployerDetail',
	'uses'=>'ControllerEmployerDetail@getDeleteEmployerDetail'
]);

// end employer detail

// Candidate

Route::get('admin_candidate',[
	'as'=>'admin_candidate',
	'uses'=>'ControllerCandidate@getCandidates'
]);
Route::get('admin_candidate_api',[
	'middleware' => 'cors',
	'as'=>'admin_candidate_api',
	'uses'=>'ControllerCandidate@getCandidatesAPI'
]);
Route::get('admin_candidate/add',[
	'as'=>'getaddCandidate',
	'uses'=>'ControllerCandidate@getaddCandidate'
]);

Route::post('admin_candidate/add',[
	'as'=>'postaddCandidate',
	'uses'=>'ControllerCandidate@postAddCandidate'
]);

Route::get('admin_candidate/edit/{id}',[
	'as'=>'geteditCandidate',
	'uses'=>'ControllerCandidate@getEditCandidate'
]);

Route::post('admin_candidate/edit/{id}',[
	'as'=>'posteditCandidate',
	'uses'=>'ControllerCandidate@postEditCandidate'
]);

Route::get('admin_candidate/delete/{id}',[
	'as'=>'getdeleteCandidate',
	'uses'=>'ControllerCandidate@getDeleteCandidate'
]);

// end employer

// applied job
Route::get('admin_applied_job',[
	'middleware' => 'cors',
	'as'=>'admin_applied_job',
	'uses'=>'ControllerAppliedJob@getAppliedJob'
]);
Route::get('admin_applied_job_api',[
	'middleware' => 'cors',
	'as'=>'admin_applied_job_api',
	'uses'=>'ControllerAppliedJob@getAppliedJobAPI'
]);
// end applied job

// reviews
Route::get('admin_reviews',[
	'middleware' => 'cors',
	'as'=>'admin_reviews',
	'uses'=>'ControllerReviews@getReviews'
]);
Route::get('admin_reviews_api',[
	'middleware' => 'cors',
	'as'=>'admin_reviews_api',
	'uses'=>'ControllerReviews@getReviewsAPI'
]);
Route::get('admin_reviews_api/{id}',[
	'middleware' => 'cors',
	'as'=>'getreviewsAPIaccordingID',
	'uses'=>'ControllerReviews@getReviewsAPIaccordingID'
]);
// end reviews

// follow
Route::get('admin_follow',[
	'middleware' => 'cors',
	'as'=>'admin_follow',
	'uses'=>'ControllerFollow@getFollows'
]);
Route::get('admin_follow_api',[
	'middleware' => 'cors',
	'as'=>'admin_follow_api',
	'uses'=>'ControllerFollow@getFollowsAPI'
]);
// end follow

// Location

Route::get('admin_contact',[
	'as'=>'admin_contact',
	'uses'=>'ControllerContact@getContact'
]);
Route::get('admin_contact_api',[
	'middleware' => 'cors',
	'as'=>'admin_contact_api',
	'uses'=>'ControllerContact@getContactAPI'
]);

Route::get('admin_contact/edit/{id}',[
	'as'=>'geteditContact',
	'uses'=>'ControllerContact@getEditContact'
]);

Route::post('admin_contact/edit/{id}',[
	'as'=>'posteditContact',
	'uses'=>'ControllerContact@postEditContact'
]);



// end Location

// Product
Route::get('shop_product',[
	'as'=>'shop_product',
	'uses'=>'ControllerProduct@getProduct'
]);

Route::get('addProduct',[
	'as'=>'getaddProduct',
	'uses'=>'ControllerProduct@getAddProduct'
]);

Route::post('addProduct',[
	'as'=>'postaddProduct',
	'uses'=>'ControllerProduct@postAddProduct'
]);

Route::get('editProduct/{id}',[
	'as'=>'geteditProduct',
	'uses'=>'ControllerProduct@getEditProduct'
]);

Route::post('editProduct/{id}',[
	'as'=>'posteditProduct',
	'uses'=>'ControllerProduct@postEditProduct'
]);

Route::get('deleteProduct/{id}',[
	'as'=>'getdeleteProduct',
	'uses'=>'ControllerProduct@getDeleteProduct'
]);

// end product

Route::get('imageProduct',[
	'as'=>'imageProduct',
	'uses'=>'PageAdminController@getImageProduct'
]);

Route::get('addImageProduct',[
	'as'=>'addImageProduct',
	'uses'=>'PageAdminController@getAddImageProduct'
]);



Route::get('products',[
	'as'=>'products',
	'uses'=>'PageAdminController@getproduct'
]);

Route::get('addProduct',[
	'as'=>'addProduct',
	'uses'=>'PageAdminController@getAddProduct'
]);

Route::get('editProducts',[
	'as'=>'editProducts',
	'uses'=>'PageAdminController@getEditProduct'
]);


Route::get('demo',[
	'as'=>'demo',
	'uses'=>'ControllerCategories@getdemo'
]);



// end Admin



// new Admin 
// 
// 
// 

Route::get('dashboard',[
	'as'=>'dashboard',
	'uses'=>'PageAdminController@getDashboard'
]);

Route::get('banner',[
	'as'=>'banner',
	'uses'=>'PageAdminController@getBanner'
]);

Route::get('language',[
	'as'=>'language',
	'uses'=>'PageAdminController@getLanguager'
]);

Route::get('shop_brand',[
	'as'=>'shop_brand',
	'uses'=>'PageAdminController@getShop_brand'
]);





Route::get('shop_customer',[
	'as'=>'shop_customer',
	'uses'=>'PageAdminController@getShop_customery'
]);


Route::get('shop_product',[
	'as'=>'shop_product',
	'uses'=>'PageAdminController@getShop_productr'
]);

Route::get('shop_shipping',[
	'as'=>'shop_shipping',
	'uses'=>'PageAdminController@getShop_shipping'
]);

Route::get('shop_shipping_status',[
	'as'=>'shop_shipping_status',
	'uses'=>'PageAdminController@getShop_shipping_status'
]);

// login
Route::get('login',[
	'as'=>'getlogin',
	'uses'=>'LoginController@getLogin'
]);
Route::post('login',[
	'as'=>'postlogin',
	'uses'=>'LoginController@postLogin'
]);
// end login

// login
Route::get('logout',[
	'as'=>'getlogout',
	'uses'=>'LogoutController@getLogout'
]);
// end login

// setting admin
Route::get('setting',[
	'as'=>'getsetting',
	'uses'=>'SettingController@getSetting'
]);
Route::post('setting',[
	'as'=>'postsetting',
	'uses'=>'SettingController@postSetting'
]);
// end setting



