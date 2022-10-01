<?php


use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use web\Controllers\CategoryController;
use web\Controllers\TagController;

$request = Request::createFromGlobals();

function request() {
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router() {
    global $router;

    return $router;
}


$router->get('/category',[CategoryController::class,'index']);
$router->get(   '/category/{id}/show',[CategoryController::class,'show']);
$router->get('/category/create',[CategoryController::class,'create']);
$router->post('/category/store',[CategoryController::class,'store']);
$router->get('/category/{id}/edit',[CategoryController::class,'edit']);
$router->post('/category/update',[CategoryController::class,'update']);
$router->get(   '/category/{id}/delete',[CategoryController::class,'destroy']);

$router->get('/tag',[TagController::class,'index']);
$router->get(   '/tag/{id}/show',[CategoryController::class,'show']);
$router->get('/tag/create',[CategoryController::class,'create']);
$router->post('/tag/store',[CategoryController::class,'store']);
$router->get('/tag/{id}/edit',[CategoryController::class,'edit']);
$router->post('/tag/update',[CategoryController::class,'update']);
$router->get(   '/tag/{id}/delete',[CategoryController::class,'destroy']);