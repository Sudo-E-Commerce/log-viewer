<?php
App::booted(function() {
	$namespace = 'Sudo\Log\Http\Controllers';
	
	Route::namespace($namespace)->name('admin.')->prefix(config('app.admin_dir'))->middleware(config('log-viewer.route.attributes.middleware'))->group(function() {
		// view
		Route::get('logs/view', 'LogController@view')->name('logs.view');
	});
});