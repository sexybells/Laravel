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
Route::group([
    'prefix' => 'users',
    'name' => 'users.'
], function () {
    Route::get('/', function () {
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
    Route::post('store', function ( Request $request ) {
    $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'password' => bcrypt('123456'),
        ]);

        return redirect()->route('users.index');
    })->name('users.store');

    Route::get('/create', function () {
        return view('create');
    });
    // Route::get('users/update/{id}', function ($id) {
    //     $users = DB::table('users')->select('*')->where('id',$id)->get();
    //     //  dd($users);

    //     return view('users/update',compact($users)

    //     );
    // });
    Route::get('/update/{id}', function($id){
        //....
        $user = User::find($id);
        // dd($user['id']);
        return view('users/update',[
            $name = 'name' => $user['name'],
            $email= 'email' =>$user['email'],
            $birthday = 'birthday'=> $user['birthday'],
            $password = 'password'=>$user['password'],
            $address = 'address'=>$user['address'],
            $id ='id'=> $user['id'],
        ]);

    })->name('users.update');



    Route::view('/create', 'users/create')->name('users.create');

    Route::get('{id}', function ($id) {
        $user = User::find($id);
    })->name('users.show');

    // Route::post('users/update/{id}', function ($id) {
    //     $user = User::find($id);

    //     $user->update([
    //         'name' => 'Thanh dep trai',
    //     ]);

    //     return redirect()->route('users.index');
    // });

    Route::post('delete/{id}', function ($id) {
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
});
// Route::get('users/', function () {
//     $users = User::all();

//     foreach ($users as $key => $user) {
//        $user->posts;
//     //    dd($user->posts->count());
//     }

//     return view('starter', [
//         'users' => $users ->toArray()
//     ]);
// })->name('users.index');
// // Route::get('post', function () {
// //     $posts = factory(Post::class, 10)
// //     ->make()
// //     ->toArray();

// //     return view('post', [
// //         'posts' => $posts
// //     ]);
// // });
// Route::post('users/store', function ( Request $request ) {
// $data = $request->all();
//     $user = User::create([
//         'name' => $data['name'],
//         'email' => $data['email'],
//         'birthday' => $data['birthday'],
//         'password' => bcrypt('123456'),
//     ]);

//     return redirect()->route('users.index');
// })->name('users.store');

// Route::get('users/create', function () {
//     return view('create');
// });
// // Route::get('users/update/{id}', function ($id) {
// //     $users = DB::table('users')->select('*')->where('id',$id)->get();
// //     //  dd($users);

// //     return view('users/update',compact($users)

// //     );
// // });
// Route::get('users/update/{id}', function($id){
//     //....
//     $user = User::find($id);
//     // dd($user['id']);
//     return view('users/update',[
//         $name = 'name' => $user['name'],
//         $email= 'email' =>$user['email'],
//         $birthday = 'birthday'=> $user['birthday'],
//         $password = 'password'=>$user['password'],
//         $address = 'address'=>$user['address'],
//         $id ='id'=> $user['id'],
//     ]);

// })->name('users.update');



// Route::view('users/create', 'users/create')->name('users.create');

// Route::get('users/{id}', function ($id) {
//     $user = User::find($id);
// })->name('users.show');

// // Route::post('users/update/{id}', function ($id) {
// //     $user = User::find($id);

// //     $user->update([
// //         'name' => 'Thanh dep trai',
// //     ]);

// //     return redirect()->route('users.index');
// // });

// Route::post('users/delete/{id}', function ($id) {
//     $user = User::find($id);

//     $user->delete();

//     return redirect()->route('users.index');
// })->name('users.delete');
// Route::get('post', function () {
//     $posts = \App\Models\Post::all();

//     foreach ($posts as $key => $post) {
//         $post->user;
//     }

//     return view('post', [
//                 'posts' => $posts->toArray()
//             ]);
// });
