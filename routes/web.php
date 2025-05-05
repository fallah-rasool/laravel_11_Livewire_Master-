<?php
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use App\Livewire\Counter;
use App\Livewire\CounterAlpine;
use App\Livewire\DispatchListening;
use App\Livewire\EditPost;
use App\Livewire\EventListener;
use App\Livewire\IsMagic;
use App\Livewire\MagicActions;
use App\Livewire\PostWelcome;
use App\Livewire\Profile;
use App\Livewire\SecurityConcerns;
use App\Livewire\ShowCustomer;
use App\Livewire\Todo\Index;
use App\Livewire\Post as PostLivewire;
use App\Livewire\PostComments;
use App\Livewire\Refresh;
use App\Livewire\TaskList;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/counter', Counter::class)->name('page.counter');
Route::get('index',Index::class)->name('page.task');


Route::get('/welcom/{email}',PostWelcome::class)->name('Page.Welcom');


Route::get('/creat-user',static function(){
    $time= time();
   $user =  User::create(
       [
            'name'=>"user-$time",
            'email'=>"user-$time",
            'email_verified_at'=>Carbon::now(),
            'password'=>'secret',
        ]
       );
       dd($user);
})->name('creat.user');

Route::get('/profile/{user}', Profile::class)->name('page.user-profile');

Route::get('/login-byId/{id}', function ($id) {
    $user = User::find($id);

    if ($user) {
        Auth::login($user);
        return redirect('/');
        // return "✅ کاربر با ID {$id} با موفقیت لاگین شد. نام: {$user->name}";
    } else {
        return "❌ کاربری با این ID پیدا نشد.";
    }
})->name('login-by-id');

Route::get('/showCustomer',ShowCustomer ::class)->name('page.show.customer');
Route::get('/counterAlpine',CounterAlpine ::class)->name('page.counter.alpine');
Route::get('/securityConcerns',SecurityConcerns ::class)->name('page.security.concerns');

Route::get('/post', PostLivewire::class)->name('all.post');
Route::get('/edit-post/{post}', EditPost::class)->name('edit.post');

Route::get('/creat-post',static function(){
   $user =  Post::create(
       [
            'title'=>"عنوان پیش فرض",
            'content'=>"محتوای پیش فرض",
         ]
       );
   return   redirect()->back();
      
})->name('creat.post');


Route::get('/posts/{post}', PostComments::class)->name('post.comments');

Route::get('/simulate-login', function () {
    $user = User::first();
    Auth::login($user);
    return redirect('/');
})->name('simulate-login');

Route::get('/logout', function () {  
    Auth::logout(); // کاربر رو لاگ‌ آوت می‌کنه  
    return redirect('/'); // یا هر صفحه‌ای که می‌خوای بعد از logout بره  
})->name('logout');

Route::get('/todos', \App\Livewire\ShowTodos::class)->middleware('auth');

Route::get('/refresh', Refresh::class)->name('page.refresh');
Route::get('/event-listeners', EventListener::class)->name('page.event.listener');

Route::get('/dispatchListening',DispatchListening::class)->name('page.dispatchListening');
Route::get('/task-list',TaskList::class)->name('page.task.list');


Route::get('/magic-actions',MagicActions::class )->name('page.magic.actions');

Route::get('/is-magic',IsMagic::class )->name('page.is.magic');