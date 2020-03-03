<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['product/(:any)']='product_det/index/$1';
$route['category/(:any)']='category/index/$1';
$route['cart/addCart']='Cart_controller/addCart';
$route['cart/delCart']='Cart_controller/delCart';
$route['cart/items']='Cart_controller/getItems';
$route['wishitems']='Cart_controller/getWishlist';
$route['cart/delWish']='Cart_controller/delWish';
$route['cart/addWish']='Cart_controller/addWish';
$route['orders']='Cart_controller/getOrders';
$route['cart/count']='Cart_controller/getCartcount';
$route['check/pincode']='Cart_controller/checkpin';
$route['login/reg']='login/newUSer/';
$route['login/new']='login/addUSer/';
$route['guest/reg']='Login/newGuest';
$route['login/guest']='Login/addGuest/';
$route['update/guest']='Login/updateGuest/';
$route['login/credentials']='Login/checkLogin';
$route['login/email']='Login/checkEmail';
$route['login/guestcheck']='Login/checkGuest';
$route['login/sms']='Login/mobileSMS';
$route['order/success']='Orders_controller/orderConfirm';
$route['secure_pay']='PUM_Payment';
$route['logout']='Signout';
$route['feedback']='welcome/feedback';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
