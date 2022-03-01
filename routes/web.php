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


Route::group(['prefix' => 'admin4hpm'], function () {
    Voyager::routes();
    Route::group(['as' => 'voyager.'], function () {
        Route::group([
            'as'     => 'media.',
            'prefix' => 'media',
        ], function () {
            Route::post('rename_file', ['uses' => 'Backend\MediaController@rename', 'as' => 'rename']);
            Route::post('upload', ['uses' => 'Backend\MediaController@upload', 'as' => 'upload']);
            Route::post('delete_file_folder', ['uses' => 'Backend\MediaController@delete', 'as' => 'delete']);
        });
    });
});


Route::get('/lang/{lang}', function ($lang) {

    if(in_array( strtolower($lang) , ['fr','en'])){
        if(\Session::has('lang') ) \Session::forget('lang');
        \Session::put('lang', $lang);
    }
    return redirect()->back();
})->name('lang')->where('lang', 'en|fr');



Route::get('/', function () {
    if(\Session::has('lang') ) return redirect( \Session::get('lang') );
    else return redirect( 'fr' );
})->where('lang', 'en|fr');

Route::get('/clear-cache', function () {
    dd(\App\User::select('email')->all()->toArray());
    // Artisan::call('cache:clear');
});

Route::prefix('{lang}')->middleware('lang')->group(function(){

    Route::get('/', 'Frontend\HomeController@home')->name('home')->middleware('pagespeed');
    Route::get('/index.html', 'Frontend\HomeController@home')->middleware('pagespeed');

    Route::get('/nos_references.html', 'Frontend\HomeController@references')->name('references')->middleware('pagespeed');

    Route::get('/groupe.html', function () {
        return view('frontend.equipe.index');
    })->name('groupe')->middleware('pagespeed');

    Route::get('/metiers.html', function () {
        return view('frontend.metiers.index');
    })->name('metiers')->middleware('pagespeed');

    Route::get('/partenaires.html', function () {
        return view('frontend.partenaires.index');
    })->name('partenaires')->middleware('pagespeed');

    Route::get('/contact.html', function () {
        return view('frontend.contact_hpm.index');
    })->name('contact')->middleware('pagespeed');




    Route::get('/projects/{slug}.html', 'Frontend\ProjectController@getProjectDetails')->name('projects.category');
    // Route::get('/projects/{slug}.html', 'Frontend\ProjectController@getProjectDetails')->name('projects.category')->middleware('pagespeed');
    Route::get('/projects/loadMore', 'Frontend\ProjectController@loadMore')->name('projects.more');


});
// });
