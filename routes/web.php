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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/', function () {
    $users = User::all();

    foreach ($users as $key => $user) {
       $user->posts;
    //    dd($user->posts->count());
    }

    return view('starter', [
        'users' => $users ->toArray()
    ]);
})->name('users.index');
// Route::get('post', function () {
//     $posts = factory(Post::class, 10)
//     ->make()
//     ->toArray();

//     return view('post', [
//         'posts' => $posts
//     ]);
// });
Route::post('users/store', function ( Request $request ) {
$data = $request->all();
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'birthday' => $data['birthday'],
        'password' => bcrypt('123456'),
    ]);

    return redirect()->route('users.index');
})->name('users.store');

Route::get('users/create', function () {
    return view('create');
});

Route::view('users/create', 'users/create')->name('users.create');

Route::get('users/{id}', function ($id) {
    $user = User::find($id);
})->name('users.show');

Route::get('users/update/{id}', function ($id) {
    $user = User::find($id);

    $user->update([
        'name' => 'Thanh dep trai',
    ]);

    return redirect()->route('users.index');
});

Route::post('users/delete/{id}', function ($id) {
    $user = User::find($id);

    $user->delete();

    return redirect()->route('users.index');
})->name('users.delete');
Route::get('post', function () {
    $posts = \App\Models\Post::all();

    foreach ($posts as $key => $post) {
        $post->user;
    }

    return view('post', [
                'posts' => $posts->toArray()
            ]);
});
