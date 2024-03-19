<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/isLogged", function(Request $request){
    $name = $request->user()?->name  ?? null;
    return $name
    ? response()->json(["message"=>"is logged"],202) 
    : response()->json(["message"=>"is not logged"],203);
});

Route::get("/message/{to}"); 