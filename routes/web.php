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

Route::get('/', function () {
    return view('welcome');
});

Route::get('route-starter', function () {
    $users = User::all()->toArray();

    return view('starter', [
        'users' => $users
    ]);
})->name('users.index');

Route::get('users/{id}', function ($id) {
    $user = User::find($id);
    dd($user);
})->name('users.show');

Route::get('users/create', function (Faker $faker) {
    // Code ...
    $user = User::create([
        'name' => 'thanhtm',
        'email' => $faker->unique()->safeEmail,
        'birthday' => $faker->date(),
        'password' => bcrypt('123456'),
    ]);

    return redirect()->route('users.index');
});

Route::get('users/update/{id}', function ($id) {
    $user = User::find($id);
//    $user->name = 'Thanh';
//    $user->email = 'thanhtmph06914@fpt.edu.vn';
//    $user->save();

    $user->update([
        'name' => 'Thanh dep trai',
    ]);

    return redirect()->route('users.index');
});

Route::get('users/delete/{id}', function ($id) {
    $user = User::find($id);

    $user->delete();

    return redirect()->route('users.index');
});
