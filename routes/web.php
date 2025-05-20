<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/', function () {
    return view('welcome');
});

Route::get('/test',function(Request $request){
    Log::info('this is your age'.rand(1,30));
    return redirect()->to('/');
});




// Route::get('/kjkjkdjkfjdkjkejiek',function(){
//     return view("about");
// })->name('about.us');

// Route::get('/contact',function(){
//     return view("contact");
// });

Route::get('/contact',[FirstController::class,'index']);
// Route::get('/about',LearnController::class)->name('about.us');

Route::post('/store/contact',[FirstController::class,'store'])->name('store.contact');


// Route::get('/user',[UserController::class,'index']);
// Route::put('/user/{id}',[UserController::class,'update']);
Route::redirect('/user','/about',301);

Route::get('/test',function(Request $request){
    $request->session()->put('age','24');
    //session(['name'=>'Learnhunt']);
});

Route::get('/all',function(Request $request){
    return $request->session()->all();
});



//__Form request route__//
Route::post('/student/store',[FirstController::class, 'StudentStore'])->name('student.store');





// Route::get('/country',function(){
//     return view('country');
// })->middleware('country');

Route::get('/student',function(){
    return view('student')->middleware('student');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
