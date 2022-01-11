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


Route::middleware('role:Admin')->group(function () {
	Route::resource('rooms','RoomController');
	Route::resource('users','UserController');
	Route::resource('roles','RoleController');
	Route::resource('DoctorBackend','DoctorBackendController');
	Route::resource('appointmentbackendadmin','AppointmentBackendAdminController');

	Route::resource('DegreeBackend','DegreeBackendController');

	Route::resource('SpecializationBackend','SpecializationBackendController');

	Route::resource('ScheduleBackend','ScheduleBackendController');
	Route::post('ScheduleBackend/fetchDoctor','ScheduleBackendController@fetchDoctor')->name('fetchDoctor');

	Route::get('/ajax-subcat',function ()
	{
		$cat_id = Request::get('cat_id');
		$subcategories = DB::table('doctors')
						->join('users','users.id','=','doctors.user_id')
						->where('speciality_id','=',$cat_id)
						->select('users.*')
						->get();
		return Response::json($subcategories);
	});

	

	Route::resource('curingpatientsearch','CuringPatientSearchController');

	Route::resource('date','DateController');
	Route::resource('search','SearchController');
	Route::resource('dashboard','DashboardController');

	// Route::resource('specializeds','specialityController');

	Route::resource('contactbackend','contactController');

	

	

});

Route::get('/ajax-subcat',function () {
	$cat_id = Request::get('cat_id');
	//$subcategories = Doctor::where('speciality_id','=',$cat_id)->get();
	$subcategories = DB::table('doctors')
            ->join('users', 'users.id', '=', 'doctors.user_id')
            ->where('speciality_id','=',$cat_id)
            ->select('users.*')
            ->get();
	return Response::json($subcategories);
});

Route::get('/ajax-subcat1',function () {
	$cat_id = Request::get('cat_id');
	//$subcategories = Doctor::where('speciality_id','=',$cat_id)->get();
	$subcategories = DB::table('schedules')
            ->where('user_id','=',$cat_id)
            ->select('schedules.*')
            ->get();
	return Response::json($subcategories);
});

Route::resource('appointmentbackend','AppointmentBackendController');

Route::resource('patients','PatientController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('appointmentfrontend','AppointmentFrontendController');

Route::resource('/','SpecializationFrontendController');

Route::resource('doctorfrontend','doctorController');

Route::resource('contact','ContactUsController');

Route::get('premiums','HomeController@premium')->name('premiums');
Route::get('ambulances','HomeController@ambulance')->name('ambulances');
Route::get('rehabilitations','HomeController@rehabilitation')->name('rehabilitations');
Route::get('pharmacys','HomeController@pharmacy')->name('pharmacys');
Route::get('patientrooms','HomeController@patientroom')->name('patientrooms');
Route::get('ccares','HomeController@ccare')->name('ccares');

Route::get('operations','HomeController@operation')->name('operations');
Route::get('imagings','HomeController@imaging')->name('imagings');
Route::get('recoverys','HomeController@recovery')->name('recoverys');
Route::get('highdepencys','HomeController@highdepency')->name('highdepencys');
Route::get('endoscopys','HomeController@endoscopy')->name('endoscopys');
Route::get('dogbites','HomeController@dogbite')->name('dogbites');

Route::post('logoutyou','LogoutController@logout')->name('logoutyou');

Route::resource('curingpatient','CuringPatientController');

Route::get('/ajax-subcat3',function () {
	$cat_id = Request::get('cat_id');
	//$subcategories = Doctor::where('speciality_id','=',$cat_id)->get();
	$subcategories = DB::table('rooms')
            ->where('id','=',$cat_id)
            ->select('rooms.*')
            ->get();
	return Response::json($subcategories);
});

Route::get('/ajax-subcat4',function () {
	$cat_id = Request::get('cat_id');
	//$subcategories = Doctor::where('speciality_id','=',$cat_id)->get();
	$subcategories = DB::table('rooms')
            ->where('id','=',$cat_id)
            ->select('rooms.*')
            ->get();
	return Response::json($subcategories);
});
Route::resource('showdoctors','showDoctorController');

Route::get('/send/email', 'HomeController@mail');