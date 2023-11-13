<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CourseController::class,"index"]);

Route::post("/enroll",[ApplicationController::class, "new_application"]);

Route::get("/admin",[AdminController::class,"index"]);

Route::get("/application/{id_application}/confirm",[ApplicationController::class,"confirm"]);

Route::post("/course/create",[CourseController::class,"create"]);

Route::post("/category/create",[CategoryController::class,"create_category"]);

Route::get('/auth', function() {return view('auth');});

Route::get('/reg', function() {return view('reg');});

Route::get('/profile', function() {return view('profile');});

Route::post("/login-valid", [UserController::class, 'login_valid']);

Route::post("/register-valid", [UserController::class, 'register_valid']);

Route::get("/logout", [UserController::class, 'signout']);