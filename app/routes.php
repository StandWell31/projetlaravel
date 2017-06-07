<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$notes = Ajout::orderBy('created_at')->get();

  return View::make('home.index', ['notes' => $notes]);
});

Route::get('/ajout', function()
{
	return View::make('ajout.ajout');
});

Route::post('/ajout', function()
{
	$inputs = Input::except('_token');
	$note = new Ajout;
	foreach($inputs as $k=>$v){
			$note->$k = $v;
	}
	$note->save();
	return Redirect::to('/');
});



Route::post('/delete/{id}', function ($id)
{
	$note = Ajout::find($id);
	$note->delete();
	return Redirect::to('/');
});


Route::get('modification/{id}',function ($id)
{
    return View::make('modification.modification')->with('id', $id);
});

Route::post('modification/{id}',function ($id)
{
    $inputs = Input::except('_token');
    $note = Ajout::find($id);
    foreach ($inputs as $key=>$value){
        $note->$key = $value;
    }
    $note->save();

    return Redirect::to('/');
});
App::missing(function ($exception){
    return Response::view('errors.404', array(), 404);

});
