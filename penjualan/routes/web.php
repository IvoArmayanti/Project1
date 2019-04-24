<html>
<head>	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	</head>
	<body bgcolor= "#bdb76b">
	
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

Route::get('/produk', 'produkController@index');

Route::get('/show/{id}', function ($id) { 
echo "Nilai Parameter Adalah ".$id; 
}); 

Route::get('/produk', 'produkController@index');

Route::get('/produk/show', 'produkController@show'); 

Route::get('/pelanggan', 'pelangganController@index'); 

Route::resource('produk','produkController');

Route::get('/halaman',function(){
$title = 'Harry Pooter'; 
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten')); 
}); 

?>
</body>
</html>

