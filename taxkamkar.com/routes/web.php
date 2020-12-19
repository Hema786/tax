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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [
    'uses' => 'Auth\LoginController@redirectToGoogle',
    'as' => 'social.auth'
]);

Route::get('auth/google/callback', [
    'uses' => 'Auth\LoginController@handleGoogleCallback',
]);

//Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
//Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::group(['middleware' => 'auth'], function (){

    Route::get('dashboard',              [ 'as'=>'dashboard',            'uses' => 'DashboardController@index']);
    Route::get('account',               [ 'as'=>'account',              'uses' => 'AccountController@index']);
    Route::get('user',                   [ 'as'=>'user',                 'uses' => 'UserController@index']);
    
    Route::get('user/create',            [ 'as'=>'user.create',          'uses' => 'UserController@create']);
    Route::post('user/store',            [ 'as'=>'user.store',           'uses' => 'UserController@store']);
    Route::get('user/view/{id}',         [ 'as'=>'user.view',            'uses' => 'UserController@view']);
    Route::get('user/edit/{id}',         [ 'as'=>'user.edit',            'uses' => 'UserController@edit']);
    Route::post('user/update/{id}',           [ 'as'=>'user.update',     'uses' => 'UserController@update']);
    Route::get('user/delete/{id}',       [ 'as'=>'user.delete',          'uses' => 'UserController@delete']);
    Route::get('user/search',       [ 'as'=>'user.search',      'uses' => 'UserController@search']);

    Route::get('employee',               [ 'as'=>'employee',              'uses' => 'EmployeeController@index']);
    Route::get('employee/create',        [ 'as'=>'employee.create',       'uses' => 'EmployeeController@create']);
    Route::post('employee/store',        [ 'as'=>'employee.store',        'uses' => 'EmployeeController@store']);
    Route::get('employee/edit/{id}',     [ 'as'=>'employee.edit',         'uses' => 'EmployeeController@edit']);
    Route::post('employee/update/{id}',  [ 'as'=>'employee.update',       'uses' => 'EmployeeController@update']);
    Route::get('employee/delete/{id}',   [ 'as'=>'employee.delete',       'uses' => 'EmployeeController@delete']);

    Route::get('designation',               [ 'as'=>'designation',              'uses' => 'DesignationController@index']);
    Route::get('designation/create',        [ 'as'=>'designation.create',       'uses' => 'DesignationController@create']);
    Route::post('designation/store',        [ 'as'=>'designation.store',        'uses' => 'DesignationController@store']);
    Route::get('designation/edit/{id}',     [ 'as'=>'designation.edit',         'uses' => 'DesignationController@edit']);
    Route::post('designation/update/{id}',  [ 'as'=>'designation.update',       'uses' => 'DesignationController@update']);
    Route::get('designation/delete/{id}',   [ 'as'=>'designation.delete',       'uses' => 'DesignationController@delete']);

    Route::get('department',               [ 'as'=>'department',              'uses' => 'DepartmentController@index']);
    Route::get('department/create',        [ 'as'=>'department.create',       'uses' => 'DepartmentController@create']);
    Route::post('department/store',        [ 'as'=>'department.store',        'uses' => 'DepartmentController@store']);
    Route::get('department/edit/{id}',     [ 'as'=>'department.edit',         'uses' => 'DepartmentController@edit']);
    Route::post('department/update/{id}',  [ 'as'=>'department.update',       'uses' => 'DepartmentController@update']);
    Route::get('department/delete/{id}',   [ 'as'=>'department.delete',       'uses' => 'DepartmentController@delete']);

    Route::get('designation',               [ 'as'=>'designation',              'uses' => 'DesignationController@index']);
    Route::get('designation/create',        [ 'as'=>'designation.create',       'uses' => 'DesignationController@create']);
    Route::post('designation/store',        [ 'as'=>'designation.store',        'uses' => 'DesignationController@store']);
    Route::get('designation/edit/{id}',     [ 'as'=>'designation.edit',         'uses' => 'DesignationController@edit']);
    Route::post('designation/update/{id}',  [ 'as'=>'designation.update',       'uses' => 'DesignationController@update']);
    Route::get('designation/delete/{id}',   [ 'as'=>'designation.delete',       'uses' => 'DesignationController@delete']);


    Route::get('taxer',               [ 'as'=>'taxer',              'uses' => 'TaxerController@index']);
    Route::get('taxer/create',        [ 'as'=>'taxer.create',       'uses' => 'TaxerController@create']);
    Route::post('taxer/store',        [ 'as'=>'taxer.store',        'uses' => 'TaxerController@store']);
    Route::get('taxer/edit/{id}',     [ 'as'=>'taxer.edit',         'uses' => 'TaxerController@edit']);
    Route::post('taxer/update/{id}',  [ 'as'=>'taxer.update',       'uses' => 'TaxerController@update']);
    Route::get('taxer/delete/{id}',   [ 'as'=>'taxer.delete',       'uses' => 'TaxerController@delete']);

    Route::get('city',               [ 'as'=>'city',              'uses' => 'CityController@index']);
    Route::get('city/create',        [ 'as'=>'city.create',       'uses' => 'CityController@create']);
    Route::post('city/store',        [ 'as'=>'city.store',        'uses' => 'CityController@store']);
    Route::get('city/edit/{id}',     [ 'as'=>'city.edit',         'uses' => 'CityController@edit']);
    Route::post('city/update/{id}',  [ 'as'=>'city.update',       'uses' => 'CityController@update']);
    Route::get('city/delete/{id}',   [ 'as'=>'city.delete',       'uses' => 'CityController@delete']);

    Route::get('shift',               [ 'as'=>'shift',              'uses' => 'ShiftController@index']);
    Route::get('shift/create',        [ 'as'=>'shift.create',       'uses' => 'ShiftController@create']);
    Route::post('shift/store',        [ 'as'=>'shift.store',        'uses' => 'ShiftController@store']);
    Route::get('shift/edit/{id}',     [ 'as'=>'shift.edit',         'uses' => 'ShiftController@edit']);
    Route::post('shift/update/{id}',  [ 'as'=>'shift.update',       'uses' => 'ShiftController@update']);
    Route::get('shift/delete/{id}',   [ 'as'=>'shift.delete',       'uses' => 'ShiftController@delete']);

    Route::get('leave',               [ 'as'=>'leave',              'uses' => 'LeaveController@index']);
    Route::get('leave/create',        [ 'as'=>'leave.create',       'uses' => 'LeaveController@create']);
    Route::post('leave/store',        [ 'as'=>'leave.store',        'uses' => 'LeaveController@store']);
    Route::get('leave/search',       [ 'as'=>'leave.search',      'uses' => 'LeaveController@search']);
