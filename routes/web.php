<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Jobs\JobList;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/om', JobList::class);

Route::get('/jobs', \App\Livewire\Jobs\JobsPage::class);
Route::get('/jobs/{id}', \App\Livewire\Jobs\JobDetails::class);