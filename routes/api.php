<?php
use Illuminate\Support\Facades\Route;

Route::get('/patient/{id}', 'PatientController@show');
Route::post('/patient/{id}/encounter', 'PatientController@addEncounter');
Route::post('/claims', 'ClaimController@create');
