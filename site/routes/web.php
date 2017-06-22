<?php




Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/deneme', 'HomeController@index');
Route::get('/sayfa/doktor', 'HomeController@doktor');
Route::get('/sayfa/liste', 'HomeController@liste');
Route::get('/sayfa/blog', 'HomeController@blog');
Route::get('kurum/register', 'HomeController@kurumregister');
Route::post('kurum/register', 'Kurum\RegisterController@CorporationRegister');




//Kurum İşlemleri
Route::prefix('kurum')->group(function() {

	Route::get('/login', 'Auth\CorporationLoginController@showLoginForm')->name('corporation.login');
	Route::post('/login', 'Auth\CorporationLoginController@login')->name('corporation.login.submit');
	

	Route::get('/', 'Kurum\CorporationController@index')->name('corporation.anasayfa');
	Route::get('/about', 'Kurum\CorporationController@about')->name('corporation.hakkimizda');
	Route::get('/doktor-ekle', 'Kurum\CorporationController@doktorekle')->name('corporation.doktorekle');

	

	//Makale İşlemleri
	Route::get('/makale', 'Kurum\ArticleController@makaleler')->name('corporation.makaleler');
	Route::get('/makale/ekle', 'Kurum\ArticleController@makaleekle')->name('corporation.makaleekle');
	Route::post("/makale/ekle","Kurum\ArticleController@store");
	Route::get ("/makale/detay/{id?}","Kurum\ArticleController@show");
	Route::get ("/makale/guncelle/{Makaleid?}","Kurum\ArticleController@edit");
	Route::post("/makale/guncelle/{Makaleid?}","Kurum\ArticleController@update");
	Route::get ("/makale/sil/{Makaleid?}","Kurum\ArticleController@silinecek");
	Route::post("/makale/sil/{Makaleid?}","Kurum\ArticleController@destroy");

	//Video İşlemleri
	route::get ("/video","Kurum\VideoController@videoliste")->name('corporation.videolar');

	route::get ("/video/ekle", "Kurum\VideoController@videoekle");

	route::post("/video/ekle", "Kurum\VideoController@store");
	Route::get ("/video/detay/{videoid?}","Kurum\VideoController@show");

	Route::get ("/video/guncelle/{videoid?}","Kurum\VideoController@edit");
	Route::post("/video/guncelle/{videoid?}","Kurum\VideoController@update");

	Route::get ("/video/sil/{videoid?}","Kurum\VideoController@sil");
	Route::post("/video/sil/{videoid?}","Kurum\VideoController@destroy");


	//Corporation Adding,Update,Delete Doctor

	Route::get ("/doktor/liste","Kurum\DoctorController@DoktorListe");
	Route::get ("/doktor/ekle","Kurum\DoctorController@DoktorEkle");
	Route::post("/doktor/ekle","Kurum\DoctorController@store");

	Route::get ("/doktor/detay/{DoktorID?}","Kurum\CorporationController@doktorprofil");
	
	Route::get ("/doktor/guncelle/{Kisi?}","Kurum\DoctorController@edit");
	Route::post("/doktor/guncelle/{Kisi?}","Kurum\DoctorController@update");
	Route::get ("/doktor/sil/{Kisi?}","Kurum\DoctorController@silinecek");
	Route::post("/doktor/sil/{Kisi?}","Kurum\DoctorController@destroy");

});



//Admin İşlemleri
Route::prefix('admin')->group(function() {
	
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get ("/doktor/liste","Admin\DoctorController@DoktorListe");
	Route::get ("/doktor/ekle","Admin\DoctorController@DoktorEkle");
	Route::post("/doktor/ekle","Admin\DoctorController@store");
	Route::get ("/doktor/detay/{Kisi?}","Admin\DoctorController@show");
	Route::get ("/doktor/guncelle/{Kisi?}","Admin\DoctorController@edit");
	Route::post("/doktor/guncelle/{Kisi?}","Admin\DoctorController@update");
	Route::get ("/doktor/sil/{Kisi?}","Admin\DoctorController@silinecek");
	Route::post("/doktor/sil/{Kisi?}","Admin\DoctorController@destroy");

	

});




//Doktor İşlemleri
Route::prefix('doktor')->group(function() {


	Route::get("/deneyim","Doctor\HomeController@deneyim");

	Route::get ('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
	Route::post('/login', 'Auth\DoctorLoginController@login')->name('docadmin.login.submit');
	Route::get ('/', 'Doctor\HomeController@Doktorindex')->name('doctor.dashboard');


	route::get ("/makale","Doctor\ArticleController@makaleliste");
	Route::get ("/makale/ekle","Doctor\ArticleController@makaleekle");
	Route::post("/makale/ekle","Doctor\ArticleController@store");
	Route::get ("/makale/detay/{id?}","Doctor\ArticleController@show");
	Route::get ("/makale/guncelle/{Makaleid?}","Doctor\ArticleController@edit");
	Route::post("/makale/guncelle/{Makaleid?}","Doctor\ArticleController@update");
	Route::get ("/makale/sil/{Makaleid?}","Doctor\ArticleController@silinecek");
	Route::post("/makale/sil/{Makaleid?}","Doctor\ArticleController@destroy");


	route::get ("/video","Doctor\VideoController@videoliste");
	route::get ("/video/ekle", "Doctor\VideoController@videoekle");
	route::post("/video/ekle", "Doctor\VideoController@store");
	Route::get ("/video/detay/{videoid?}","Doctor\VideoController@show");
	Route::get ("/video/guncelle/{videoid?}","Doctor\VideoController@edit");
	Route::post("/video/guncelle/{videoid?}","Doctor\VideoController@update");
	Route::get ("/video/sil/{videoid?}","Doctor\VideoController@sil");
	Route::post("/video/sil/{videoid?}","Doctor\VideoController@destroy");

	route::get ("/sorucevap/soru","Doctor\QuestionController@questionlist");
	route::get ("/sorucevap/cevap/{id?}","Doctor\QuestionController@questiondetail");	
 	//route::get ("/sorucevap/cevap","Doctor\HomeController@cevap");


	Route::get ("/profil","Doctor\HomeController@profilepage");




});


