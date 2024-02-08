<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\SetSanctumGuard;
use App\Http\Middleware\VerifyAdminGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create', [AdminController::class, 'store']);

Route::post('/login', [AdminController::class, 'login']);

Route::get('admin/teste',[AdminController::class,'verificaUsuarioLogado'])
->middleware(['auth:sanctum',
SetSanctumGuard::class,
VerifyAdminGuard::class,
IsAuthenticated::class]);