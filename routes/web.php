<?php
use illuminate\http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Notification;

Route::get('/', function () {
    return view('donorsignup');
});

Route::get('/login', function () {
    return view('donorlogin');
})->name('login.index');

Route::get('/signup', function () {
    return view('donorsignup');
})->name('signup.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard.index');

Route::get('/notifications', function ()  {
    return view('index', [
        'notifications' => Notification::latest()->paginate()
    ]);
})->name('notifications.index');

Route::view('/notifications/create', 'create')
    ->name('notifications.create');

Route::get('/notifications/{id}/edit', function (Notification $id)  {

    return view('edit',
    ['notification'=> $id]);
})->name('notifications.edit');

Route::get('/notifications/{id}', function (Notification $id)  {

    return view('show', ['notification' => $id]);
})->name('notifications.show');

Route::post('/notifications', function(Request $request){
    $data=  $request-> validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_desccription'=> 'required'
    ]);

    $notification= new Notification;
    $notification-> title= $data['title'];
    $notification-> description= $data['description'];
    $notification-> long_desccription= $data['long_desccription'];

    $notification-> save();

    return redirect()->route('notifications.show', ['id'=> $notification->id])
    -> with('success', 'New Notification Added');

})-> name('notifications.store');

Route::put('/notifications/{id}', function(Notification $id, Request $request){
    $data=  $request-> validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_desccription'=> 'required'
    ]);

    $notification=$id;
    $notification-> title= $data['title'];
    $notification-> description= $data['description'];
    $notification-> long_desccription= $data['long_desccription'];

    $notification-> save();

    return redirect()->route('notifications.show', ['id'=> $notification->id])
    -> with('success', 'Updated Notification Successfully');

})-> name('notifications.update');

Route::delete('/notification/{id}', function(Notification $id){
    $id->delete();
    return redirect()->route('notifications.index')
    ->with('success', 'Notification was removed');
})->name('notifications.destroy');

Route::put('notifications/{id}/toggle-complete', function(Notification $id){
   $id->toggleComplete();
    return redirect()->back()-> with('success', "Notification Updated Successfully" );
});

Route::fallback(function () {
    return 'Still got somewhere!';
});
