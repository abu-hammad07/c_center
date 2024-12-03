<?php

use Illuminate\Support\Facades\Route;

// ============================================= doplexer-VBS =============================================

Route::get('/channels', function(){
    return view('doplexer.channels');
})->name('channels');

Route::get('/numbers-list', function(){
    return view('doplexer.numbers-list');
})->name('numbers-list');

Route::get('/tools-and-compliance', function(){
    return view('doplexer.tools-compliance');
})->name('tools-and-compliance');

Route::get('/my-requests', function(){
    return view('doplexer.my-requests');
})->name('my-requests');

Route::get('/my-requests/request-channel', function(){
    return view('doplexer.request-channel');
})->name('request-channel');

Route::get('/', function(){
    return view('doplexer.broadcast');
})->name('broadcast');

Route::get('/broadcast/broadcast-list', function(){
    return view('doplexer.broadcast-list');
})->name('broadcast.list');

Route::get('/broadcast/broadcast-sms', function(){
    return view('doplexer.broadcast-sms');
})->name('broadcast.sms');

Route::get('/broadcast/broadcast-whatsapp', function(){
    return view('doplexer.broadcast-whatsapp');
})->name('broadcast.whatsapp');

Route::get('/broadcast/broadcast-email', function(){
    return view('doplexer.broadcast-email');
})->name('broadcast.email');

Route::get('/broadcast/broadcast-voice', function(){
    return view('doplexer.broadcast-voice');
})->name('broadcast.voice');

Route::get('/flow', function(){
    return view('doplexer.flows');
})->name('flow');

Route::get('/broadcast/templates', function(){
    return view('doplexer.broadcast-templates');
})->name('broadcast.templates');

Route::get('/broadcast/template', function(){
    return view('doplexer.broadcast-template');
})->name('broadcast.template');

Route::get('/flow/templates', function(){
    return view('doplexer.flow-templates');
})->name('flow.templates');



Route::get('/analyze/dashboard-new', function(){
    return view('doplexer.dashboard-new');
})->name('dashboard.new');

Route::get('/analyze/dashboard', function(){
    return view('doplexer.dashboard-old');
})->name('dashboard.old');


Route::get('/people/overview', function(){
    return view('doplexer.people.overview');
})->name('people.overview');




// ============================================= doplexer-VBS =============================================
