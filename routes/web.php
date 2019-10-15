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
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix' => 'users',
    'name' => 'users.'
], function () {
    Route::get('/','UserControllers@index')->name('users.index');

    Route::post('store', function ( Request $request ) {
    $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'password' => bcrypt('123456'),
            'phone_number'=>$data['phone_number'],
            'role' => 1,'is_active' => 1,

        ]);

        return redirect()->route('users.index');
    })->name('users.store');

    Route::get('/create', function () {
        return view('create');
    });

    Route::get('/update/{id}','UserControllers@edit')->name('users.update');


    Route::post('edit','UserControllers@update')->name('users.edit');


    Route::get('create', 'UserControllers@create')->name('create');

    Route::get('{id}','UserController@show')->name('users.show');


    Route::post('delete/{id}', 'UserControllers@destroy')->name('users.delete');

});
Route::group(['prefix' => 'post','name'=>'post'], function () {
    Route::get('/','PostsController@index')->name('post.index');
    Route::get('delete/{id}','PostsController@destroy')->name('post.delete');
    Route::get('create', 'PostsController@create')->name('create');
    Route::get('/update/{id}','PostsController@edit')->name('post.update');


    Route::post('edit','PostsController@update')->name('post.edit');

});
Route::group(['prefix' => 'comment','name'=>'comments'], function () {
    Route::get('/','CommentsController@index')->name('comment.index');
});



