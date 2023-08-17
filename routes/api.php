<?php

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/employees',function(){
    $employees =Employee::orderBy('last_name','DESCf')->get();

    return EmployeeResource::collection($employees);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