//    Route::get('leave/edit/{id}',     [ 'as'=>'leave.edit',         'uses' => 'LeaveController@edit']);
//    Route::post('leave/update/{id}',  [ 'as'=>'leave.update',       'uses' => 'LeaveController@update']);
//    Route::get('leave/delete/{id}',   [ 'as'=>'leave.delete',       'uses' => 'LeaveController@delete']);
    Route::post('leave/approve/{id}',        [ 'as'=>'leave.approve',        'uses' => 'LeaveController@approve']);
    Route::post('leave/paid/{id}',        [ 'as'=>'leave.paid',        'uses' => 'LeaveController@paid']);
//    Route::post('leave/pending/{id}',        [ 'as'=>'leave.pending',        'uses' => 'LeaveController@pending']);
//    Route::post('leave/reject/{id}',        [ 'as'=>'leave.reject',        'uses' => 'LeaveController@reject']);

    Route::get('total-leave',               [ 'as'=>'total-leave',              'uses' => 'TotalLeaveController@index']);
    Route::get('total-leave/create',        [ 'as'=>'total-leave.create',       'uses' => 'TotalLeaveController@create']);
    Route::post('total-leave/store',        [ 'as'=>'total-leave.store',        'uses' => 'TotalLeaveController@store']);
    Route::get('total-leave/edit/{id}',     [ 'as'=>'total-leave.edit',         'uses' => 'TotalLeaveController@edit']);
    Route::post('total-leave/update/{id}',  [ 'as'=>'total-leave.update',       'uses' => 'TotalLeaveController@update']);
    Route::get('total-leave/delete/{id}',   [ 'as'=>'total-leave.delete',       'uses' => 'TotalLeaveController@delete']);

    Route::get('managesalary',                    [ 'as'=>'managesalary',                   'uses' => 'ManagesalaryController@index']);
    Route::get('managesalary/detail/{id}',        [ 'as'=>'managesalary.detail',           'uses' => 'ManagesalaryController@detail']);
    Route::post('managesalary/store',             [ 'as'=>'managesalary.store',           'uses' => 'ManagesalaryController@store']);
    Route::get('managesalary/salarylist',         [ 'as'=>'managesalary.salarylist',           'uses' => 'ManagesalaryController@salarylist']);
    Route::get('managesalary/makepayment',        [ 'as'=>'managesalary.makepayment',               'uses' => 'ManagesalaryController@makepayment']);
    Route::post('managesalary/make-advance',      [ 'as'=>'managesalary.makeadvance',               'uses' => 'ManagesalaryController@makeAdvance']);
//    Route::post('managesalary/search',            [ 'as'=>'managesalary.search',               'uses' => 'ManagesalaryController@search']);

    Route::get('event', ['as'=>'event', 'uses' => 'EventController@event']);
    Route::post('event/store', ['as'=>'event.store', 'uses' => 'EventController@store']);

    Route::get('calendar',['as'=>'calendar', 'uses' => 'CalendarController@index']);
    Route::get('calendar/add',['as'=>'calendar.add', 'uses' =>'CalendarController@add']);
    Route::post('calendar/store',['as'=>'calendar.store', 'uses' =>'CalendarController@store']);

    Route::get('profile',                   [ 'as'=>'profile',                   'uses' => 'ProfileController@index']);
    Route::get('change-password',           [ 'as'=>'change.password',           'uses' => 'ProfileController@changePassword']);

    Route::match(['get','match'],        'update-password',           [ 'as'=>'update.password',           'uses' => 'ProfileController@updatePassword']);

    Route::get('downloads',                 [ 'as'=>'download',                   'uses' => 'DownloadController@index']);

});
Auth::routes();
Route::get('/home', 'AccountController@index')->name('account');

