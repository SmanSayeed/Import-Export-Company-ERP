<?php

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
/*================Admin Login====================*/

Route::get('/','adminController@login')->name('admin-login');

Route::get('dashboard','superAdminController@getdashboard')->name('dashboard');

Route::get('admin-logout','superAdminController@logout')->name('admin-logout');

Route::post('admin-dashboard','adminController@dashboard')->name('admin-dashboard');





/* Dashboard*/ 
//Route::get('/','master@index');
//Route::get('dashboard','master@index');

//================ Profile =================//
Route::get('/user-profile','master@userProfile');

//================ Customer ================//
Route::get('/customer-registration','customer@register');
Route::get('/customer-details','customer@details');

Route::post('customer-store','customer@store');
Route::get('/customer-edit/{id}','customer@edit');
Route::post('/customer-edit/{id}','customer@update');
Route::get('customer-destroy/{id}','customer@delete');
Route::get('customer-single/{id}','customer@details');

//================Bank====================//
Route::get('/bank-registration','bank@register');
Route::get('/bank-details','bank@details')->name('saad');

Route::post('bank-store','bank@store');
Route::get('/bank-edit/{id}','bank@edit');
Route::post('/bank-edit/{id}','bank@update');
Route::get('bank-destroy/{id}','bank@delete');
Route::get('bank-single/{id}','bank@details');



//================Product====================//
Route::get('/pro-registration','pro@register');
Route::get('/pro-details','pro@details')->name('pro-details');

Route::post('pro-store','pro@store')->name('pro-store');
Route::get('/pro-edit/{id}','pro@edit');
Route::post('/pro-edit/{id}','pro@update');
Route::get('pro-destroy/{id}','pro@delete');
Route::get('pro-single/{id}','pro@details');




//================Sales====================//
Route::get('/sales-registration','sales@register');
Route::get('/sales-details','sales@details');

Route::post('sales-store','sales@store');
Route::get('/sales-edit/{id}','sales@edit');
Route::post('/sales-edit/{id}','sales@update');
Route::get('sales-destroy/{id}','sales@delete');
Route::get('sales-single/{id}','sales@details');

Route::get('sales-contract-product-list-page/{id}','sales@sales_contract_product_list_page');
Route::get('sales-contract-product-list-edit/{id}','sales@sales_contract_product_list_edit');
Route::post('sales-contract-product-list-edit/{id}','sales@sales_contract_product_list_update');
Route::post('sales-contract-product-list-delete/{id}','sales@sales_contract_product_list_delete');
//AJAX
Route::post('fetch', 'sales@fetch')->name('fetch');

//============================PDF Generate==========//

Route::get('sales-contract-page','pdfGenerate@index');
Route::get('sales-contract-view/{id}','pdfGenerate@contractView');
Route::get('sales-contract-download/{id}','pdfGenerate@pdfdownload');

Route::get('commercial-invoice-page','pdfGenerate@commercial_invoice_page');
Route::get('commercial-invoice-edit/{id}','pdfGenerate@commercial_invoice_edit')->name('commercial-invoice-edit');
Route::post('commercial-invoice-edit/{id}','pdfGenerate@commercial_invoice_update')->name('commercial-invoice-edit');

Route::get('commercial-invoice-manage/{id}','pdfGenerate@commercial_invoice_manage');

Route::get('commercial-invoice-publish/{id}','pdfGenerate@commercial_invoice_publish')->name('commercial-invoice-publish');

Route::get('commercial-invoice-unpublish/{id}','pdfGenerate@commercial_invoice_unpublish')->name('commercial-invoice-unpublish');


Route::get('commercial-invoice-view/{id}','pdfGenerate@commercial_invoice_view');
Route::get('commercial-invoice-download/{id}','pdfGenerate@commercial_invoice_download');


Route::get('packing-invoice-view/{id}','pdfGenerate@packing_invoice_view');
Route::get('packing-invoice-download/{id}','pdfGenerate@packing_invoice_download');


Route::get('expform-view/{id}','pdfGenerate@expform_view');
Route::get('expform-download/{id}','pdfGenerate@expform_download');

Route::get('cashhub-view/{id}','pdfGenerate@cashhub_view');
Route::get('cashhub-download/{id}','pdfGenerate@cashhub_download');



/*======= TLE MASTER ========*/

Route::get('foo', function () {
    return view('tle_master');
});
