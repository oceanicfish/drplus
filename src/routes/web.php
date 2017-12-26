<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "welcome to laravel server " . getHostByName(getHostName());
});

Route::get('/redis/test', function () {
    $redis = new Predis\Client('tcp://doctorplus_redis_1:6379');
//    $redis = Redis::Connection();
    if ($redis->zscore('mySortedSet', 'one')){
        return "nil in if";
    }else {
        return "nil in else ( " . $redis->zscore('mySortedSet', 'one') . ")";
    }
    $redis->set('foo', 'bar');
    $value = $redis->get('foo');
    return $value;
});

Route::resources([
  'doctors'=>'DoctorController',
]);
