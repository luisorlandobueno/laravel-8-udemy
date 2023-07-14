<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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


Route::get('/hola', function () {
    return "hola soy una ruta";
})->name('saludo');



Route::get('/suma', function () {

    $a=5;
    $b=10;
    return $a + $b;
})->name('operacion');



Route::get('/nombre/{nombre}', function ($nombre) {
    return 'mi nombre es  '.$nombre;
})->name('tu.nombre');

Route::get('/suma/{a}', function ($a) {

    $b=3;


    return 'la suma  es  '.$a + $b;

});


Route::get('/operacion/{a?}', function ($a=4) {

    $b=3;

    return $a + $b;

});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {

    return $postId + $commentId;

});




/*Route::get('/user/{name}', function ($name) {

return $name;

    //
})->where('name', '[A-Za-z]+');*/


/*Route::get('/user/{id}', function ($id) {

    return $id;
    //
})->where('id', '[0-9]+');*/


Route::get('/user/{id}/{name}', function ($id, $name) {

     return $id . $name;


    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



Route::redirect('/publicacionesyy', '/LARAVEL/proyecto/public/articulosv', 302);
//Route::redirect('/publicacionesj','http://localhost/LARAVEL/proyecto/public/articulosde');


//Route::permanentRedirect('/publicacionesu', 'http://localhost/LARAVEL/proyecto/public/articulosb');



Route::get('/articulosv', function (){
    
    return 'Estoy en articulos';
});

Route::get('/redirigir', function (){
    
    return redirect()->route('saludo');
});


Route::get('/verificar', function (){
    
     if (Request::route()->named('verify')) {

        return "OK";
    }else{

         return "no es la ruta";

    }


})->name('verify');



Route::namespace('Admin')->group(function () {
   
        Route::get('/micontroller1' ,[AdminController::class , 'index1']);

        Route::get('/micontroller2' ,[AdminController::class , 'index2']);

        Route::get('/micontroller3' ,[AdminController::class , 'index3']);

});




/*Route::group(['namespace' => 'Admin'] ,function(){

      


});*/


Route::prefix('seccion')->group(function () {

    Route::get('/primera', function () {
        return 'Primera...';
    });

     Route::get('/segunda', function () {
        return 'segunda...';
    });

     Route::get('/tercera', function () {
        return 'tercera...';
    });



});




Route::name('calzado.')->prefix('/zapatos')->group(function () {
    Route::get('/deportivos', function () {
        return 'Deportivos';
    })->name('zapato');

    Route::get('/casuales', function () {
        return 'Casual';
    })->name('casual');

    Route::get('/sandalias', function () {
        return 'sandalias';
    })->name('sanda');
});




































Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');