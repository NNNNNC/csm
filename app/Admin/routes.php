<?php

use Illuminate\Routing\Router;
use OpenAdmin\Admin\Facades\Admin; 
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\SurveyController;
use App\Admin\Controllers\OfficesController;
use App\Admin\Controllers\DashboardController;
use App\Admin\Controllers\ServicesController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', action: [DashboardController::class, 'index'])->name('dashboard');
    $router->resource('survey', SurveyController::class);
    $router->resource('offices', OfficesController::class);
    $router->resource('services', ServicesController::class);
    $router->get('/survey-data', [DashboardController::class, 'surveyDataByOffice'])->name('survey.data');
});