Route::get('/pricing', 'PricingController@index')->name('pricing');

Route::get('/taxfilling', 'TaxfillingController@index')->name('taxfilling');

Route::get('/emi', 'EmiController@index')->name('emi');

Route::get('/formfill', 'FormfillController@index')->name('formfill');

Route::get('/taxupload', 'TaxuploadController@index')->name('taxupload');
Route::post('/taxuploads', 'TaxuploadController@upload');
#Route::match(['get', 'post'], '/taxupload', 'TaxuploadController@index');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');


	Route::get('tax',               [ 'as'=>'tax',              'uses' => 'TaxController@index']);
    Route::get('tax/create',        [ 'as'=>'tax.create',       'uses' => 'TaxController@create']);
    Route::post('tax/store',        [ 'as'=>'tax.store',        'uses' => 'TaxController@store']);
    Route::get('tax/edit/{id}',     [ 'as'=>'tax.edit',         'uses' => 'TaxController@edit']);
    Route::post('tax/update/{id}',  [ 'as'=>'tax.update',       'uses' => 'TaxController@update']);
    Route::get('tax/delete/{id}',   [ 'as'=>'tax.delete',       'uses' => 'TaxController@delete']);
    
    //Faq
	Route::get('faq', ['as'=>'faq', 'uses' => 'FaqController@index']);
	
	Route::get('hra',               [ 'as'=>'hra',              'uses' => 'HraController@index']);
    Route::get('hra/create',        [ 'as'=>'hra.create',       'uses' => 'HraController@create']);
	Route::get('hra/result',        [ 'as'=>'hra.result',       'uses' => 'HraController@result']);
    Route::post('hra/store',        [ 'as'=>'hra.store',        'uses' => 'HraController@store']);
    Route::get('hra/edit/{id}',     [ 'as'=>'hra.edit',         'uses' => 'HraController@edit']);
    Route::post('hra/update/{id}',  [ 'as'=>'hra.update',       'uses' => 'HraController@update']);
    Route::get('hra/delete/{id}',   [ 'as'=>'hra.delete',       'uses' => 'HraController@delete']);
	
	Route::get('rent',               [ 'as'=>'rent',              'uses' => 'RentController@index']);
    Route::get('rent/create',        [ 'as'=>'rent.create',       'uses' => 'RentController@create']);
	Route::get('rent/result',        [ 'as'=>'rent.result',       'uses' => 'RentController@result']);
    Route::post('rent/store',        [ 'as'=>'rent.store',        'uses' => 'RentController@store']);
    Route::get('rent/edit/{id}',     [ 'as'=>'rent.edit',         'uses' => 'RentController@edit']);
    Route::post('rent/update/{id}',  [ 'as'=>'rent.update',       'uses' => 'RentController@update']);
    Route::get('rent/delete/{id}',   [ 'as'=>'rent.delete',       'uses' => 'RentController@delete']);
	
	Route::get('incometax',                [ 'as'=>'incometax',              'uses' => 'IncometaxController@index']);
    Route::get('incometax/create',         [ 'as'=>'incometax.create',       'uses' => 'IncometaxController@create']);
	Route::get('incometax/result',         [ 'as'=>'incometax.result',       'uses' => 'IncometaxController@result']);
    Route::post('incometax/store',         [ 'as'=>'incometax.store',        'uses' => 'IncometaxController@store']);
    Route::get('incometax/edit/{id}',      [ 'as'=>'incometax.edit',         'uses' => 'IncometaxController@edit']);
    Route::post('incometax/update/{id}',   [ 'as'=>'incometax.update',       'uses' => 'IncometaxController@update']);
    Route::get('incometax/delete/{id}',    [ 'as'=>'incometax.delete',       'uses' => 'IncometaxController@delete']);
    
    
    Route::get('taxplanner',               [ 'as'=>'taxplanner',              'uses' => 'TaxplannerController@index']);
    Route::get('taxplanner/create',        [ 'as'=>'taxplanner.create',       'uses' => 'TaxplannerController@create']);
    Route::post('taxplanner/store',        [ 'as'=>'taxplanner.store',        'uses' => 'TaxplannerController@store']);
    
    
    Route::get('account',               [ 'as'=>'account',              'uses' => 'AccountController@index']);
    Route::get('account/create',        [ 'as'=>'account.create',       'uses' => 'AccountController@create']);
	Route::get('account/result',        [ 'as'=>'account.result',       'uses' => 'AccountController@result']);
    Route::post('account/store',        [ 'as'=>'account.store',        'uses' => 'AccountController@store']);
    Route::get('account/edit/{id}',     [ 'as'=>'account.edit',         'uses' => 'AccountController@edit']);
    Route::post('account/update/{id}',  [ 'as'=>'account.update',       'uses' => 'AccountController@update']);
    Route::get('account/delete/{id}',   [ 'as'=>'account.delete',       'uses' => 'AccountController@delete']);