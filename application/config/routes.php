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

/*
 * Route will call controller, Controller will call Model and show the Views.
 * Views are never called directly, they must be loaded by a controller.
 * http://www.codeigniter.com/user_guide/general/views.html
 */


// Route for / (starting point)
$route['default_controller'] 	= 'welcome'; 		// Welcome Controller, index method

// Route for Billy Controller
$route['billy'] 						= 'billy/indexMethod';		  	// Billy controller, indexMethod method
$route['billy/(:any)/(:any)/(:any)'] 	= 'billy/testMethod/$1/$2/$3';  // Billy controller, testMethod method
$route['billy/testCommonFunction'] 		= 'billy/testCommonFunction/';  // Billy controller, testCommonFunction method
$route['billy/testPassingDataToView']   = 'billy/testPassingDataToView/';  // Billy controller, testPassingDataToView method
$route['billy/testGetDataFromModel']    = 'billy/testGetDataFromModel/';  // Billy controller, testGetDataFromModel method
$route['billy/testingHelpers']    		= 'billy/testingHelpers/';  // Billy controller, testingHelpers method
$route['billy/handleUpload']    		= 'billy/handleUpload/';  // Billy controller, handleUpload method
$route['billy/handleFormData']    		= 'billy/handleFormData/';  // Billy controller, handleFormData method
$route['billy/testSession']    			= 'billy/testSession/';  // Billy controller, testSession method
$route['billy/handleLanguage']    		= 'billy/handleLanguage/';  // Billy controller, handleLanguage method
$route['billy/handlePagination']    	= 'billy/handlePagination/';  // Billy controller, handlePagination method
$route['billy/handleFormValidation']    = 'billy/handleFormValidation/';  // Billy controller, handlePagination method
$route['billy/testDatabaseMethods']    	= 'billy/testDatabaseMethods/';  // Billy controller, testDatabaseMethods method


// Route for news
$route['news/create'] 			= 'news/create';	// News Controller, create method
$route['news/(:any)'] 			= 'news/view/$1'; 	// News Controller, view method
$route['news'] 					= 'news';		  	// News controller, index method

// Route for Pages
$route['(:any)'] 				= 'pages/view/$1'; 	// Pages Controller, View Method

// Route for 404
$route['404_override'] 			= '';

$route['translate_uri_dashes'] 	= FALSE;
